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
            <td>Title</td>
            <td>Created on</td>
            <td>Last Updated on</td>
            <td></td>
        </tr>
        
        <?php foreach($tasks as $task) { ?>

        <tr>
            <td><strong><?php echo $task->getTitle(); ?></strong></td>
            <td><?php echo $task->getDate(); ?></td>
            <td><?php echo $task->getUpdate(); ?></td>
            <td><a href="<?php echo $task->getUpdateUrl(); ?>">Change</a> | <a href="<?php echo $task->getNoteUrl(); ?>">Show</a></td>
        </tr>
        <?php } ?>
    </table>

 