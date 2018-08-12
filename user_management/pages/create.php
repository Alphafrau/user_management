<?php include("../database.php");

if(!empty($_POST))
{
	print_r($_POST);

	// Speichern

	create_users($_POST);


}
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Benutzer erstellen</title>
	</head>
	<body>
		<h1>Benutzer erstellen</h1>



		<form method="Post" action="create.php">
			<label>Benutzername:</label>
			<input type="text" name="username"  /><br>

			<label>Passwort:</label>
			<input type="text" name="password"  /><br>

			<label>Benutzergruppe:</label>
			<input type="list" name="usergroup"  /><br>

			<label>Anrede:</label>
			<input type="list" name="title"  /><br>

			<label>Vorname:</label>
			<input type="text" name="firstname"  /><br>

			<label>Nachname:</label>
			<input type="text" name="lastname"  /><br>

			<label>E-Mail-Adresse:</label>
			<input type="email" name="email"  /><br>

			<label>Strasse und Hausnummer:</label>
			<input type="text" name="street"  /><br>

			<label>PLZ:</label>
			<input type="number" name="postcode"  /><br>

			<label>Ort:</label>
			<input type="text" name="city"  /><br>

			<input type="submit" value="Benutzer speichern!"/>

		</form>


	</body>
</html>
