<?php

if (!defined("ABSPATH")) {
  exit(); // Exit if accessed directly.
}

require_once CORE_THEME_DIR . "core/index.php";

function init_disable_xmlrpc() {
  $config = get_config();

  if ($config["disable"]["xmlrpc"]) {
    // Disable XML RPC for security.
    add_filter("xmlrpc_enabled", "__return_false");
    add_filter("xmlrpc_methods", "__return_false");
    // Removes Really Simple Discovery link.
    remove_action("wp_head", "rsd_link");
  }
}

init_disable_xmlrpc();
