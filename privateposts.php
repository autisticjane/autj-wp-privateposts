<?php
  /*
  Plugin Name: gotjane: WP Private Posts
  Plugin URI: https://github.com/gotjane/gotjane-wp-privateposts
  Description: Allow users with Subscriber level view and comment private posts.
  Created to prevent complications and hassles, using <a href="https://krisophical.com/journal/keeping-it-simple/">Tiny May's</a>
  solution to a popular privacy pluginplugi plugin.
  Author: Liz Lawson
  Version: 1.0
  Author URI: http://janepedia.com/
  License: GPLv3 or later
  */
  // Allow subscribers to see Private posts and pages
$subRole = get_role( 'subscriber' );
  //Remove either of the following lines (16 17) if you do not want subscribers to be able to see both posts and pages.
$subRole->add_cap( 'read_private_posts' );
$subRole->add_cap( 'read_private_pages' );
?>
