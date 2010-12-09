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

?>

<h1><?php echo __('All notes'); ?></h1>
    <table class="fieldset" cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td class="naslov"><?php echo __('Title'); ?></td>
            <td class="naslov"><?php echo __('Created on'); ?></td>
            <td class="naslov"><?php echo __('Last updated on'); ?></td>
            <td class="naslov" align="right"><?php echo __('Edit'); ?></td>
            <td class="naslov"><?php echo __('Delete'); ?></td>
        </tr>
        
        <?php foreach($tasks as $task) { ?>

        <tr>
            <td><a href="<?php echo get_url('plugin/notes/shownote/'.$task->id); ?>"><?php echo $task->getTitle(); ?></a></td>
            <td><?php echo $task->getDate(); ?></td>
            <td><?php echo $task->getUpdate(); ?></td>
            <td align="right"><a href="<?php echo get_url('plugin/notes/update/'.$task->id); ?>"><img src="<?php echo URI_PUBLIC; ?>/wolf/plugins/notes/images/edit.gif" align="middle" alt="Edit" /></a></td>
            <td><a href="<?php echo get_url('plugin/notes/'.$task->id.'/delete'); ?>"><img src="<?php echo URI_PUBLIC; ?>/wolf/plugins/notes/images/trash.gif" align="middle" alt="Delete" /></a></td>
        </tr>
        <?php } ?>
    </table>

 