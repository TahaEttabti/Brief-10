<?php

// Create connection
$conn = new mysqli("localhost", "root", "", "vente");  
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM produit WHERE idProduit = $id ";
    mysqli_query($conn, $sql);
    header('Location:listProduit.php');
    exit();
  } else {
      echo 'error';
  }
?>