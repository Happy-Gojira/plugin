<?php

//add top-level admin menu
function walkToTheMoon_add_toplevel_menu(){

  /*
  add_menupage(
    string &page_title,
    string $menu_title,
    string &capability,
    string $menu_slug,
    callable $functiona = '',
    string $icon_url = '',
    int $position = null
  )
  */
  add_menu_page(
    'walkToTheMoon Settings',
    'walkToTheMoon',
    'manage_options',
    'walktothemoon',
    'walktothemoon_display_settings_page',
    'dashicons-admin-generic',
    null
  );
}
add_action('admin_menu', 'walkToTheMoon_add_toplevel_menu');

?>
