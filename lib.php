<?php
defined('MOODLE_INTERNAL') || die();

function theme_aprendetek_get_main_scss_content($theme_config) {
    $scss = '';
    
    // Obtener el valor de brandcolor de la configuración y asignarlo a una variable de SASS
    $brandcolor = get_config('theme_aprendetek', 'brandcolor');
    if (!empty($brandcolor)) {
        $scss .= '$brand-color: ' . $brandcolor . ';' . "\n";
    }
    
    // Concatenar el contenido de Boost
    $scss .= theme_boost_get_main_scss_content($theme_config);
    
    return $scss;
}
