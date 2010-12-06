<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$shownote = Notes::findByIdFrom('Notes', $notes->getId());
?>
<h1>Show note</h1>

<table>
    <tr>
        <td>Title:</td><td><?php echo $notes->getTitle(); ?></td>
    </tr>
    <tr>
        <td>Content:</td><td><?php echo $notes->getContent(); ?></td>
    </tr>
</table>