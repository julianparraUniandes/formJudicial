<?php

// Title
$title = $this->el($element['title_element'], [

    'class' => [
        'el-title',
        'uk-{title_style}',
        'uk-card-title {@panel_style} {@!title_style}',
        'uk-heading-{title_decoration}',
        'uk-text-{title_color} {@!title_color: background}',
        'uk-margin[-{title_margin}]-top {@!title_margin: remove}',
        'uk-margin-remove-top {@title_margin: remove}',
        'uk-margin-remove-bottom',
    ],

]);

// Meta
$meta = $this->el('div', [

    'class' => [
        'el-meta',
        'uk-[text-{@meta_style: meta}]{meta_style}',
        'uk-text-{meta_color}',
        'uk-margin[-{meta_margin}]-top {@!meta_margin: remove}',
        'uk-margin-remove-bottom {@!meta_style: |meta} [uk-margin-{meta_margin: remove}-top]',
    ],

]);

// Content
$content = $this->el('div', [

    'class' => [
        'el-content',
        'uk-text-{content_style}',
        'uk-margin[-{content_margin}]-top {@!content_margin: remove}',
    ],

]);

// Link
$link_container = $this->el('div', [

    'class' => [
        'uk-margin[-{link_margin}]-top {@!link_margin: remove}',
    ],

]);

?>

<?php if ($props['meta'] && $element['meta_align'] == 'top') : ?>
<?= $meta($element, $props['meta']) ?>
<?php endif ?>

<?php if ($props['title'] && $element['title_display'] != 'lightbox') : ?>
<?= $title($element) ?>
    <?php if ($element['title_color'] == 'background') : ?>
    <span class="uk-text-background"><?= $props['title'] ?></span>
    <?php elseif ($element['title_decoration'] == 'line') : ?>
    <span><?= $props['title'] ?></span>
    <?php else : ?>
    <?= $props['title'] ?>
    <?php endif ?>
<?= $title->end() ?>
<?php endif ?>

<?php if ($props['meta'] && $element['meta_align'] == 'bottom') : ?>
<?= $meta($element, $props['meta']) ?>
<?php endif ?>

<?php if ($element['image_align'] == 'between') : ?>
<?= $props['image'] ?>
<?php endif ?>

<?php if ($props['content'] && (!$element['lightbox'] || $element['content_display'] != 'lightbox')) : ?>
<?= $content($element, $props['content']) ?>
<?php endif ?>

<?php if ($props['link'] && $element['link_style'] != 'panel' && $element['link_text']) : ?>
<?= $link_container($element, $node->link->render($element, $element['link_text'])) ?>
<?php endif ?>
