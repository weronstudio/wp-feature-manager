# Weron WP Feature Manager

[![contributions welcome](https://img.shields.io/badge/contributions-welcome-brightgreen)](https://egghead.io/courses/how-to-contribute-to-an-open-source-project-on-github)

This package provides a set of standard code and methods utilized in [WordPress](https://br.wordpress.org/) projects developed by Weron. The structure aims to streamline feature management and enhance code organization.

## Overview

Key features include:

- A centralized structure for enabling and disabling features within WordPress themes.
- A configuration system for customizing theme settings without altering core files.

## Code Structure

The project is organized into several key folders:

- **Enable:** Contains methods to activate specific features.
- **Disable:** Contains methods to deactivate unnecessary features.
- **Config:** Configuration files to define project settings.

## Example Configuration

```php
<?php

return [
  /**
   * Disable features.
   *
   * 1. Block editor.
   * 2. RSS feeds.
   * 3. Comments.
   */
  'disable' => [
    'block-library' => true, /* 1 */
    'rss' => true, /* 2 */
    'comment' => true, /* 3 */
    // ...
  ],

  /**
   * Enable features.
   *
   * 1. SVG upload.
   * 2. Menus.
   * 3. Custom logo.
   */
  'enable' => [
    'svg' => true, /* 1 */
    'theme' => [
      'menus' => true, /* 2 */
      'custom-logo' => true, /* 3 */
      // ...
    ],
  ],
];
```

## Usage

To integrate this package into your project:

1. Copy the `core` folder into your theme directory.
2. Update the configuration settings in the `index.php` files located in the `config` folder.
3. Include the following line in your theme's `functions.php` file:

```php
<?php

// Include essential core files.
require_once get_template_directory() . '/core/core.php';
```

## Conclusion

This structure aims to provide a streamlined approach to feature management, promoting better organization and ease of maintenance. Feel free to use this code as a reference or starting point for your own projects.
