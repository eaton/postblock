<?php

/**
 * @file
 * Themes the output of Post Block.
 *
 * Available variables:
 * - $types: Raw data for each enabled content type.
 * - $verb:  The word to use when constructing the link title. (Defaults to 'Create'.)
 * - $items: An array of formatted data for each enabled content type. Each one
 *   contains:
 *   - $item->type: The machine-readable name of the content type.
 *   - $item->name: The human-readable name of the content type.
 *   - $item->description: The verbose explanation of the content type, usually
 *     presented on the node/add overview page.
 *   - $item->url: The URL of the node/add page for the content type.
 *   - $item->zebra: An alternating status for each item (used for setting 'odd'
 *     or 'even' classes).
 *   - $item->first: A boolean representing the item's position at the front of
 *     the list.
 *   - $item->last: A boolean representing the item's position at the end of the
 *     list.
 *   - $item->active: Whether or not the link points to the current page.
 */
?>

<ul class="menu">
  <?php foreach ($items as $key => $item): ?>
    <li class="leaf<?php print $item->zebra ? ' odd' : ' even'; ?><?php print $item->first ? ' first' : ''; ?><?php print $item->last ? ' last' : ''; ?><?php print $item->active ? ' active' : ''; ?>">
      <a href="<?php print $item->url; ?>" title="<?php print $item->description; ?>" class="<?php print $item->active ? 'active' : ''; ?>">
        <?php print t('!verb !type', array('!verb' => $verb, '!type' => $item->name)); ?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>
