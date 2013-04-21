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
 * @version 0.0.9
 * @licence http://www.gnu.org/licenses/gpl.html
 * @copyright http://project79.net, 2010-2012
 */

if (!defined('IN_CMS')) { exit(); }


?>

<h1><?php echo __('All notes'); ?></h1>
    <table class="index" cellspacing="0" cellpadding="0" border="0">
        <thead>
            <tr>
                <td><?php echo __('Id'); ?></td>
                <td><?php echo __('Title'); ?></td>
                <td><?php echo __('Created on'); ?></td>
                <td><?php echo __('Last updated on'); ?></td>
                <td><?php echo __('Edit'); ?></td>
                <td><?php echo __('Delete'); ?></td>
            </tr>
        </thead>

        <?php foreach($notes as $note) { ?>

        <tr class="<?php echo odd_even(); ?>">
            <td><?php echo $note->getId(); ?></td>
            <td><a href="<?php echo get_url('plugin/notes/shownote/'.$note->id); ?>"><?php echo $note->getTitle(); ?></a></td>
            <td><?php echo $note->getDate(); ?></td>
            <td><?php echo $note->getUpdate(); ?></td>
            <td align="right"><a href="<?php echo get_url('plugin/notes/update/'.$note->id); ?>"><img src="<?php echo PLUGINS_URI; ?>/notes/images/edit.gif" alt="Edit" /></a></td>
            <td><a href="<?php echo get_url('plugin/notes/delete/'.$note->id); ?>"><img src="<?php echo PLUGINS_URI; ?>/notes/images/trash.gif" alt="Delete" /></a></td>
        </tr>
        <?php } ?>
    </table>


