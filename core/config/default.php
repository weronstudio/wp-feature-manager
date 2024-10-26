<?php
/**
 * Default value for settings.
 */

if (!defined("ABSPATH")) {
  exit(); // Exit if accessed directly.
}

return [
  "disable" => [
    "block-library" => true,
    "rss" => true,
    "comment" => true,
    "emoji" => true,
    "oembed" => true,
    "xmlrpc" => true,
    "version" => true,
    "relational-links" => true,
    "media" => true,
    "shortlink" => true,
    "global-styles" => true,
    "rest-user" => true,
    "rest-api" => true,
    "jquery" => true,
    "jpeg-compression" => true,
    "generated-icons" => false,
    "wlwmanifest" => true,
    "dashboard" => [
      "activity" => false,
      "browser-nag" => false,
      "health-check-status" => false,
      "incoming-links" => false,
      "network-right-now" => false,
      "php-nag" => false,
      "plugins" => false,
      "primary" => true,
      "quick-press" => true,
      "recent-comments" => false,
      "recent-drafts" => false,
      "right-now" => true,
      "secondary" => false,
      "welcome-panel" => true,
    ],
  ],
  "enable" => [
    "svg" => false,
    "theme" => [
      "menus" => true,
      "custom-logo" => true,
      "title-tag" => true,
      "automatic-feed-links" => true,
      "responsive-embeds" => true,
      "editor-styles" => true,
      "post-thumbnails" => true,
    ],
  ],
];
