<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<h1><?php echo __('Create New Note'); ?></h1>
<div id="notes">
    <form action="<?php echo BASE_URL; ?>plugin/notes/newnote" method="post">
        <fieldset style="padding:0.5em;">
        <legend style="padding: 0em 0.5em 0em 0.5em; font-weight: bold;"><?php echo __('Create a New Task'); ?></legend>
        <table class="fieldset" cellspacing="0" cellpadding="0" border="0">
                <tr>
                    <td class="label"><?php echo __('Title:'); ?></td>
                    <td class="field"><input type="text" name="notes[title]" class="textbox" value="<?php if (isset($notes['title'])) echo $notes['title']; ?>"></td>
                </tr>
                <tr>
                    <td class="label"><?php echo __('Content:'); ?></td>
                    <td class="text"><textarea rows="10" cols="20" name="notes[content]" class="textarea" value="<?php if (isset($notes['content'])) echo $notes['content']; ?>"></textarea></td>
                </tr>
        </table>
        </filedset>
    </form>
    <p class="buttons" align="right">
	<input class="button" type="submit" name="save" value="<?php echo __('Save'); ?>" />
    </p>
</div>
