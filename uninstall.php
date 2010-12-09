<?php

/**
 * Notes plugin for Wolf CMS <http://project79.net/projects/notes>
 * Available on Github <https://github.com/project79>
 *
 * Simple notes for admin area.
 *
 * @author Dejan Andjelkovic <dejan79@gmail.com>
 * @package Wolf
 * @subpackage plugin.notes
 * @version 0.0.1
 * @licence http://www.gnu.org/licenses/gpl.html
 * @copyright http://project79.net ,2010
 */

/* Uncomment this for usage with Wolf 0.7.0 and/or above
 * Security measure - from Wolf 0.7.0 above
 * if (!defined('IN_CMS')) { exit(); }
 */

$PDO = Record::getConnection();

if($PDO->exec('DROP TABLE IF EXISTS '.TABLE_PREFIX.'notes') === false) {
    Flash::set('error', __('Unable to drop table :tablename', array(':tablename' => TABLE_PREFIX.'notes')));
    redirect(get_url('setting'));
}
else {
	Flash::set('success', __('Plugin is succesfully uninstalled!'));
}