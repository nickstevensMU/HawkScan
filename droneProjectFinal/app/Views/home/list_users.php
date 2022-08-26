<!DOCTYPE html>
<html>
<head>
	<title>list users</title>
</head>
<body>
Users List
<hr>
<table border='1'>
<th>First Name</th><th>Last Name</th><th>Email</th><th>School</th>
<?php foreach ($users as $user) : ?>
<tr border='1'>
<td><?= $user['fname'] ?> </td>
<td><?= $user['lname'] ?> </td>
<td><?= $user['email'] ?> </td>
<td><?= $user['school'] ?> </td>
</tr>
<?php endforeach ?>
</table>


</body>
</html>
