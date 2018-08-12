<?php include("../database.php"); ?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Benutzer Details </title>
	</head>
	<body>
	<h1>Details des Benutzers</h1>

	<?php
	$id = $_GET['id'];
	$user = fetch_user($id);
	?>

	<h3><?php echo $user["username"]; ?></h3>
	<p><?php echo $user["password"]; ?></p>
	<p><?php echo $user["usergroup"]; ?></p>
	<p><?php echo $user["title"]; ?></p>
	<p><?php echo $user["firstname"]; ?></p>
	<p><?php echo $user["lastname"]; ?></p>
	<p><?php echo $user["email"]; ?></p>
	<p><?php echo $user["street"]; ?></p>
	<p><?php echo $user["postcode"]; ?></p>
	<p><?php echo $user["city"]; ?></p>

	</body>
</html>
