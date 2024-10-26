<?php

if (!defined("ABSPATH")) {
  exit(); // Exit if accessed directly.
}

require_once CORE_THEME_DIR . "core/index.php";

function init_disable_rest_api() {
  $config = get_config();

  if ($config["disable"]["rest-api"]) {
    // Removes REST API link tag from <head>.
    remove_action("wp_head", "rest_output_link_wp_head", 10);
    // Removes REST API link tag from HTML headers.
    remove_action("template_redirect", "rest_output_link_header", 11);
  }
}

init_disable_rest_api();
