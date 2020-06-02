 <?php
session_start();
// $_SESSION['produit'.$id];
// print_r($_SESSION);
$servername = "localhost";
$username = "root";
$password = "";


try {
  $conn = new PDO("mysql:host=$servername;dbname=vente", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>
 <?php foreach($_SESSION as $key => $value):?>
    <?php 
      $idUser = $_SESSION['id'];
        //  print_r($_SESSION);
       ?>
            <?php if(substr($key,0,7) == "produit"):
            ?>
            <?php 
          
               $idUser;
               $idProduits = $value['idPro'];
               $Quantite = $value['qte'];

               $stmt = $conn->prepare("INSERT INTO panier (idProduit, idUser, qteLignePanier) VALUES (?, ?, ?)"); 
               $stmt->execute(array($idProduits,$idUser,$Quantite));  
               $stmt = $conn->prepare("UPDATE produit SET quantiteStock=quantiteStock-$Quantite WHERE idProduit = $idProduits");
               $stmt->execute();
            ?>
            <?php endif;?> 
          
<?php endforeach;
    header('Location:myCommande.php');
?>