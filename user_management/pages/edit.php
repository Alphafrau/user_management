<?php include("../database.php"); 

if(!empty($_POST) && !empty($_GET['id']))
{
	print_r($_POST);
	
	// Speichern
	
	edit_users($_GET['id'],$_POST);
	

}

?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Benutzer editieren</title>
	</head>
	<body>
		<h1>Benutzer editieren</h1>
		
	<?php
	$id = $_GET['id'];
	$user = fetch_user($id);
	?>
		
		<form action="edit.php?id=<?php echo $user["id"]; ?>" method="post">
			<label>Benutzername:</label>
			<input type="text" name="username" value="<?php echo $user["username"]; ?>" /><br>
			
			<label>Passwort:</label>
			<input type="text" name="password" value="<?php echo $user["password"]; ?>" /><br>
			
			<label>Benutzergruppe:</label>
			<input type="list" name="usergroup" value="<?php echo $user["usergroup"]; ?>" /><br>
			
			<label>Anrede:</label>
			<input type="list" name="title" value="<?php echo $user["title"]; ?>" /><br>
			
			<label>Vorname:</label>
			<input type="text" name="firstname" value="<?php echo $user["firstname"]; ?>" /><br>
			
			<label>Nachname:</label>
			<input type="text" name="lastname" value="<?php echo $user["lastname"]; ?>" /><br>
			
			<label>E-Mail-Adresse:</label>
			<input type="email" name="email" value="<?php echo $user["email"]; ?>" /><br>
			
			<label>Strasse und Hausnummer:</label>
			<input type="text" name="street" value="<?php echo $user["street"]; ?>" /><br>
			
			<label>PLZ:</label>
			<input type="number" name="postcode" value="<?php echo $user["postcode"]; ?>" /><br>
			
			<label>Ort:</label>
			<input type="text" name="city" value="<?php echo $user["city"]; ?>" /><br>
			
			<input type="submit" value="Benutzer speichern!"/>
			
		</form>
		
	</body>
</html>