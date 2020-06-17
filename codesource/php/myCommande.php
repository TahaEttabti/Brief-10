<?php
include('menu.php');
// session_destroy();

// Create connection
$conn = new mysqli("localhost", "root", "", "vente");  
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_POST['submit']))
{
 
$nomproduit = htmlspecialchars(trim($_POST['idProduit']));
$quantite = htmlspecialchars(trim($_POST['qte']));
$prix = htmlspecialchars(trim($_POST['nomProduit']));
$produit2 = htmlspecialchars(trim($_POST['produit2']));
 
if($nomproduit&&$quantite&&$prix&&$produit2)
    {  
 
        $sql = ("INSERT INTO commande (idCommande,idUser,dateCommande,PrixUT,etat_commande,is_standard,adresse,telephone) VALUES(?,?,?,?,?,?,?,?)");
        $reg = mysqli_query($conn, $sql);
         
        echo '<h2>La commande a été enregistrer avec succès</h2>';
     
}else echo "Veuillez saisir tous les champs";  
     
}
?>
 
 

<form method="POST" action="myCommande.php">
    <i>Nom du produit :</i>
    <select name="nomproduit">
    <input type="hidden" name="date" value="<?php echo date("Y-m-d"); ?>">
    <i>Quantité :</i>
    <input type="int" name="quantite"/>
    <i>Prix :</i>
    <input type="int" name="prix"/>  
     
    <select name="produit2">
      </select>
     
     
     
     
    <input type="submit" value="Valider" name="submit" class="submit"/>
 
</form>
