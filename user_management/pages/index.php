<?php include("../database.php"); ?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title> alle Benutzer</title>
	</head>
	<body>
		<h1>Liste aller Benutzer</h1>

		<?php
			$res = fetch_users();
		?>

		<ul>
			<?php foreach ($res As $row){ ?>
				<li>
					<a href="user.php?id=<?php echo $row["id"]; ?>">
					<?php echo $row["username"]; ?>
					</a>
					<br>
					<a href="edit.php?id=<?php echo $row["id"]; ?>">
					diesen Datensatz editieren
					</a>
					<a href="delete.php?id=<?php echo $row["id"]; ?>">
					diesen Datensatz entfernen
					</a>

				</li>
			<?php } ?>
		</ul>

			<a href="create.php">Wollen Sie einen neuen Benutzer anlegen?</a>

	</body>
</html>
