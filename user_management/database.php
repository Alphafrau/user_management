<?php
$pdo = new PDO(
		'mysql:host=localhost;dbname=user_management;charset=utf8',
		'root',
		''
);


function fetch_users()
{
	global $pdo;
	return $pdo->query("SELECT * FROM `users`");
}

function fetch_user($id)
{
	global $pdo;
	$stmt = $pdo->prepare("SELECT * FROM `users` WHERE id = :id");
	$stmt->execute(['id' => $id]);
	return $stmt->fetch();

}

function delete_user($id)
{
	global $pdo;
	$stmt = $pdo->prepare("DELETE FROM `users` WHERE id = :id");
	$stmt->execute(['id' => $id]);
}

function edit_users($id,$post)
{
	global $pdo;
	$stmt = $pdo->prepare("UPDATE `users` SET
	`username` = :username,
	`password` = :password,
	`usergroup` = :usergroup,
	`title` = :title,
	`firstname` = :firstname,
	`lastname` = :lastname,
	`email` = :email,
	`street` = :street,
	`postcode` = :postcode,
	`city` = :city

	WHERE `id` = :id;");

	$stmt->execute(['id' => $id,
	'username' => $post['username'],
	'password' => $post['password'],
	'usergroup' => $post['usergroup'],
	'title' => $post['title'],
	'firstname' => $post['firstname'],
	'lastname' => $post['lastname'],
	'email' => $post['email'],
	'street' => $post['street'],
	'postcode' => $post['postcode'],
	'city' => $post['city']]);
	return $stmt->fetch();
}

function create_users($post)
{
	global $pdo;
	$stmt = $pdo->prepare("INSERT `users` SET
	`username` = :username,
	`password` = :password,
	`usergroup` = :usergroup,
	`title` = :title,
	`firstname` = :firstname,
	`lastname` = :lastname,
	`email` = :email,
	`street` = :street,
	`postcode` = :postcode,
	`city` = :city
	");

	$stmt->execute(['username' => $post['username'],
	'password' => $post['password'],
	'usergroup' => $post['usergroup'],
	'title' => $post['title'],
	'firstname' => $post['firstname'],
	'lastname' => $post['lastname'],
	'email' => $post['email'],
	'street' => $post['street'],
	'postcode' => $post['postcode'],
	'city' => $post['city']]);
	return $stmt->fetch();
}

?>
