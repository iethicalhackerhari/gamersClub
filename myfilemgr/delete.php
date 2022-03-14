
<?php
extract($_REQUEST);
$del=$_REQUEST['del'];
include('db.php');

$sql=mysqli_query($conn,"select * from gamedata where id='$del'");
$row=mysqli_fetch_array($sql);

unlink("$row[thumbnail]");

mysqli_query($conn,"delete from gamedata where id='$del'");

header("Location:index.php");

?>