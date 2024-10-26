<?php
/**
 * Removes oEmbeds.
 */

if (!defined("ABSPATH")) {
  exit(); // Exit if accessed directly.
}

require_once CORE_THEME_DIR . "core/index.php";

function init_disable_oembed() {
  $config = get_config();

  if ($config["disable"]["oembed"]) {
    remove_action("wp_head", "wp_oembed_add_discovery_links", 10);
    remove_action("wp_head", "wp_oembed_add_host_js");
  }
}

init_disable_oembed();
