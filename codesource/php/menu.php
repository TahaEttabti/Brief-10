<?php
    session_start();
    // $_SESSION['$id']='Client';
    echo '<!doctype html>
        <html lang="en">
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="../css/bootstrap.min.css">
            <link rel="stylesheet" href="../css/style.css">
            <link rel="stylesheet" href="../css/footer.css">
            <title>Shopping</title>
        </head>
        <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <a class="navbar-brand" href="index.php">Shopping</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./">Accueil</a>
                    </li>';            
    if($_SESSION == null)
    {
        echo '<li class="nav-item">
                <a class="nav-link" href="produit.php">Produit</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="inscription.php">Inscription/connection</a>
            </li>';
    } 
      if(isset($_SESSION['admin']))
        {
            echo '<li class="nav-item">
                    <a class="nav-link" href="categorie.php">Categorie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="listProduit.php">Produit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="managePanierStandard.php">Panier standard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Déconnexion</a>
                </li>';
        } 
  if (isset($_SESSION['Client']))
        {
            echo '<li class="nav-item">
                <a class="nav-link" href="produit.php">Produit</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="panierStandard.php">Panier standard</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="myCommande.php">Commande</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Déconnexion</a>
            </li>';
        }
    

    echo ' </ul>
        </div>
        </nav>
        <script src="../js/jquery-3.4.1.slim.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
    </html>';

?>