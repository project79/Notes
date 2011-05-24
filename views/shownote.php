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
 * @version 0.0.5
 * @licence http://www.gnu.org/licenses/gpl.html
 * @copyright http://project79.net ,2010
 */

if (!defined('IN_CMS')) { exit(); }


$shownote = Notes::findByIdFrom('Notes', $notes->getId());
?>
<h1><?php echo $notes->getTitle(); ?></h1>

<div id="showMeAll"><?php echo $notes->getContent(); ?></div>

<div class="border"><a href="<?php echo get_url('plugin/notes/update/'.$notes->id); ?>" title="Edit note"><?php echo __('Edit Note'); ?></a> | <a href="<?php echo get_url('plugin/notes/tasks'); ?>"><?php echo __('View All Notes'); ?></a></div>
