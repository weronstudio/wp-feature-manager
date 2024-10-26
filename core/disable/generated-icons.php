<?php
/**
 * Removes generated icons.
 */

if (!defined("ABSPATH")) {
  exit(); // Exit if accessed directly.
}

require_once CORE_THEME_DIR . "core/index.php";

function init_disable_generated_icons() {
  $config = get_config();

  if ($config["disable"]["generated-icons"]) {
    remove_action("wp_head", "wp_site_icon", 99);
  }
}

init_disable_generated_icons();
