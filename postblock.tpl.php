<?php
// $Id$

/**
 * @file postblock.tpl.php
 * Controls the output of the  'Post content' sidebar block.
 *
 * Available variables:
 * - $type_info: Raw data from node_get_types() for each content type that
 *   should be linked.
 * - $items: An array of formatted data for each content type that should be
 *   linked. Each one contains:
 *   - $item->type_info: A keyed array containing the full data returned by
 *     node_get_types() for this content type.
 *   - $item->type: The machine-readable name of the content type.
 *   - $item->type_class: A CSS-safe version of $type, suitable for use in
 *     classes or IDs.
 *   - $item->name: The human-readable name of the content type.
 *   - $item->description: The verbose explanation of the content type, usually
 *     presented on the node/add overview page.
 *   - $item->help: The detailed instructions for posting the content type,
 *     usually presented on the node/add/$type form.
 *   - $item->url: The full URL of the node/add page for the content type.
 *   - $item->link: The fully formatted HTML link to the node/add page for the
 *     content type.
 */
?>
<div class="item-list" id="postblock">
  <ul>
<?php foreach ($items as $item): ?>
    <li id="postblock-<?php print $item->type_class ?>" class="postblock-item">
      <?php print $item->link; ?>
    </li>
<?php endforeach; ?>
  </ul>
</div>
