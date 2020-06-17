<?php
    include('menu.php');
    echo '
    <style>
      #carouselExampleControls {
        margin-top: 2%;
      }
      .cardProduit {
        margin-bottom: 0px;
      }
    </style>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
     <div class="carousel-inner">
       <div class="carousel-item active">
         <img style="height:500px;" class="d-block w-100" src="../images/slide6.jpg" alt="First slide">
        </div>
       <div class="carousel-item">
         <img style="height:500px;" class="d-block w-100" src="../images/slide5.jpg" alt="Second slide">
       </div>
       <div class="carousel-item">
         <img style="height:500px;" class="d-block w-100" src="../images/slide4.jpg" alt="Third slide">
       </div> 
     </div>
     <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       <span class="sr-only">Previous</span>
     </a>
     <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="sr-only">Next</span>
     </a>
   </div>';
   
      echo '<div class="divstandard">';
      $conn = new mysqli("localhost", "root", "", "vente");
      // Check connection
      if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
      }
  
      $sql = "SELECT * FROM `produit` where idCategorie='1' limit 3";
      $result = mysqli_query($conn, $sql);  
                    
      if ($result->num_rows > 0) {
          echo '<div class="row">';
          while($row = mysqli_fetch_array($result))  
                  {  
                      echo '<div class="col-sm-4 cardProduit">
                      <div class="card">
                      <img src="data:image/jpeg;base64,'.base64_encode($row['imageProduit'] ).'" class="card-img-top" height="300" />  
                      <div class="card-body">
                          <h5 class="card-title">'.$row['nomProduit'].'</h5>
                          <p class="card-text text-right">'.$row['prix'].' Dh</p>
                          <a href="produit.php?id='.$row["idProduit"].'"><button type="button" name="ajoutePanier" class="btn btn-light btn-lg">Consulter au Produit</button></a>
                      </div>
                      </div>
                      </div>';  
                  }
          echo '</div>';
      } 
      $conn->close();
      echo '</div>';
    
?>
      <div class="divstandard">
          <div class="row">
                      <div class="col-sm-4 cardProduit">
                      <div class="card">
                      <img src="../images/img22.jpg" class="card-img-top" height="300"/>  
                      <div class="card-body">
                          <h5 class="card-title">HP PC Portable</h5>
                          <p class="card-text text-right">8000 Dh</p>
                          <a href="produit.php"><button type="button" name="" class="btn btn-light btn-lg">Consulter au Produit</button></a>
                      </div>
                      </div>
                      </div> 
                      <div class="col-sm-4 cardProduit">
                      <div class="card">
                      <img src="../images/phone2.jpg" class="card-img-top" height="300"/>  
                      <div class="card-body">
                          <h5 class="card-title">Samsung Galaxy S10</h5>
                          <p class="card-text text-right">6000 Dh</p>
                          <a href="produit.php"><button type="button" name="" class="btn btn-light btn-lg">Consulter au Produit</button></a>
                      </div>
                      </div>
                      </div> 
                      <div class="col-sm-4 cardProduit">
                      <div class="card">
                      <img src="../images/img33.jpg" class="card-img-top" height="300" width="500"/>  
                      <div class="card-body">
                          <h5 class="card-title">DELL PC Portable</h5>
                          <p class="card-text text-right">6000 Dh</p>
                          <a href="produit.php"><button type="button" name="" class="btn btn-light btn-lg">Consulter au Produit</button></a>
                      </div>
                      </div>
                      </div> 
          </div>
      </div>    
      <div class="divstandard">
          <div class="row">
                      <div class="col-sm-4 cardProduit">
                      <div class="card">
                      <img src="../images/cuisine3.jpg" class="card-img-top" height="300"/>  
                      <div class="card-body">
                          <h5 class="card-title">Chalumeau de cuisine</h5>
                          <p class="card-text text-right">300 Dh</p>
                          <a href="produit.php"><button type="button" name="" class="btn btn-light btn-lg">Consulter au Produit</button></a>
                      </div>
                      </div>
                      </div> 
                      <div class="col-sm-4 cardProduit">
                      <div class="card">
                      <img src="../images/fix2.jpg" class="card-img-top" height="300"/>  
                      <div class="card-body">
                          <h5 class="card-title">MEISTER Mallette 60 pièces</h5>
                          <p class="card-text text-right">350 Dh</p>
                          <a href="produit.php"><button type="button" name="" class="btn btn-light btn-lg">Consulter au Produit</button></a>
                      </div>
                      </div>
                      </div> 
                      <div class="col-sm-4 cardProduit">
                      <div class="card">
                      <img src="../images/panier1.png" class="card-img-top" height="300" width="500"/>  
                      <div class="card-body">
                          <h5 class="card-title">Panier Couscous</h5>
                          <p class="card-text text-right">188 Dh</p>
                          <a href="produit.php"><button type="button" name="" class="btn btn-light btn-lg">Consulter au Produit</button></a>
                      </div>
                      </div>
                      </div> 
          </div>
      </div>    


<?php 
        
  include('footer.php');

?>