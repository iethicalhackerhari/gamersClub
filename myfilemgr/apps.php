<?php
include "dbcon.php";

$qry = "SELECT * FROM  gamedata";
        $res = $conn->query($qry);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Game</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="../css/custom.css" rel="stylesheet" />
        
    </head>
  <body>
    <style>
        body{
            background-color: aliceblue;
        }
      </style>






<!--  -->
  <!-- Navigation-->
  <div class="row">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container">
                <h3 class="animate-charcter"><span c>G</span>CLUB</h3>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="manji\project\Game2.php">Games</a></li>
                        <li class="nav-item"><a class="nav-link" href="manji\project\Tournament2.php">Tournaments</a></li>
                        <li class="nav-item"><a class="nav-link" href="manji\project\Stream2.php">Stream</a></li>
                        <li class="nav-item"><a class="nav-link" href="adarsh\contact.html">Contact</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-outline-warning" href="login.php">LOGIN</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        </div>
<!--  -->
<div style="height:10rem";></div>

<div class="container">
<div class="row my-3">
    <?php
while ($row = $res->fetch_assoc()) 
{
    // $r_name= $row['Gname'];
    echo "<br>";
   

?>
    
        <div class="col-lg-3">
<div class="card" style="max-width: 18rem;">
<img src=<?php echo "'".$row["thumbnail"]."' "; ?> class="card-img-top" alt="..." style="height:250px;">

    <!-- <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/4/41/APK_format_icon_%282014-2019%29.png" alt="Card image cap"> -->
    <div class="card-body">
      <h5 class="card-title"><?php echo $row['game']; ?></h5>
      <p class="card-text m-0 "><?php echo $row['dev']; ?></p>
      <p class="card-text "><em><?php echo $row['descp']; ?></em></p>
      <a href="#" class="btn btn-primary">Download</a>
    </div>
</div>
</div>

  <?php
}        
?>
  </div>
</div>









<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>
               <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    
  </body>
</html>