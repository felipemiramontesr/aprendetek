<?php
defined('MOODLE_INTERNAL') || die();

// Use the parent theme's layout.
echo $OUTPUT->render_from_template('theme_boost/columns2', $PAGE->context_to_mustache($OUTPUT));
