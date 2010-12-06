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
<div class="box">
<p class="button"><a href="<?php echo get_url('plugin/notes/createnewnote'); ?>"><img src="<?php echo URI_PUBLIC; ?>/wolf/plugins/notes/images/settings.png" align="middle" alt="page icon" /> <?php echo __('New Note'); ?></a></p>
<p class="button"><a href="<?php echo get_url('plugin/notes/tasks'); ?>"><img src="<?php echo URI_PUBLIC; ?>/wolf/plugins/notes/images/settings.png" align="middle" alt="page icon" /> <?php echo __('View All Notes'); ?></a></p>
<p class="button"><a href="<?php echo get_url('plugin/notes/documentation'); ?>"><img src="<?php echo URI_PUBLIC; ?>/wolf/plugins/notes/images/documentation.png" align="middle" alt="page icon" /> <?php echo __('Documentation'); ?></a></p>
</div>

