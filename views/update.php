<?php

/**
 * Notes plugin for Wolf CMS <http://project79.net/projects/notes>
 * Available on Github <https://github.com/project79>
 *
 * Simple notes for admin area.
 *
 * @author Dejan Andjelkovic <dejan79@gmail.com>
 * @revised Fortron <webmasterkubes@gmail.com>
 * @package Wolf
 * @subpackage plugin.notes
 * @version 0.0.9
 * @licence http://www.gnu.org/licenses/gpl.html
 * @copyright http://project79.net, 2010-2012
 */

if (!defined('IN_CMS')) { exit(); }

//$shownote = Notes::findByIdFrom('Notes', $notes->getId());
?>

<h1><?php echo __('Edit Note'); ?></h1>

<form action="<?php echo BASE_URL; ?>plugin/notes/updatenote" method="post">
    <fieldset style="padding:0.5em;">
        <legend style="padding: 0em 0.5em 0em 0.5em; font-weight: bold;"><?php echo __('Edit Note'); ?></legend>
            <table class="fieldset" cellspacing="0" cellpadding="0" border="0">
                <tr>
                    <td class="label"><label for="notes-id"><?php echo __('Note ID'); ?></label></td>
                    <td class="field"><input type="text" readonly="readonly" id="notes-id" name="notes[id]" class="textbox" value="<?php echo $notes->getId(); ?>" /></td>
                </tr>
                <tr>
                    <td class="label"><label for="notes-title"><?php echo __('Title'); ?></label></td>
                    <td class="field"><input type="text" id="notes-title" name="notes[title]" class="textbox" value="<?php echo $notes->getTitle(); ?>" /></td>
                </tr>
                <tr>
                    <td class="label"><label for="notes-content"><?php echo __('Content'); ?></label></td>
                    <td class="text">
                        <select id="notes_filter_id" class="filter-selector" name="notes[filter_id]">
                            <option value="<?php echo $notes->getFilter(); ?>"><?php echo $notes->getFilter(); ?></option>
                        </select>
                    <textarea id="notes_content" name="notes[content]" class="textarea<?php echo $notes->getFilter(); ?>" rows="20" cols="40"><?php echo htmlentities($notes->getContent(), ENT_COMPAT, 'UTF-8'); ?></textarea>
                    </td>
                </tr>
        </table>
    </fieldset>
    <p class="buttons" align="right">
        <input class="button" type="submit" name="save" value="<?php echo __('Save'); ?>" /> or <a href="<?php echo get_url('plugin/notes/tasks'); ?>"><?php echo __('Cancel'); ?></a>
    </p>
</form>