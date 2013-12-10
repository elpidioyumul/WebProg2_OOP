<?php
include"config.php";

$id = $_GET['id'];
MessageDAO::RejectMessage($id);
echo "<script>alert('Message Rejected');window.location.href='view.php';</script>"
?>