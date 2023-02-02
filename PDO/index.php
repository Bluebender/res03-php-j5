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
echo "Exercice 1";
$user = [
    "firstName" => "Clark",
    "lastName" => "Kent",
    "email" => "clark.kent@test.fr"
];

$user1 = new User($user["firstName"], $user["lastName"], $user["email"]);

var_dump($user1);


// Exercice 2
echo "Exercice 2";
// J'importe mon user 1 from DB
$query = $db->prepare('SELECT * FROM `users` WHERE id=1');
$query->execute();
$firstUser = $query->fetch(PDO::FETCH_ASSOC);

// Je cré une instance avec le user importer de la DB
$user2 = new User($firstUser["first_name"], $firstUser["last_name"], $firstUser["email"]);

// J'importe l'ID
$user2->setId($firstUser["id"]);
var_dump($user2);


// Exercice 3
echo "Exercice 3";

$query = $db->prepare('SELECT * FROM `users`');
$query->execute();
$usersTab = $query->fetchAll(PDO::FETCH_ASSOC);

$NewUserTab=[];
foreach ($usersTab as $user){
    $userToAdd = new User($user["first_name"], $user["last_name"], $user["email"]);
    $userToAdd->setId($user["id"]);
    $NewUserTab[] = $userToAdd;
}

var_dump($NewUserTab);

// Exercice 4
echo "Exercice 4";


$query = $db->prepare('INSERT INTO users VALUES (null, :value1, :value2, :value3)');
$parameters = [
'value1' => $user1->getFirstName(),
'value2' => $user1->getLastName(),
'value3' => $user1->getEmail()
];
$query->execute($parameters);


?>