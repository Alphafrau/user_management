<?php include("../database.php"); ?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Benutzer entfernen</title>
	</head>
	<body>
		<h1>Benutzer entfernen</h1>

		<?php
			$id = $_GET['id'];
			$user = delete_user($id);
		?>

		<p><?php echo $user; ?></p>

	</body>
</html>
