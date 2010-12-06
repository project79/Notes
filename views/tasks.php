<?php

/*
 * List all tasks
 */
?>

<h1><?php echo __('All notes'); ?></h1>
    <table class="fieldset" cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td>Id</td>
            <td>Title</td>
            <td>Created on</td>
            <td>Last Updated on</td>
        </tr>
        <?php foreach($tasks as $task) { ?>

        <tr>
            <td><?php echo $task->getId(); ?></td>
            <td><a href="#"><?php echo $task->getTitle(); ?></a></td>
            <td><?php echo $task->getDate(); ?></td>
            <td><?php echo $task->getUpdate(); ?></td>
            <td><a href="<?php echo BASE_URL; ?>plugin/notes/update">Change</a> | <a href="<?php echo $task->getNoteUrl(); ?>">Show</a></td>
        </tr>
        <?php } ?>
    </table>

 