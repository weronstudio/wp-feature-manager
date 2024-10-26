<?php
/**
 * Removes WordPress version from <head>.
 */

if (!defined("ABSPATH")) {
  exit(); // Exit if accessed directly.
}

require_once CORE_THEME_DIR . "core/index.php";

function init_disable_version() {
  $config = get_config();

  if ($config["disable"]["version"]) {
    remove_action("wp_head", "wp_generator");
  }
}

init_disable_version();
