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
 * @version 0.0.2
 * @licence http://www.gnu.org/licenses/gpl.html
 * @copyright http://project79.net ,2010
 */


if (!defined('IN_CMS')) { exit(); }


?>
<div class="box">
<p class="button"><a href="<?php echo get_url('plugin/notes/createnewnote'); ?>"><img src="<?php echo URI_PUBLIC; ?>/wolf/plugins/notes/images/newnote.png" align="middle" alt="New Note" /> <?php echo __('New Note'); ?></a></p>
<p class="button"><a href="<?php echo get_url('plugin/notes/tasks'); ?>"><img src="<?php echo URI_PUBLIC; ?>/wolf/plugins/notes/images/view.png" align="middle" alt="View all notes" /> <?php echo __('View All Notes'); ?></a></p>
<p class="button"><a href="<?php echo get_url('plugin/notes/documentation'); ?>"><img src="<?php echo URI_PUBLIC; ?>/wolf/plugins/notes/images/docs.png" align="middle" alt="Docs" /> <?php echo __('Documentation'); ?></a></p>
</div>

