<?php
/**
 * Removes the --wp--preset-color variables.
 */

if (!defined("ABSPATH")) {
  exit(); // Exit if accessed directly.
}

require_once CORE_THEME_DIR . "core/index.php";

function init_disable_global_styles() {
  $config = get_config();

  if ($config["disable"]["global-styles"]) {
    remove_action("wp_enqueue_scripts", "wp_enqueue_global_styles");
    remove_action("wp_footer", "wp_enqueue_global_styles", 1);
  }
}

init_disable_global_styles();
