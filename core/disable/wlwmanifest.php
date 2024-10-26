<?php
/**
 * Removes wlwmanifest.xml.
 */

if (!defined("ABSPATH")) {
  exit(); // Exit if accessed directly.
}

require_once CORE_THEME_DIR . "core/index.php";

function init_disable_wlwmanifest() {
  $config = get_config();

  if ($config["disable"]["wlwmanifest"]) {
    remove_action("wp_head", "wlwmanifest_link");
  }
}

init_disable_wlwmanifest();
