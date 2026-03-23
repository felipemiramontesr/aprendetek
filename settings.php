<?php
defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {
    $settings = new admin_settingpage('theme_aprendetek', get_string('configtitle', 'theme_aprendetek'));

    // Color de marca (brandcolor)
    $name = 'theme_aprendetek/brandcolor';
    $title = get_string('brandcolor', 'theme_aprendetek');
    $description = get_string('brandcolor_desc', 'theme_aprendetek');
    $default = '#0f172a'; // Default slate/black
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
    $settings->add($setting);

    // Logotipo (logo)
    $name = 'theme_aprendetek/logo';
    $title = get_string('logo', 'theme_aprendetek');
    $description = get_string('logo_desc', 'theme_aprendetek');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $settings->add($setting);

    // Isotipo (smalllogo)
    $name = 'theme_aprendetek/smalllogo';
    $title = get_string('smalllogo', 'theme_aprendetek');
    $description = get_string('smalllogo_desc', 'theme_aprendetek');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'smalllogo');
    $settings->add($setting);

    // Pie de página (footnote)
    $name = 'theme_aprendetek/footnote';
    $title = get_string('footnote', 'theme_aprendetek');
    $description = get_string('footnote_desc', 'theme_aprendetek');
    $default = 'Tema Aprendetek - Powered by Moodle';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $settings->add($setting);
}
