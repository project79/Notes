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
 * @version 0.0.8
 * @licence http://www.gnu.org/licenses/gpl.html
 * @copyright http://project79.net ,2010-2011
 */

if (!defined('IN_CMS')) { exit(); }


?>

<h1><?php echo __('All notes'); ?></h1>
    <table class="fieldset" cellspacing="0" cellpadding="0" border="0">
        <tr>
			<td class="naslov"><?php echo __('Id'); ?></td>
            <td class="naslov"><?php echo __('Title'); ?></td>
            <td class="naslov"><?php echo __('Created on'); ?></td>
            <td class="naslov"><?php echo __('Last updated on'); ?></td>
            <td class="naslov" align="right"><?php echo __('Edit'); ?></td>
            <td class="naslov"><?php echo __('Delete'); ?></td>
        </tr>
        
        <?php foreach($notes as $note) { ?>

        <tr>
			<td><?php echo $note->getId(); ?></td>
            <td><a href="<?php echo get_url('plugin/notes/shownote/'.$note->id); ?>"><?php echo $note->getTitle(); ?></a></td>
            <td><?php echo $note->getDate(); ?></td>
            <td><?php echo $note->getUpdate(); ?></td>
            <td align="right"><a href="<?php echo get_url('plugin/notes/update/'.$note->id); ?>"><img src="<?php echo URI_PUBLIC; ?>wolf/plugins/notes/images/edit.gif" align="middle" title="<?php echo __('Edit'); ?>" alt="<?php echo __('Edit'); ?>" /></a></td>
            <td><a href="<?php echo get_url('plugin/notes/delete/'.$note->id); ?>"><img src="<?php echo URI_PUBLIC; ?>wolf/plugins/notes/images/trash.gif" align="middle" title="<?php echo __('Delete'); ?>" alt="<?php echo __('Delete'); ?>" /></a></td>
        </tr>
        <?php } ?>
    </table>

 
