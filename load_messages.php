<?php

require "./database.php";

$messages = $db->query("SELECT * FROM tbl_messages");

?>
<?php while($message = $messages->fetch_object()): ?>
    <tr>
        <td><?= $message->id ?></td>
        <td><?= $message->name ?></td>
        <td><?= $message->message ?></td>
        <td><?= $message->created_at ?></td>
    </tr>
<?php endwhile; ?>