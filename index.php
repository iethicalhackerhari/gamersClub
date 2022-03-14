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
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/custom.css" rel="stylesheet" />
        <script src="/js/cards.js"></script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <h3 class="animate-charcter"><span c>G</span>CLUB</h3>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="manji\project\Game2.php">Games</a></li>
                        <li class="nav-item"><a class="nav-link" href="manji\project\Tournament2.php">Tournaments</a></li>
                        <li class="nav-item"><a class="nav-link" href="manji\project\Stream2.php">Stream</a></li>
                        <li class="nav-item"><a class="nav-link" href="adarsh\contact.html">Contact</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-outline-warning" href="login.php">LOGIN</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container-fluid">
                <div class="row" >
                <video id="background-video col-lg-12 video-class" autoplay loop muted>
                    <source class=" masthead" src="assets/video-head.mp4" type="video/mp4">
                
                </video>      
                
                <div class="container text-fade-position fade-in-text">             
                <div class="masthead-subheading text-center">Welcome To <span class="text-warning">Games Club!</span>!</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>

            </div>
        </div>
            </div>
        </header>

<!--  -->
<?php
$server = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "gaming_project";

	$con = new MySQLi($server, $user, $pass, $dbname);

	if ($con->connect_error) 
		echo "Error: ".$con->connect_error;
        
		$qry = "SELECT * FROM  games";
        $res = $con->query($qry);
        $res1 = $con->query($qry);
        ?>
        
    		




	

<style>
    .scroll-div{
        padding: 10px;
    }
   .scroll-div::-webkit-scrollbar {
  display: none;

   }
  body{
    background-color: black;
  }
  .light-text{
      color: rgb(224, 224, 224);
  }
  .card-style{
    box-shadow: 10px 10px 12px -8px rgba(150, 147, 147, 0.75);
-webkit-box-shadow: 5px 10px 12px -6px rgba(99, 99, 99, 0.199);
-moz-box-shadow: -2px 10px 12px -8px rgba(0,0,0,0.75);   
}

</style>

<div class="container">


        <div class="container-fluid mt-4">
            <div >
            <h4 class="light-text">Top Games</h4>
 <div class="scroll-div d-flex flex-row flex-nowrap overflow-auto mb-3">

<?php
while ($row = $res->fetch_assoc()) 
{
    $r_name= $row['Gname'];
    echo "<br>";
    $ry = "SELECT pic FROM  game_pics where Gname = '".$r_name."'";
    $re = $con->query($ry);
    $ro = $re->fetch_assoc();

?>
    
    <div class="card-style myCard card card-block bg-black mx-2" style="min-width: 300px;">
  <img src=<?php echo "'/manji/project/games_pics/".$ro["pic"].".jpg' "; ?> class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title light-text"><?php echo $r_name; ?></h5>
    
    </div>
    </div>
    
  <?php
        }        
?>              
</div>
</div>
<div>
            <h4 class="light-text">Top Games</h4>
 <div class="scroll-div d-flex flex-row flex-nowrap overflow-auto">

<?php
while ($row = $res1->fetch_assoc()) 
{
    $r_name= $row['Gname'];
    echo "<br>";
    $ry1 = "SELECT pic FROM  game_pics where Gname = '".$r_name."'";
    $re = $con->query($ry1);
    $ro = $re->fetch_assoc();

?>
    
    <div class="card-style myCard card card-block bg-black mx-2" style="min-width: 300px;">
  <img src=<?php echo "'/manji/project/games_pics/".$ro["pic"].".jpg' "; ?> class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title light-text"><?php echo $r_name; ?></h5>
    
    </div>
    </div>
    
  <?php
        }        
?>              
</div>
</div>
        </div>
      




    </div>




        <!-- Footer-->
        <footer class="footer py-5 mt-5 text-white " style="background-color:black; border-top: 1px solid grey;">
            <div class="container ">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Gamers Club 2022</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end text-white">
                        <a class="text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class=" text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
     
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
               <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
