<?php
// print_r($_SESSION);
include('menu.php');
// session_destroy();

// Create connection
$conn = new mysqli("localhost", "root", "", "vente");  
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_GET['idPro'])) {
$id = $_GET['idPro'];
$sql = "SELECT * FROM produit WHERE idProduit='$id'";
$result = mysqli_query($conn, $sql);
}

?>
<style>
    
form.post {
    margin: 6% 25%;
}

.input {
    margin-top: 5%;
    margin-left: -5.5%;
}
.produit {
    text-align: center;
}
.prix {
    text-align: center;
}
.cls {
    text-align: center;
}

.groupe {
    margin-left: 16%;
    padding-top: 2%;
}

button.btn.btn-light.btn-lg {
    margin-left: 24%;
    font-size: 15px;
}

#photo {
    width: 30%;
    margin-left: 15%;
}

label {
    margin-left: 1%;
}

</style>

<?php $row = mysqli_fetch_assoc($result)?>
<form method="POST" action="chekout.php" class="post">
    <img src="data:image/jpeg;base64,<?php echo base64_encode($row['imageProduit'] )?>" class="card-img-top" id="photo" height="200"/>  
    <div class="input">
    <input type="hidden" value="<?php echo $row['idProduit'] ?>" name="idPro">
    <label for="">Nom du Produit : </label>
    <input type="text" value="<?php echo $row['nomProduit'] ?>" name="nom" class="produit">
    <label for="">Prix en DH: </label>
    <input type="text" value="<?php echo $row['prix'] ?>" name="prix" class="prix">
    </div>
    <div class="form-group" class="groupe">
    <label for="">Quantité : </label>
    <input type="number" name="qte" value="1" class="cls">
    </div>
    <button class="btn btn-light btn-lg" type="submit" name="Ajouter">Payer</button>
</form>

<?php  include('footer.php'); ?>