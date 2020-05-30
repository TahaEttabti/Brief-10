<?php
// print_r($_SESSION);
include('menu.php');
// session_destroy();

// Create connection
$conn = new mysqli("localhost", "root", "", "vente");  
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$totalPrix = $_SESSION['totalPrix'];
$cont = $_SESSION['cont'];

?>
<!doctype html>
        <html lang="en">
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="../css/panier.css">
        </head>
<body>
<div id="row">
    <div class="th"> 
    <table>

    <br>
        <tr>
        <th>produit</th>
        <th>Nom du Produit</th>
        <th>prix</th>
        <th>total</th>
        <th>quantité</th>
    </div>
        </tr>
        <tr>
        <?php foreach($_SESSION as $key => $value):?>
        <?php if(substr($key,0,7) == "produit"):
            ?>    
        <td><?php echo $value['idPro']?></td>
        <td><?php echo $value['nom']?></td>
        <td><?php echo $value['prix']?>DH</td>
        <td><?php echo $value['total']?>DH</td>
        <td><?php echo $value['qte']?></td>
        </tr>
            <?php endif;?>
            <?php endforeach;?>     
    </table>
    <br><br>
    <div class="tableTotal">  
    <table>
         <tr>
            <th>Nombre total</th>
            <th>La Somme de Prix</th>    
        </tr>
        <tr>
            <td><?php echo $cont ?></td>
            <td><?php echo $totalPrix ?>DH</td>
        </tr>
    </table>
    </div>
   <!-- <div><a class="button" href="Adddb.php"><button type="button" name="addtodb" class="btn btn-light btn-lg">Envoyer</button></a></div> -->
    <a href="Adddb.php"><button type="button" name="addtodb" class="btn btn-light btn-lg">Envoyer</button></a>
</div>
</div>
<?php include('footer.php'); ?>


