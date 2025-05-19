<?php

defined('MOODLE_INTERNAL') || die();

/**
 * Plugin version and metadata.
 *
 * @package   local_customgradingform_renderer
 * @copyright Richard Rangel
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$plugin->component = 'block_importrubric';
$plugin->version = 2024051800; // Release date: YYYYMMDDXX
$plugin->requires = 2022041900; // Requires Moodle 4.1 or later (adjust if needed)
$plugin->maturity = MATURITY_STABLE; // Development maturity level.
$plugin->release = '1.0.0'; // Human-readable release name.

$plugin->dependencies = [
    'local_customgradingform_renderer' => 2024051800 // Requires the rubric importer plugin to be installed
];
