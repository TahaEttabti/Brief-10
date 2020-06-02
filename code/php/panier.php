<?php
include('menu.php');
// session_destroy();

// Create connection
$conn = new mysqli("localhost", "root", "", "vente");  
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$totalPrix = $_SESSION['totalPrix'];

// if(isset($_GET['action'])) {
//     if($_GET['action'] == "delete") {
//         foreach($_SESSION as $key => $value) {
//             if($value['idPro'] == $_GET['idPro']) {
//                 unset($_SESSION [$key]);
//                 echo '<script>alert("Produit est effacer")</script>';
//                 echo '<script>window.location="panier.php"</script>';
//             }
//         }
//     }
// }

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
         <tr>
            <td colspan="3" style="background-color:#ffff00;">Total du Prix en DH </td>
            <td colspan="2" style="background-color:#ffbf00;"><?php echo $totalPrix ?> DH </td>
        </tr>
    </table>
   <!-- <div><a class="button" href="Adddb.php"><button type="button" name="addtodb" class="btn btn-light btn-lg">Envoyer</button></a></div> -->
    <a href="Adddb.php"><button type="button" name="addtodb" class="btn btn-light btn-lg">Payer</button></a>
</div>
</div>
<?php include('footer.php'); ?>


