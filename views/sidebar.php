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
<div class="box">
<p class="button"><a href="<?php echo get_url('plugin/notes/createnewnote'); ?>"><img src="<?php echo PLUGINS_URI; ?>/notes/images/newnote.png" align="middle" alt="New Note" /> <?php echo __('New Note'); ?></a></p>
<p class="button"><a href="<?php echo get_url('plugin/notes/tasks'); ?>"><img src="<?php echo PLUGINS_URI; ?>/notes/images/view.png" align="middle" alt="View all notes" /> <?php echo __('View All Notes'); ?></a></p>
<p class="button"><a href="<?php echo get_url('plugin/notes/documentation'); ?>"><img src="<?php echo PLUGINS_URI; ?>/notes/images/docs.png" align="middle" alt="Docs" /> <?php echo __('Documentation'); ?></a></p>
</div>

<div class="box">
    <h3>Show note in frontend</h3>
    <p>There are two ways to display your notes in your layout, page or snippet.</p>
    <h5>Show only one note</h5>
    <p><code>&lt;?php shownotebyid('note_id'); ?&gt;</code></p>
    <h5>Show all your notes</h5>
    <p><code>&lt;?php showallnotes(); ?&gt;</code></p>
</div>

