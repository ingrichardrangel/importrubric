<?php

class block_importrubric extends block_base {

    public function init() {
        $this->title = get_string('pluginname', 'block_importrubric');
    }

    public function applicable_formats() {
        return [
            'mod' => true, // Only available in activity modules
        ];
    }

    public function get_content() {
        global $PAGE, $DB;

        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass();
        $this->content->text = '';

        // Get cmid from the URL
        $cmid = optional_param('id', 0, PARAM_INT);

        if (!$cmid) {
            $this->content->text = html_writer::div('<em>Unable to retrieve activity ID.</em>', 'debug');
            return $this->content;
        }

        // Retrieve module name (e.g. 'assign')
        $modulename = $DB->get_field_sql("
            SELECT m.name
            FROM {course_modules} cm
            JOIN {modules} m ON cm.module = m.id
            WHERE cm.id = :cmid
            LIMIT 1
        ", ['cmid' => $cmid]);

        // Show button only if activity is an assignment
        if ($modulename !== 'assign') {
            return $this->content;
        }

        // Check user capability
        $context = context_module::instance($cmid);
        if (!has_capability('block/importrubric:addinstance', $context)) {
            return $this->content; // Do not show anything if user lacks permission
        }

        // Build import URL
        $url = new moodle_url('/local/customgradingform_renderer/initimport.php', [
            'cmid' => $cmid
        ]);

        // Render button
        $this->content->text .= html_writer::link($url, get_string('importfromcsv', 'block_importrubric'), [
            'class' => 'btn btn-primary',
            'style' => 'display:block;text-align:center;padding:10px;margin-top:10px;background-color:#000;color:#fff;'
        ]);

        return $this->content;
    }
}
