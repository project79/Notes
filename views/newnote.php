<?php

/**
* Notes plugin for Wolf CMS <http://project79.net/projects/notes>
* Available on Github <https://github.com/project79>
*
* Simple notes for admin area.
*
* @author Dejan Andjelkovic <dejan79@gmail.com>
* @author Fortron <webmasterkubes@gmail.com>
* @package Wolf
* @subpackage plugin.notes
* @version 0.0.9
* @licence http://www.gnu.org/licenses/gpl.html
* @copyright http://project79.net, 2010-2012
*/


if (!defined('IN_CMS')) { exit(); }


?>
<h1><?php echo __('Create New Note'); ?></h1>

<form action="<?php echo BASE_URL; ?>plugin/notes/newnote" method="post">
    <fieldset style="padding:0.5em;">
        <legend style="padding: 0em 0.5em 0em 0.5em; font-weight: bold;"><?php echo __('Create New Note'); ?></legend>
            <table class="fieldset" cellspacing="0" cellpadding="0" border="0">
                <tr>
                    <td class="label"><label for="notes-title"><?php echo __('Title'); ?></label></td>
                    <td class="field"><input type="text" id="notes-title" name="notes[title]" class="textbox" value="<?php if (isset($notes['title'])) echo $notes['title']; ?>" /></td>
                </tr>
                <tr>
                    <td class="label"><label for="notes_content"><?php echo __('Content'); ?></label></td>
                    <td class="text">
                        <select id="notes_filter_id" class="filter-selector" name="notes[filter_id]">
                        <option value=""<?php if(isset($notes->filter_id) == '') echo ' selected="selected"'; ?>>&#8212; <?php echo __('none'); ?> &#8212;</option>
                            <?php foreach (Filter::findAll() as $filter): ?>
                        <option value="<?php echo $filter; ?>"<?php if(isset($notes->filter_id) == $filter) echo ' selected="selected"'; ?>><?php echo Inflector::humanize($filter); ?></option>
                            <?php endforeach; ?>
                        </select>
                    <textarea id="notes_content" name="notes[content]" class="textarea<?php if(isset($notes->filter_id) != "") echo ' '.$notes->filter_id; ?>" rows="20" cols="40"><?php if(isset($notes->content) != '') echo htmlentities($notes->content, ENT_COMPAT, 'UTF-8'); ?></textarea>
                    </td>
                </tr>
        </table>
    </fieldset>
    <p class="buttons" align="right">
        <input class="button" type="submit" name="save" value="<?php echo __('Save'); ?>" /> or <a href="<?php echo get_url('plugin/notes/tasks'); ?>"><?php echo __('Cancel'); ?></a>
    </p>
</form>
