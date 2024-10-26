/**
 * 1. Live reloading for previewing changes in the browser.
 * 2. Core Gulp library to manage tasks.
 */

import browserSync from 'browser-sync' /* 1 */
import { series, watch } from 'gulp' /* 2 */

const bs = browserSync.create()

/**
 * Initialize live preview using BrowserSync.
 *
 * 1. Initialize BrowserSync with specified proxy and port.
 * 2. Disable the notification popup from BrowserSync.
 * 3. Callback function to signal completion.
 */
function livePreview(done) {
  bs.init({
    proxy: 'http://localhost:10074' /* 1 */,
    port: 3333 /* 1 */,
    notify: false /* 2 */,
  })
  done() /* 3 */
}

/**
 * Reload the browser preview.
 *
 * 1. Log a message indicating browser reload.
 * 2. Trigger browser reload using BrowserSync.
 * 3. Callback function to signal completion.
 */
function previewReload(done) {
  console.log('\n\t🔄  Reloading browser preview.\n') /* 1 */
  bs.reload() /* 2 */
  done() /* 3 */
}

/**
 * Watch for file changes and trigger corresponding tasks.
 *
 * 1. Watch PHP files and trigger devStyles and previewReload tasks.
 * 2. Log an information message indicating watching for changes.
 */
function watchFiles() {
  watch('**/*.php', previewReload) /* 1 */
  console.log('\n\t🔥  Watching for changes...\n') /* 2 */
}

/**
 * Gulp configuration for the default task.
 *
 * 1. Live preview build.
 * 2. Watch for live changes.
 */
export default series(livePreview /* 1 */, watchFiles /* 2 */)
