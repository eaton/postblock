<?php
// $Id$

/**
 * @file postblock-item.tpl.php
 * Controls the output of each item in the  'Post content' sidebar block.
 *
 * Available variables:
 * - $type_info: A keyed array containing the full data returned by
 *   node_get_types() for this content type.
 * - $type: The machine-readable name of the content type.
 * - $type_class: A CSS-safe version of $type, suitable for use in classes or IDs.
 * - $name: The human-readable name of the content type.
 * - $description: The verbose explanation of the content type, usually presented
 *   on the node/add overview page.
 * - $help: The detailed instructions for posting the content type, usually
 *   presented on the node/add/$type form.
 * - $url: The full URL of the node/add page for the content type.
 */
?>
<li id="postblock-<?php print $type_class ?>" class="postblock-item">
  <a href="<?php print $url ?>" title="<?php print $name ?>"><?php print t("Post a !type", array('!type' => $name)) ?></a>
</li>
