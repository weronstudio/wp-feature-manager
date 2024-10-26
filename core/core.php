<?php
/**
 * WordPress Core Modifications.
 *
 * A set of modifications to enhance and customize the WordPress core behavior.
 * Includes disabling unwanted features and enabling custom settings.
 */

if (!defined("ABSPATH")) {
  exit(); // Exit if accessed directly.
}

define("CORE_THEME_DIR", trailingslashit(get_template_directory()));

// Include files for disabling and enabling core features.
require_once CORE_THEME_DIR . "core/disable/index.php";
require_once CORE_THEME_DIR . "core/enable/index.php";

add_action("init", function () {
  // Remove language dropdown on login screen.
  add_filter("login_display_language_dropdown", "__return_false");

  // Update login page image link URL.
  add_filter("login_headerurl", function () {
    return home_url();
  });

  // Update login page link title.
  add_filter("login_title", function () {
    return get_bloginfo("name");
  });

  // Customize Site Health checks by removing unnecessary theme checks.
  add_filter("site_status_tests", function ($tests) {
    // Remove the check for the theme version.
    unset($tests["direct"]["theme_version"]);

    // Remove the default theme check.
    unset($tests["async"]["theme_default"]);
    return $tests;
  });
});
