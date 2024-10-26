<?php
/**
 * Theme Features Initialization.
 *
 * This file initializes various theme features based on configuration settings.
 */

if (!defined("ABSPATH")) {
  exit(); // Exit if accessed directly.
}

require_once CORE_THEME_DIR . "core/index.php";

function init_theme() {
  $config = get_config();

  // Enable menu management.
  if ($config["enable"]["theme"]["menus"]) {
    add_theme_support("menus"); /* 1 */
  }

  // Enable the option for a custom logo.
  if ($config["enable"]["theme"]["custom-logo"]) {
    add_theme_support("custom-logo"); /* 2 */
  }

  // Enable dynamic title support.
  if ($config["enable"]["theme"]["title-tag"]) {
    add_theme_support("title-tag"); /* 3 */
  }

  // Enable default posts and comments RSS feed links to head.
  if ($config["enable"]["theme"]["automatic-feed-links"]) {
    add_theme_support("automatic-feed-links"); /* 4 */
  }

  // Enable support for Post Thumbnails on posts and pages.
  if ($config["enable"]["theme"]["post-thumbnails"]) {
    add_theme_support("post-thumbnails"); /* 5 */
  }

  // Enable responsive embedded content.
  if ($config["enable"]["theme"]["responsive-embeds"]) {
    add_theme_support("responsive-embeds"); /* 6 */
  }

  // Enable support for editor styles.
  if ($config["enable"]["theme"]["editor-styles"]) {
    add_theme_support("editor-styles"); /* 7 */
  }
}

init_theme();
