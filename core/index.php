<?php
/**
 * Global config.
 */

if (!defined("ABSPATH")) {
  exit(); // Exit if accessed directly.
}

function get_config() {
  // Default values.
  $default = include CORE_THEME_DIR . "core/config/default.php";

  // Theme values.
  $global = include CORE_THEME_DIR . "core/config/index.php";

  // Override default values.
  return array_replace_recursive($default, $global);
}
