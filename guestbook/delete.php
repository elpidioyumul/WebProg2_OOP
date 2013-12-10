<?php
include"config.php";

	$id = $_GET['id'];
	MessageDAO::DeleteMessage($id);
    echo "<script>alert('Record Deleted');window.location.href='view.php';</script>";
?> 
