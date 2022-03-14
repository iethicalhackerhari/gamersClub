<!DOCTYPE html>
<html>
<head>
	<?php
	    include 'connect.php';
	    session_start();
	?> 
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="home_style.css">
	<link href='https://fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>
	<link rel="stylesheet" href="style.css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
</head>
<style type="text/css">
	video {
 
    position: absolute;
    left: 50%;
    width: 100%;
    transform:translateX(-50%);

}
</style>

<body class="background" id="top" style="font-family:cursive; background-color: black; background-image: url('ismg/profile.jpg');">
	<h1 style="color: #EBECF0" style="font-size:300%; ">
		<!--<label style="font-family: 'Advent Pro'; color: white; font-size: 30px; text-shadow: 2px 2px #AA1111;font-size:45px;">Profile</label>-->
		<div class="topnav" style="opacity:0.9; background-color: grey; color: white ;width: 100%">
			<a href="logout.php">Logout</a>
  			<a href="Stream.php">Stream</a>
  			<a href="Tournament.php">Tournament</a>
  			<a href="Game.php">Games</a>
  			<a class="active" href="#profile">Profile</a>
  			<a href="home.php">Home</a>
		</div>
	</h1>

	<div class="profile-card" >
		<div class="image-container">

			<?php //echo "<img src='logo/".$_SESSION["logo"].".jpg' style= 'width: 100%' "; ?>
			<div style="background-color: black; color:black">
			<video src="video (1).mp4" id="video" style="background-color: white" controls=“true”  autoplay onplaying="this.controls=false"></video>
			</div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
		</div>
		<div>
			<h2> &thinsp;<?php echo $_SESSION["user"]; ?></h2>
		</div>
		<div class="main-cotainer">
			<p> &thinsp; <i class="fa fa-toggle-on info"></i> Active</p>
			<p> &thinsp; <i class="fa fa-briefcase info"></i> Gaming Channel</p>
			<p> &thinsp; <i class="fa fa-envelope info"></i> <?php echo $_SESSION["mail"]; ?></p>
			<p> &thinsp; <i class="fa fa-phone info"></i> <?php echo $_SESSION["logo"]; ?></p>
			<hr>
			<p> &thinsp; <b><i class="fa fa-asterisk info"></i>Skills</b></p>

			<p> &thinsp; Subscribes</p>
			<div class="Skill-bar">
				<div class="progress-bar" style="width: 80%">80%
			</div>
			<p> &thinsp; Games played</p>
			<div class="Skill-bar">
				<div class="progress-bar" style="width: 50%">50%
			</div>
			<p> &thinsp; Videos uploaded</p>
			<div class="Skill-bar">
				<div class="progress-bar" style="width: 40%">40%
			</div>
			<p> &thinsp; Win Matches</p>
			<div class="Skill-bar">
				<div class="progress-bar" style="width: 65%">65%
			</div>
		</div>
		<br>
	</div>

	<div align="center">
		<?php
            if (isset($_GET["Message"])) {
                echo $_GET["Message"];
            }
        ?>
	</div>
	
</body>
</html>