<?php

if (!defined("ABSPATH")) {
  exit(); // Exit if accessed directly.
}

require_once CORE_THEME_DIR . "core/index.php";

function init_disable_relational_links() {
  $config = get_config();
  if ($config["disable"]["relational-links"]) {
    // Removes relational links for the posts.
    remove_action("wp_head", "adjacent_posts_rel_link_wp_head", 10);
  }
}

init_disable_relational_links();
