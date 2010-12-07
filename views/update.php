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
$shownote = Notes::findByIdFrom('Notes', $notes->getId());
?>

<h1><?php echo __('Create New Note'); ?></h1>
<div id="notes">
    <form action="<?php echo BASE_URL; ?>plugin/notes/updatenote" method="post">
        <fieldset style="padding:0.5em;">
        <legend style="padding: 0em 0.5em 0em 0.5em; font-weight: bold;"><?php echo __('Create a New Task'); ?></legend>
        <table class="fieldset" cellspacing="0" cellpadding="0" border="0">
            <tr>
                <td class="label"><?php echo __('Note ID'); ?></td>
                <td class="field"><input type="text" readonly="readonly" name="notes[id]" class="textbox" value="<?php echo $notes->getId(); ?>"></td>
                <td class="help">Do not change this one!</td>
            </tr>
            <tr>
                <td class="label"><?php echo __('Title:'); ?></td>
                <td class="field"><input type="text" name="notes[title]" class="textbox" value="<?php echo $notes->getTitle(); ?>"></td>
                <td class="help">Rename your title</td>
            </tr>
            <tr>
                <td class="label"><?php echo __('Content:'); ?></td>
                <td class="text"><textarea rows="10" cols="20" name="notes[content]" class="textarea"><?php echo $notes->getContent(); ?></textarea></td>
                <td class="help">Update your content!</td>
            </tr>
        </table>
        </fieldset>
        <p class="buttons" align="right">
            <input class="button" type="submit" name="save" value="<?php echo __('Save'); ?>" />
        </p>
    </form>

</div>
