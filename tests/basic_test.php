<?php
defined('MOODLE_INTERNAL') || die();

class theme_aprendetek_basic_test extends \advanced_testcase {
    public function test_theme_loads_without_errors() {
        global $PAGE;
        $this->resetAfterTest();
        
        $PAGE->set_url('/');
        $PAGE->force_theme('aprendetek');
        
        $this->assertEquals('aprendetek', $PAGE->theme->name);
    }
}
