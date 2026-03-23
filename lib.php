<?php
defined('MOODLE_INTERNAL') || die();

function theme_aprendetek_get_main_scss_content($theme_config) {
    $scss = '';
    
    // Brand color injection
    $brandcolor = get_config('theme_aprendetek', 'brandcolor');
    if (!empty($brandcolor)) {
        $scss .= '$brand-color: ' . $brandcolor . ';' . "\n";
        $scss .= '$primary: $brand-color;' . "\n";
    }
    
    // Inclusion of theme_boost SCSS
    $scss .= theme_boost_get_main_scss_content($theme_config);
    
    return $scss;
}

/**
 * Serves the logo from the theme settings.
 */
function theme_aprendetek_get_logo_url() {
    global $OUTPUT;
    $logo = get_config('theme_aprendetek', 'logo');
    if ($logo) {
        return $OUTPUT->get_logo_url(null, 150);
    }
    return false;
}
