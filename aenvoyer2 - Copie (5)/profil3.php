<?php
session_start();
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link rel="shortcut" href="assets/img/brand/favicon.svg" type="image/x-icon" >
    <!--Bootstrap link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <!--Bootstrap Icons link-->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <!--MY CSS-->
    <link rel="stylesheet" href="assets/css/style.css">  
    <link rel="stylesheet" href="assets/css/profilestyle.css" >
  </head>
  <style>
    body {
      min-height: 100vh;
    display: flex;
    flex-direction: column;
}
footer {
    margin-top: auto;
}
  </style>
  <body>
    <!--Navbar section-->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="#">
            <!--Brand here-->
            <a href="index.php" class="btn btn-outline-secondary shadow-sm d-sm d-block" id="accueil">Accueil</a>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a href="#" class="btn btn-outline-secondary shadow-sm d-sm d-block">Espace profil</a>
              

            </div>
            <a href="deconnexion.php" class="btn btn-outline-secondary ms-3" id="dec">Se déconnecter</a>
          </div>
        </div>
      </nav>
    <section class="profil">
      <div class="profile-container">
        <div class="cover-photo"></div>
        <!--Photo à importer-->
              <div class="">
                <img class="profile-photo" src="https://th.bing.com/th/id/OIP.FZI1PgPHjh-wOAnP7H8FegHaJg?pid=ImgDet&rs=1" alt="">
                </div>
             </div>
                 
             <div class="header-profile">
              <div class=" gen-info text-center">
                <?php
                include_once 'VarConn.php';
                $user=$_SESSION['userI'];
                if(!$conn){
                    die("erreur de connexion à la BD");
                }
                $lignes1=mysqli_query($conn,"select * from users where UserId=$user;");
                $Nlignes=mysqli_num_rows($lignes1);
                while($row1 =mysqli_fetch_assoc($lignes1) ){
                    echo "<h1>".$row1['NomUser']."</h1>";
                   }

                $lignes2=mysqli_query($conn,"select * from users where UserId=$user;");
                     while($row2 =mysqli_fetch_assoc($lignes2) ){
                            echo "<h4>".$row2['specialite']."</h4>";
                        }
               
                ?>

                <small>
                    <?php                
                     $lignes3=mysqli_query($conn,"select * from users where UserId=$user;");
                     while($row3 =mysqli_fetch_assoc($lignes3) ){
                            echo $row3['emplacement'];
                        } 
                         ?>
                         
                        </small>
              </div>
            </div>
                
                <div class="container sup-info">
             <div class="row">
                    <div class="d-flex align-content-stretch-flew-wrap col-md-4">
                <ul class="">
                    <li><i class="bi bi-envelope"></i>                     
                    <?php                
                     $lignes4=mysqli_query($conn,"select * from users where UserId=$user;");
                     while($row4 =mysqli_fetch_assoc($lignes4) ){
                            echo $row4['email'];
                        } 
                         ?>
                         </li>
                    <li><i class="bi bi-telephone"></i> +213                     
                    <?php                
                     $lignes5=mysqli_query($conn,"select * from users where UserId=$user;");
                     while($row5 =mysqli_fetch_assoc($lignes5) ){
                            echo $row5['numero'];
                        } 
                         ?>
                         </li>
                </ul>
                
                  
              </div>
                    <div class="col-md-8">
              </div>
              </div>
          </div>
    </section>
        <!--Footer section-->
    <footer class="bg-dark" style='bottom:0;'>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row row-cols-1 row-cols-lg-5 g-2 g-lg-3">
                        <div class="col-md-3">
                            <div>
                                <small>
                                    <a href="#" class="text-light">Accueil</a>
                                </small>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div>
                                <small>
                                    <a href="#" class="text-light">Features</a>
                                </small>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div>
                                <small>

                                </small>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div>

                                </small>
                            </div>
                        </div>
                    </div>
                </div>
               <div class="copy">
                &copy; <i>OfferIn</i>
               </div> 
            </div>  
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
      function bio(){


      }




    </script>
  </body>
</html>