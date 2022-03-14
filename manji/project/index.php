<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<div class="box">
		<h2>Login</h2>
		<form action="login.php" method="POST">
			<div>
				<label style="color: #302B54">Name</label>
				<input type="text" placeholder="" name="uname" required>
				
			</div>
			<div>
				<label style="color: #302B54">Password</label>
				<input type="password" placeholder="" name="psw" required>
				
			</div>
				
			<div>
				<button type="submit">Login</button>
				<?php
                	if (isset($_GET["Message"])) {
                    	echo $_GET["Message"];
                	}
            	?>
			</div>
		</form>
	</div>

</body>
</html>