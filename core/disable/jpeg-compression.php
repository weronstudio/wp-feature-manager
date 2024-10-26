<?php
/**
 * Removes JPEG compression.
 */

if (!defined("ABSPATH")) {
  exit(); // Exit if accessed directly.
}

require_once CORE_THEME_DIR . "core/index.php";

function init_disable_jpeg_compression() {
  $config = get_config();

  if ($config["disable"]["jpeg-compression"]) {
    add_filter(
      "jpeg_quality",
      function () {
        return 100;
      },
      10,
      2,
    );
  }
}

init_disable_jpeg_compression();
