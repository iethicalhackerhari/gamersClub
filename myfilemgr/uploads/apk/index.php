<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="multiplayerStyle.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Rock Paper Scissors</title>
</head>

<body class="bg-info flex-column">


    <div class="row"></div>
    <div class="score-card row text-center bg-dark text-white vertical-center">
        <div class="player-score col p-3">
            <h3 class=>Player</h3>
            <p>0</p>
        </div>
        <div class=" computer-score col p-3" style="background-color: rgb(39, 32, 32);">
            <H3>Computer</H3>
            <p>0</p>
        </div>
    </div>




    


    <div class="intro">
        <div class="row text-center align-items-center  " style="height: 70vh;">
            <div class="col-md-12 ">
                <h1 class="">Rock Paper and Scissors</h1>
                <audio autoplay="true"  id="bgm" src="./assets/Fluffing-a-Duck.mp3"></audio>
                <button  class="btn btn-primary ">Let's Play</button>
                
            </div>
        </div>
    </div>

    <div class="start-game row text-center mx-auto  fadeOut" style="height: 70vh; width: 100%;">
        <div class="container-fluid my-auto" style="margin-top: 2vh;">
            
            <div class="row hands d-flex justify-content-around">
               
                <div class="col-6  " style="width: 100%;">

                    <img src="./assets/rock.png" alt="" class="player-hand" style="height: 12rem;">
                </div>
                <div class="col-6">
                    <img src="./assets/rock.png" alt="" class="computer-hand" style="height: 12rem;">
                </div>
            </div>
            <div class="">
                <h1 id="status-text" class="status-text col ">Choose an Option</h1>
            </div>
            <div class="buttons row mx-auto  ">
                <button class="rock col  btn btn-success m-2">rock</button>
                <button class="paper col btn btn-success m-2">paper</button>
                <button class="scissors col  btn btn-success m-2">scissors</button>
            </div>
        </div>
        
        
    </div>
   
    

    <div class="game-over fadeOut ">
        <h1>You Win!</h1>
    </div>
    <script src="App.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
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