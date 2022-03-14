
<!-- Code By WebDevTrick ( https://webdevtrick.com ) -->

<!DOCTYPE html>
<html>
<head>
	<title>Game</title>
		<link rel="stylesheet" type="text/css" href="home_style.css">
		<link rel="stylesheet" href="style.css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >



</head>
<body id="top" style="font-family: serif; background-image: url('img/games.jpg');">
	<h1 style="font-size:300%;">
		<?php
            include 'connect.php';
        	session_start();
		?>
		
		<div class="topnav" style="opacity:0.4; background-color: #e6ffff; color: white ;width: 100%">
			<!--<a href="logout.php">Logout</a>-->
  			<!--<a href="Stream.php">Stream</a>-->
  			<a class="active" href="#Tournament" style="color: #ffffff">Tournament</a>
  			<!--<a href="Game.php">Games</a>-->
  			<!--<a id="tager" href="profile.php">Profile</a>-->
  			<a href="..\..\home.php" style="color: #330033;">Home</a>
		</div>
	</h1>




<?php
  $db = mysqli_connect("localhost", "root", "", "gaming_project");

  $msg = "";
  if (isset($_POST['upload'])) {
  	$image = $_FILES['image']['name'];
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
  	$image_date = mysqli_real_escape_string($db, $_POST['image_date']);
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO images (image, image_text,image_date) VALUES ('$image', '$image_text','$image_date')";
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM images");
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
img{
	width: 50%;
	position: center;
}
   
</style>
</head>
<body>
<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {


      	?>

      	<div class="profile-card" style=" background-color: black; padding: 2%">

				<div >
					<div  style="width: 1400px ;height: 2%;">
			<?php echo "<img  src='images/".$row['image']."' >"; ?>
					
					</div>
				<div>
					<!--<h2> &thinsp; <?php //echo $r_name; ?></h2>-->
				</div>
				<div class="main-cotainer" >
					<p> &thinsp; <i class="fa fa-gamepad info"></i> Event</p>
					
					<p> &thinsp; <i class="fa fa-laptop info"></i> <?php echo "Details : " .$row['image_text']; ?></p>
					<p> &thinsp; <i class="fa fa-microchip info"></i> <?php echo "Happening On: " .$row['image_date']; ?></p>
					
					<br>
					<hr>
				</div>
		</div>
			<?php
      	
      	
      echo "</div>";
    }
  ?>




<!--<?php
			if($_SESSION["user"]!="Abdullah-Bin-Nasser")
			{
				?>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){


  var par = $("#button1");
  $(par).hide();
  var par1 = $("#tager");
  $(par1).hide();
   var par2 = $("#button2");
  $(par2).hide();
 
 
});



</script>
<?php  
			}
			?>


<div class="about-section">
  <h1 id="button2" style="color: magenta; font-size: 30px; opacity:0.5;
  padding: 10px;
  text-align: center;
  background-color: #D3D3D3;
  color: black; font-family: Times New Roman, Times, serif ";>Create Event</h1>

</div>

  <form id="button1" method="POST"  action="Tournament.php" enctype="multipart/form-data" style="background-image: url(); text-align: center;">


  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input  type="file" name="image">
  	</div>
  	<div>
      <textarea 
      	style="background-color: black;color: white;" 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="Details?"></textarea>
  	</div>
  	<div>
  		<label> </label>
  		<input style="background-color: black; color: white;" type="date" name="image_date"></div>
  	<div>
 <meta name="viewport" content="width=device-width, initial-scale=1">

 		
  		<button style="hover {opacity: 1}; background-color: #008400;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.9;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;" type="submit" name="upload">Upload</button>
  	</div>
  </form>
</div>
</body>
</html>