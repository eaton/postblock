
CONTENTS OF THIS FILE
---------------------

 * Description
 * Configuration
 * Theming


DESCRIPTION
-----------

The Post Block module allows you to create blocks (Post Blocks) that display a
list of links to the various content types on your site.

The benefit of using Post Block over the default 'Create content' links (in the
Navigation menu) is that the Post Block links are configurable - i.e. you can
specify which content types are displayed (or hidden) and set the order they're
displayed in.

With the additional ability to create as many Post Blocks as you want, you can
easily create blocks for the different roles on your site so that certain role
members can only create certain types of content.

NOTE: Regardless of the content types enabled for a Post Block, users without
the 'create [content_type] content' permission won't see the link for that
content type.


CONFIGURATION
-------------

1. INSTALL AND ENABLE POST BLOCK

   See: http://drupal.org/getting-started/install-contrib/modules

2. SET PERMISSIONS

   Goto: User Management > Permissions (admin/user/permissions)
   Enable the 'administer postblock' permission for your admin role.

3. SET NUMBER OF POST BLOCKS

   Goto: Site Configuration > Post Block (admin/settings/postblock)
   Enter the number of Post Blocks you want to use (this is the number of blocks
   that will be created on the Blocks administration page (see next step)).

4. ENABLE BLOCKS

   Goto: Site Building > Blocks (admin/build/block)
   Enable the Post Blocks by moving them to the region(s) you want them
   displayed in.

5. CONFIGURE BLOCKS

   Block Title:
   The title that will be displayed at the top of the block. Leave it blank to
   use the default title ('Post Content').

   Block Name:
   The name of the block as seen on the Blocks administration page
   (admin/build/block). It is not displayed anywhere on the block, it's just
   meant to help distinguish between the various Post Blocks you have enabled.

   Selection Method:
   This setting allows you to change the way Post Block displays content types.

    * Setting it to 'Show' (default) will mean that any content types you select
      below will be displayed in the block. This also means that any content
      types you create after configuring this block won't be displayed
      automatically.

    * Setting it to 'Hide' will mean that any content types you select below
      will not be displayed in the block. This also means that any content types
      you create after configuring this block will be displayed automatically.

   Content Types:
   Tick the checkboxes for the content types you want to be shown or hidden
   (depending on the Selection Method above) for your block. Rearrange the
   content types into the order you want them displayed in your block.


THEMING
-------

Post Blocks can be easily themed, either altogether or individually, by
overriding the 'postblock.tpl.php' file. Both methods are described below.

For instructions on overriding template files, see the 'Overriding themable
output' pages on Drupal.org: http://drupal.org/node/341628

1. OVERRIDE THEME FOR ALL POST BLOCKS

   Simply override 'postblock.tpl.php' in your theme, changing the HTML code to
   suit your needs. Note that this will affect ALL Post Blocks on your site.

   For example:
   To change the default wording of the links from 'Create [content_type]' to
   'Add [content_type]', simply override 'postblock.tpl.php' and change the word
   'Create' (within the <a> tag) to 'Add'.
   Now all your Post Blocks will display the new wording.

2. OVERRIDE THEME FOR INDIVIDUAL POST BLOCKS

   Override 'postblock.tpl.php' in your theme, then make a copy of it and rename
   the copy to 'postblock-[postblock_id].tpl.php' (where [postblock_id] is the
   ID of the Post Block you wish to change (see below)).

   To find the ID of a Post Block, look at the end of the URL when on the
   block's settings page (or hover over the 'Configure' link on the Blocks
   administration page and look in the status bar). The ID is the number after
   'postblock/' (e.g. if the URL is 'admin/build/block/configure/postblock/3',
   the Post Block ID would be '3').

   For example:
   To change the default wording of the links from 'Create [content_type]' to
   'Add [content_type]', but only for the #2 Post Block, override
   'postblock.tpl.php', make a copy of it and rename the copy to
   'postblock-2.tpl.php', then edit 'postblock-2.tpl.php' and change the word
   'Create' (within the <a> tag) to 'Add'.
   Now your #2 Post Block will display the new wording while all other Post
   Blocks will display the default wording.

   NOTE: If you try to override a specific Post Block but forget to put a copy
   of 'postblock.tpl.php' in your theme, the override won't work.
   For more information about this bug, see: http://drupal.org/node/279573
