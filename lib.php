<?php
defined('MOODLE_INTERNAL') || die();

// Minimal lib.php for installation detection.
function theme_aprendetek_get_main_scss_content($theme_config) {
    return theme_boost_get_main_scss_content($theme_config);
}
