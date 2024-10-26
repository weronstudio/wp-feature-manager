<?php
/**
 * Customize the admin dashboard by removing default dashboard widgets and panels.
 */

if (!defined("ABSPATH")) {
  exit(); // Exit if accessed directly.
}

require_once CORE_THEME_DIR . "core/index.php";

function init_disable_dashboard_widgets() {
  add_action("admin_init", function () {
    $config = get_config();

    // Welcome panel.
    if ($config["disable"]["dashboard"]["welcome-panel"]) {
      remove_action("welcome_panel", "wp_welcome_panel");
    }

    // WordPress Events and News.
    if ($config["disable"]["dashboard"]["primary"]) {
      remove_meta_box("dashboard_primary", "dashboard", "side");
    }

    // Secondary widget area, deprecated.
    if ($config["disable"]["dashboard"]["secondary"]) {
      remove_meta_box("dashboard_secondary", "dashboard", "side");
    }

    // Quick Draft widget.
    if ($config["disable"]["dashboard"]["quick-press"]) {
      remove_meta_box("dashboard_quick_press", "dashboard", "side");
    }

    // Recent Drafts widget.
    if ($config["disable"]["dashboard"]["recent-drafts"]) {
      remove_meta_box("dashboard_recent_drafts", "dashboard", "side");
    }

    // Activity widget.
    if ($config["disable"]["dashboard"]["activity"]) {
      remove_meta_box("dashboard_activity", "dashboard", "normal");
    }

    // Browser Update Required notice.
    if ($config["disable"]["dashboard"]["browser-nag"]) {
      remove_meta_box("dashboard_browser_nag", "dashboard", "normal");
    }

    // Site Health Status.
    if ($config["disable"]["dashboard"]["health-check-status"]) {
      remove_meta_box("dashboard_site_health", "dashboard", "normal");
    }

    // Incoming Links widget.
    if ($config["disable"]["dashboard"]["incoming-links"]) {
      remove_meta_box("dashboard_incoming_links", "dashboard", "normal");
    }

    // Network version of At a Glance for multisite.
    if ($config["disable"]["dashboard"]["network-right-now"]) {
      remove_meta_box("network_dashboard_right_now", "dashboard", "normal");
    }

    // PHP Update Required notice.
    if ($config["disable"]["dashboard"]["php-nag"]) {
      remove_meta_box("dashboard_php_nag", "dashboard", "normal");
    }

    // Plugins widget.
    if ($config["disable"]["dashboard"]["plugins"]) {
      remove_meta_box("dashboard_plugins", "dashboard", "normal");
    }

    // Recent Comments widget.
    if ($config["disable"]["dashboard"]["recent-comments"]) {
      remove_meta_box("dashboard_recent_comments", "dashboard", "normal");
    }

    // At a Glance widget.
    if ($config["disable"]["dashboard"]["right-now"]) {
      remove_meta_box("dashboard_right_now", "dashboard", "normal");
    }
  });
}

init_disable_dashboard_widgets();
