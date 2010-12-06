<?php
/* 
 * Show and update note
 */

?>

<h1><?php echo __('Create New Note'); ?></h1>
<div id="notes">
    <form action="<?php echo BASE_URL; ?>plugin/notes/update" method="post">
        <fieldset style="padding:0.5em;">
        <legend style="padding: 0em 0.5em 0em 0.5em; font-weight: bold;"><?php echo __('Create a New Task'); ?></legend>
        <table class="fieldset" cellspacing="0" cellpadding="0" border="0">
                <tr>
                    <td class="label"><?php echo __('Title:'); ?></td>
                    <td class="field"><input type="text" name="notes[title]" class="textbox" value="<?php $notes->getTitle(); ?>"></td>
                </tr>
                <tr>
                    <td class="label"><?php echo __('Content:'); ?></td>
                    <td class="text"><textarea rows="10" cols="20" name="notes[content]" class="textarea" ><?php $notes->getContent(); ?></textarea></td>
                </tr>
        </table>
        </fieldset>
    </form>
    <p class="buttons" align="right">
	<input class="button" type="submit" name="save" value="<?php echo __('Save'); ?>" />
    </p>
</div>
