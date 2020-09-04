<?php

use YOOtheme\Util\File;
use YOOtheme\Util\Str;

$config = [

    'name' => 'yootheme/joomla-finder',

    'inject' => [

        'scripts' => 'app.scripts',
        'user' => 'JFactory::getUser',
        'customizer' => 'theme.customizer',

    ],

    'routes' => function ($routes) {

        $routes->get('/finder', function ($response) {

            $base = JPATH_ADMINISTRATOR.'/components/com_media';
            JLoader::register('MediaHelper', "{$base}/helpers/media.php");
            define('COM_MEDIA_BASE', JPATH_ROOT.'/'.JComponentHelper::getParams('com_media')->get('file_path'));

            $files = [];

            foreach (JControllerLegacy::getInstance('Media', ['base_path' => $base])->getModel('list')->getList() as $type => $items) {
                foreach ($items as $item) {
                    $files[] = [
                        'name' => $item->get('name'),
                        'path' => $item->get('path_relative'),
                        'url' => strtr(ltrim(substr($item->get('path'), strlen(JPATH_ROOT)), '/'), '\\', '/'),
                        'type' => $type == 'folders' ? 'folder' : 'file',
                        'size' => $item->get('size') ? JHtml::_('number.bytes', $item->get('size')) : 0,
                    ];
                }
            }

            return $response->withJson($files);
        });

        $routes->post('/finder/rename', function ($oldFile, $newName, $response) {

            if (!$this->user->authorise('core.create', 'com_media') || !$this->user->authorise('core.delete', 'com_media')) {
                $this->app->abort(403, 'Insufficient User Rights.');
            }

            $extension = (new File($newName))->getExtension();
            $params = JComponentHelper::getParams('com_media');
            $allowed = $params->get('upload_extensions').',svg';

            $isValidFilename = !empty($newName)
                && (empty($extension) || in_array($extension, explode(',', $allowed)))
                && (defined('PHP_WINDOWS_VERSION_MAJOR')
                    ? !preg_match('#[\\/:"*?<>|]#', $newName)
                    : strpos($newName, '/') === false);

            if (!$isValidFilename) {
                $this->app->abort(400, 'Invalid file name.');
            }

            $root = File::normalizePath(JPATH_ROOT.'/'.$params->get('file_path'));
            $oldFile = File::normalizePath(JPATH::clean("{$root}/{$oldFile}"));
            $path = dirname($oldFile);
            $newPath = File::normalizePath("{$path}/{$newName}");

            if (!Str::startsWith($path, $root) || $path !== dirname($newPath)) {
                $this->app->abort(400, 'Invalid path.');
            }

            if (!JFile::move($oldFile, $newPath)) {
                throw new Exception('Error writing file.');
            }

            return $response->withJson('Successfully renamed.');
        });

    },

    'events' => [

        'theme.admin' => function ($theme) {

            // add assets
            $this->scripts->add('customizer-finder', "{$this->path}/app/finder.min.js", 'customizer');

            // add data
            $this->customizer->addData('media', [
                // TODO
                // 'path' => \JComponentHelper::getParams('com_media')->get('file_path'),
                'canCreate' => $this->user->authorise('core.manage', 'com_media') || $this->user->authorise('core.create', 'com_media'),
                'canDelete' => $this->user->authorise('core.manage', 'com_media') || $this->user->authorise('core.delete', 'com_media'),
            ]);
        },

    ],

];

return defined('_JEXEC') ? $config : false;
