<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="home_style.css">

<style type="text/css">
	video {
 
    position: absolute;
    left: 50%;
    width: 100%;
    transform:translateX(-50%);

}
</style>
<br>
</head>
<body class="background "  id="top" style="font-family:cursive; background-color: #101210; ">
	<?php
	    include 'connect.php';
	    session_start();
	?> 
	<div class="header">
		<?php //echo "<img src='logo/".$_SESSION["logo"].".jpg' alt='logo' />"; ?>
  		<!--<h1 style="color: #EBECF0" style="font-size:300%;">
  			<?php
				#echo $_SESSION["user"];
			?>-->
			<!-- <?php
			if($_SESSION["user"]!="Abdullah-Bin-Nasser")
			{
				?> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){


  var par = $("#tager");
  $(par).hide();
 
 
});



</script>
</div>
<?php  
			}
			?>
			<section  class="nav">
				<a href="logout.php">Logout</a>
				<a href="Stream.php">Stream</a>
				<a href="Tournament.php">Tournament</a>
				<a href="Game.php">Games</a>
				<a id="tager" href="profile.php">Profile</a>
				<a class="active" href="#home">Home</a>
    </section>
	
	</div>
	<!-- <video src="hero_video_1574377417.mp4" id="video" style="background-color: white" onmouseover="playVideo()" loop ></video> -->
  <video onmouseenter="this.play()" onmouseleave="this.pause()"
    src="hero_video_1574377417.mp4" type="video">
  </video>
  
	<div>
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


		<!--<h2 align="center" style="color: #bcbcb9; font-size: 30px; text-shadow: 2px 2px #AA1111; font-family: Times New Roman, Times, serif"; >Lets Begin</h2>-->
		
	</div>
	

	
	<div align="center">
		<?php
            if (isset($_GET["Message"])) {
                echo $_GET["Message"];
            }
        ?>
	</div>
	
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  opacity:0.5;
  padding: 10px;
  text-align: center;
  background-color: #D3D3D3;
  color: black;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1 style="color: magenta; font-size: 30px; color: black; font-family: Times New Roman, Times, serif";>TOP Rated</h1>

</div>


<div class="row">
  <div class="column">
    <div class="card">
      <img src="i.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <a href="https://www.epicgames.com/fortnite/en-US/home"style="color: #bcbcb9; font-size: 30px; text-shadow: 2px 2px #AA1111; font-family: Times New Roman, Times, serif";>The Witcher</a>
        <p class="title" style="color: #bcbcb9; font-size: 30px; text-shadow: 2px 2px #AA1111; font-family: Times New Roman, Times, serif";>By : Wild Hunt</p>
        </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="w.jpg" alt="Mike" style="width:60%">
      <div class="container">
        <a href="https://www.epicgames.com/fortnite/en-US/home" style="color: #bcbcb9; font-size: 30px; text-shadow: 2px 2px #AA1111; font-family: Times New Roman, Times, serif"; >Fortnight</a>
        <p  class="title" style="color: #bcbcb9; font-size: 30px; text-shadow: 2px 2px #AA1111; font-family: Times New Roman, Times, serif";>BY : EPic Games</p>
        
      </div>
    </div>
  </div>
  

  <div class="column">
    <div class="card">
      <img src="q.jpg" alt="Mike" style="width:80%">
      <div class="container">
        <a href="https://www.epicgames.com/fortnite/en-US/home" style="color: #bcbcb9; font-size: 30px; text-shadow: 2px 2px #AA1111; font-family: Times New Roman, Times, serif"; >GTA V</a>
        <p  class="title" style="color: #bcbcb9; font-size: 30px; text-shadow: 2px 2px #AA1111; font-family: Times New Roman, Times, serif";>BY : EPic Games</p>
        
      </div>
    </div>
  </div>
 
</div>

	
<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></body>
</html>

<!---<p style="font-family:cursive; font-size:200%; text-align-last: center; " class="background">Main Page</p>