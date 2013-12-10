<?php 
	include"config.php";
		$result = MessageDAO::getAllMessages();?>

<html>
<head>
	<h1>APPROVED MESSAGE</h1>
		<table border="1">
<tr>
    <td>ID</td>
    <td>Name</td>
    <td>message</td>
    <td>email</td>
    <td>date_posted</td>
</tr>
<?php foreach ($result as $row):
	if($row['is_approve'] == 'Y'){
	?>
    <tr>
        <td><?=$row['id']?></td>
        <td><?=$row['name']?></td>
        <td><?=$row['message']?></td>
        <td><?=$row['email']?></td>
        <td><?=$row['date_posted']?></td>
   	</tr>
<?php } endforeach;?>
</head>

<body>
		<form method = "POST" action = "authenticator.php">
		<table>
				<h2>POST NEW MESSAGE</h2>
		<td>		
		Name: <input type = "text" name = "name" placeholder = "Enter Your Name . . ."/></td></tr>	
		<td>
		Email: &nbsp<input type = "text" name = "email" placeholder = "Enter Your Email. . ."/></td></tr>
		<td>
		Message:<br> <textarea cols = "30" rows = "10" name = "message" placeholder = "Write message . . ."></textarea></td></tr>
		<td>
		<input type = "submit" value = "submit"></td><br>
		<td><a href="view.php">View All Message</a></td>
		</table>
		</form>

</body>
</html>