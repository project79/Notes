<?php

/**
 * 
 */

 if (Plugin::deleteAllSettings('notes') === false) {
    Flash::set('error', __('Unable to delete plugin settings.'));
    redirect(get_url('setting'));
}
 
 
$PDO = Record::getConnection();

if($PDO->exec('DROP TABLE IF EXISTS '.TABLE_PREFIX.'notes') === false) {
    Flash::set('error', __('Unable to drop table :tablename', array(':tablename' => TABLE_PREFIX.'notes')));
    redirect(get_url('setting'));
}
else {
	Flash::set('success', __('Plugin is succesfully uninstalled!'));
}