<?php
session_start();
// Create connection
$conn = new mysqli("localhost", "root", "", "vente");  
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (isset($_POST['Ajouter'])){
    $id = $_POST['idPro'];
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    $qte = $_POST['qte'];
    $sql = "SELECT * FROM produit WHERE idProduit=$id";
    $result = mysqli_query($conn, $sql);
    // die(print_r($id));
    ($produit = mysqli_fetch_array($result));

    $_SESSION['produit'.$id]= array(
        'idPro'=>$produit['idProduit'],
        'nom'=>$produit['nomProduit'],
        'prix'=>$produit['prix'],
        'total'=>$produit['prix'] * $qte,
        'qte'=>$qte,
    );
    $totalPrix = $_SESSION['totalPrix'] += $_SESSION['produit'.$id]['total'];
    $count = ($_SESSION['count']);
    header('Location:myCommande.php');
}

?>