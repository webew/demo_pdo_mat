<?php

$conn = new PDO("", "", "");

$stmt = $conn->prepare("SELECT * FROM Produit");
$stmt->execute();

$produits = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($produits); // chaine de caractères [{"id":"1","nomProduit":"truc"},{}]


// class Pdoo
// {
//     private $infoConnexion;
//     private $id;
//     private $mdp;

//     public function __construct($infoConnexion, $id, $mdp)
//     {
//     }

//     public function prepare($sql)
//     {

//         return new Stmt();
//     }
// }

// class Stmt
// {
//     public function __construct()
//     {
//     }

//     public function execute()
//     {
//     }

//     public function fetchAll()
//     {
//         return [];
//     }
// }
