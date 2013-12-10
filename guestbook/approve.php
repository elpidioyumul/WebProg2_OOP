<?php
include"config.php";
$id = $_GET['id'];
MessageDAO::ApproveMessage($id);
echo "<script>alert('Message Approved');window.location.href='view.php';</script>"
?>