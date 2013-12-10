<?php
include"config.php";
 $result = MessageDAO::getAllMessages() 
  ?>
<table border="1">
<tr>
    <td>ID</td>
    <td>Name</td>
    <td>message</td>
    <td>email</td>
    <td>date_posted</td>
    <td>is_approve</td>
    <td>Action</td>
</tr>
<?php foreach($result as $row): ?>
    <tr>
        <td><?=$row['id']?></td>
        <td><?=$row['name']?></td>
        <td><?=$row['message']?></td>
        <td><?=$row['email']?></td>
        <td><?=$row['date_posted']?></td>
        <td><?=$row['is_approve']?></td>
        <td>
        <?php
            if($row['is_approve'] == 'N'){
                echo "<a href= 'approve.php?id=".$row['id']."'>[Approve]</a>";
            }else{
                echo "<a href= 'reject.php?id=".$row['id']."'>[Reject]</a>";
            }
        ?>&nbsp<a href="delete.php?id=<?=$row['id']?>">[Delete]</a></td>
    </tr>
<?php       
   endforeach;
?>
<tr><td colspan="3"><a href="index.php" >[Add new record]</a>
</td></tr>
</table>