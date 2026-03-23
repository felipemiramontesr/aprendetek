<?php
defined('MOODLE_INTERNAL') || die();

// Minimal lib.php for installation detection.
function theme_aprendetek_get_main_scss_content($theme_config) {
    $scss = '';
    $brandcolor = get_config('theme_aprendetek', 'brandcolor');
    if (!empty($brandcolor)) {
        $scss .= '$brand-color: ' . $brandcolor . ';' . "\n";
        $scss .= '$primary: $brand-color;' . "\n";
    }
    $scss .= theme_boost_get_main_scss_content($theme_config);
    return $scss;
}

/**
 * Serves the logo from the theme settings.
 */
function theme_aprendetek_get_logo_url() {
    global $OUTPUT;
    return $OUTPUT->get_logo_url(null, 150);
}

/**
 * Serves the compact logo (isotipo) from the theme settings.
 */
function theme_aprendetek_get_compact_logo_url() {
    global $OUTPUT;
    return $OUTPUT->get_compact_logo_url(null, 70);
}
