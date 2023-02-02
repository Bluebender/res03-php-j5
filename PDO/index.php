<?php

// Classe PDO pour connexion à ma database
$host = "db.3wa.io";
$port = "3306";
$dbname = "vincentollivier_prenomnom_phpj5";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname";

$user = "vincentollivier";
$password = "98f74e8350a6f9da22f312f5162d2994";

$db = new PDO(
    $connexionString,
    $user,
    $password
);


// Importer la classe User
require 'User.php';

// Exercice 1
$user = [
    "firstName" => "Clark",
    "lastName" => "Kent",
    "email" => "clark.kent@test.fr"
];

$user1 = new User($user["firstName"], $user["lastName"], $user["email"]);

echo "Exercice 1";
var_dump($user1);



// Exercice 2
echo "Exercice 2 <br>";
// J'importe mon user 1 from DB
$query = $db->prepare('SELECT * FROM `users` WHERE id=1');
$query->execute();
$firstUser = $query->fetch(PDO::FETCH_ASSOC);

// Je cré une instance avec le user importer de la DB
$user2 = new User($firstUser["first_name"], $firstUser["last_name"], $firstUser["email"]);

// J'importe l'ID
$user2->setId($firstUser["id"]);
echo "Instance de l'utilisateur importer de la DB avec l'ID importé";
var_dump($user2);


?>