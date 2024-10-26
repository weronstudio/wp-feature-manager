<?php

if (!defined("ABSPATH")) {
  exit(); // Exit if accessed directly.
}

require_once CORE_THEME_DIR . "core/index.php";

function init_disable_shortlink() {
  $config = get_config();

  if ($config["disable"]["shortlink"]) {
    // Removes shortlink tag from <head>.
    remove_action("wp_head", "wp_shortlink_wp_head", 10);

    // Removes shortlink tag from HTML headers.
    remove_action("template_redirect", "wp_shortlink_header", 11);
  }
}

init_disable_shortlink();
