<!DOCTYPE html>
<html>
<head>
	<title>Game</title>
		<link rel="stylesheet" type="text/css" href="home_style.css">
		<link rel="stylesheet" href="style.css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >

</head>
<body class="mine" id="top" style="font-family: serif; background-image: url('img/games.jpg');">
	<h1 style="font-size:300%;">
		<?php
            include 'connect.php';
        	session_start();
		?>
		
		<div class="topnav" style="opacity:0.4; background-color: #e6ffff; color: white ;width: 100%;">
			<!--<a href="logout.php">Logout</a>-->
  			<!--<a href="Stream.php">Stream</a>-->
  			<!--<a href="Tournament.php">Tournament</a>-->
  			<a class="active" href="#Game" style="color: #ffffff">Games</a>
  			<!--<a id="tager" href="profile.php">Profile</a>-->
  			<a href="..\..\home.php" style="color: #330033">Home</a>
		</div>
	</h1>

	<?php
		$qry = "SELECT * FROM  games";
        $res = $con->query($qry);
        while ($row = $res->fetch_assoc()) 
        {
        	$r_name= $row['Gname'];
        	echo "<br>";
        	$ry = "SELECT pic FROM  game_pics where Gname = '".$r_name."'";
        	$re = $con->query($ry);
        	$ro = $re->fetch_assoc();
    		
    		?>

    		<div class="profile-card">
				<div class="image-container">
					<?php echo "<img src='games_pics/".$ro["pic"].".jpg' style='width: 100%'"; ?>
				</div>
				<div>
					<h2> &thinsp; <?php echo $r_name; ?></h2>
				</div>
				<div class="main-cotainer">
					<p> &thinsp; <i class="fa fa-gamepad info"></i> Game</p>
					<p> &thinsp; <i class="fa fa-language info"></i> <?php echo "Language : " .$row['Language']; ?></p>
					<p> &thinsp; <i class="fa fa-laptop info"></i> <?php echo "System : " .$row['system']; ?></p>
					<p> &thinsp; <i class="fa fa-microchip info"></i> <?php echo "CPU : " .$row['cpu']; ?></p>
					<p> &thinsp; <i class="fa fa-tv info"></i> <?php echo "Graphic : " .$row['vcard']; ?></p>
					<p> &thinsp;&thinsp; <i class="fas fa-hdd info"></i> <?php echo "Size : " .$row['size']; ?></p>
					<p> &thinsp; <i class="fa fa-memory info"></i> <?php echo "Memory : " .$row['ram']; ?></p>
					<a  href="<?php echo $row['link']; ?>" ><i class="fa fa-memory info"></i>Download</a>
					<br>
					<hr>
				</div>
			</div>
    	<?php
        }
	?>

	


	<div align="center">
		<?php
            if (isset($_GET["Message"])) {
                echo $_GET["Message"];
            }
        ?>
	</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){


  var par = $("#a");
  $(par).hide();
  

  $("#button").click(function(){
    $("#a").toggle();
  });
});
</script>


<!--<?php
			if($_SESSION["user"]!="Abdullah-Bin-Nasser")
			{
				?>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){


  var par = $("#button");
  $(par).hide();
  var par1 = $("#tager");
  $(par1).hide();
 
 
});



</script>
<?php  
			}
			?>

<form id="a" action="" method="POST">

  <label for="gname">Game Name:</label><br>
  <input type="text" id="gname" name="gname" value=""><br>
  
  <label for="lang">Language:</label><br>
  <input type="text" id="lang" name="lang" value=""><br>
  
  <label for="size">Size:</label><br>
  <input type="number" id="size" name="size" value=""><br>

  <label for="ram1">Ram1:</label><br>
  <input type="number" id="ram1" name="ram1" value=""><br>
  
  <label for="system">System:</label><br>
  <input type="text" id="system1" name="system1" value=""><br>
  
  <label for="CPU">CPU:</label><br>
  <input type="text" id="cpu" name="cpu" value=""><br>
  
  <label for="Vcard">Vcard:</label><br>
  <input type="text" id="vcard" name="vcard" value=""><br>
  

  <label for="Link">Link:</label><br>
  <input type="text" id="link1" name="link1" value=""><br>
	
  	  


  <input type="submit" name="submit" value="Submit">
</form>

<input id="button" type="image" height="50" width="50" name="imgbtn" src="b.jpg"  alt="Tool Tip"></button>



<?php

if(isset($_POST['submit']))
{
	
	$gname=$_POST['gname'];
	$lang=$_POST['lang'];
	$size=$_POST['size'];
	$ram=$_POST['ram1'];
	$system=$_POST['system1'];
	$cpu=$_POST['cpu'];
	$vcard=$_POST['vcard'];
	$link=$_POST['link1'];

	$query="INSERT INTO `games` values ('$gname','$lang','$size',$ram,'$system','$cpu','$vcard','$link');";
	$query_run=mysqli_query($con,$query);

	if($query_run){
		
		echo "YES";
	}
	else
	{
	
		echo "No";
	}

}

?>



</body>
</html>