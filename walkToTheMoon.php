<?php
/*
Plugin Name: walkToTheMoon
Description: Counter of steps needed to reach the moon
Plugin URI: http://www.jack-mulvey-scott.com
Author: Jack scott
Version: 1.0
Text Domain: walkToTheMoon
Domain Path: /languages
License: GPL v2 or later
License URI: https://www.gnu.org
*/

//exits if file is called directly
if (!defined('ABSPATH')) {
  exit;
}

//display the plugin settings page
function walktothemoon_display_settings_page(){

  //check if user is allowed access
  if (!current_user_can('manage_options')){
    return;
  }
  ?>
  <div class="wrap">
    <h1><?php echo esc_html(get_admin_page_title());?></h1>
    <form action="options.php" method="post">

      <?php
      //output security fields
      settings_fields('walktothemoon_options');

      //output setting sections
      do_settings_sections('walktothemoon');

      //submit button
      submit_button();

      ?>

    </form>
  </div>
  <?php
}


 ?>
