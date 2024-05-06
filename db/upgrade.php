<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * AI Text question type upgrade code.
 *
 * @package    qtype
 * @subpackage aitext
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Upgrade code for the aitext question type.
 *
 * @param int $oldversion the version we are upgrading from.
 */
function xmldb_qtype_aitext_upgrade($oldversion) {
    global $CFG, $DB;

    $dbman = $DB->get_manager();

    if ($oldversion < 2024050300) {

        $table = new xmldb_table('qtype_aitext');
        $field = new xmldb_field('sampleanswer', XMLDB_TYPE_TEXT, 'small', null, null, null, null);
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        // cloudpoodll savepoint reached
        upgrade_plugin_savepoint(true, 2024050300, 'qtype', 'aitext');

    }

    return true;
}
