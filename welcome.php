<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Welcome</title>
    <style>
        .hh {
            background-color: #d9b3ff;
            font-family: serif;
            font-size: 20px;
            padding: 5px;
        }
        .mm {
            background-color: #ff751a;
            font-family: serif;
            font-size: 20px;
            padding: 5px;
        }
    </style>
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <div class="hh">
    <a href="home.php">Visit Home Page</a>
    </div>
    <div class="mm">
    <a href="logout.php">Logout</a>
    </div>
</body>
</html>