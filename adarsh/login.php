<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>DREAM</title>
</head>
<style>
    body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(../OHMAN/BACKGROUND.jpg);
background-size: cover;
}
.login-box{
    width: 280px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
color: white;
}
.login-box h1{
    float: left;
    font-size: 50px;
    border-bottom: 6px solid greenyellow;
    margin-bottom: 50px;
    padding:13px 0;
}
.textbox{
width: 100%;
overflow: hidden;
font-size: 70px;
padding: 18px 0;
margin: 18px 0;
border-bottom: 2px solid greenyellow;
}
.textbox input{
border: none;
outline: none;
background: none;
color: white;
font-size: 14px;
width: 90px;
float: left;
margin: 0 10;

}
button{
    width: 200px;
    padding: 15px;
    text-align: center;
    margin: 10px 40px;
    border-radius: 25px;
    font-weight: bold;
    border: 2px solid yellowgreen;
    color:whitesmoke;
    cursor: pointer;
    background: transparent;
    color:white;
position: relative;
overflow: hidden;
}
span{
    width: 0;
    background: yellowgreen;
    height: 100%;
    border-radius: 25px;
    position: absolute;
    left: 0;
    bottom: 0;
    z-index: -1;
    transition: 0.5s;
}
button:hover span{
width: 100px;

}
button:hover {
    border: none;
}
.header{
    min-height: 100vh;
    width: 100%;
    height: 100vh;
    
 background-position: center;
background-size: cover;
position: relative;

}
.header ul li:hover.sub-menu-1 ul{
    display: block;
    margin: 10px;
    
}

nav{
   
    padding: 2% 6%;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
nav img{
    width: 150px;
}
.nav-link{
flex: 2;
text-align: right;
}
.nav-link ul li{
    list-style:none;
display: inline-block;
margin: 0 20px;
position: relative;
}
.nav-link ul li a{
    text-decoration: none;
    color: white;
    text-transform: uppercase;
    font-size: 15px;

}
.nav-link ul li::after{
    content:'';
    height: 3px;
    width: 0%;
    background:yellowgreen;
    display: block;
    margin: auto;
    position: relative;
    transition: 0.5s;
    
}
.nav-link ul li:hover::after{
    width: 100%;

}
.pc{
    display: none;
}
.nav-link ul li:hover .pc{
    display: block;
    position: absolute;
   transition:none;
    margin-top: 15px;
    margin-left:-15px;
}
.nav-link ul li:hover .pc ul{
    display: block;
    margin: 10px;
}
.nav-link ul li:hover .pc ul li{
    width: 150px;
    padding: 10px;
    border-bottom: 1px dotted white;
    background:transparent;
    border-radius: 0;
    text-align: left;
}
.nav-link ul li:hover .pc ul li:last-child{
    border-bottom: none;
}
.nav-link ul li:hover .pc ul li a:hover{
    color: yellowgreen;
}


</style>


<?php
#database connection
$con = mysqli_connect('localhost','id18029622_adarsh','_C[!!Z]ySKL6Uzi','id18029622_gamesclub');

?>


<body>
    <section class="header">
        <nav>
            <a href="HEAD.html"><img src="../OHMAN/5a32a7eccb9a85480a628f8d.png"></a>
            <div class="nav-link">
             
              <ul>
                  <li><a href="#"><a href="HEAD.html">Home</a></li>
                  <li><a href="#"><a href="about.html"> About</a></li>
                  <li><a href="#"></a><a href="GAMES.html">Games</a>
                    <div class="pc">
                        <ul>
                            <li><a href="PC.html">pc</a></li>
                            <li><a href="phone game.html">mobile</a></li>
                            <li><a href="GAMES.html">XML</a></li>
                        </ul>
                        </div>
                </li>
                  <li><a href="#"><a href="contact.html"> Contact</a></li>
                  <li><a href="#"><a href=""> Settings</a></li>
                  <li><a href="#"></a><a href="login.html">login</a></li>
                  <li><a href="#"></a><a href="register.html">Register</a></li>
                  </ul> 
            </div>
          
        </nav>
    <form method="post">
    <div class="login-box">
        <h1>login</h1>
        <div class="textbox">
            <input type="text" name="username"maxlength="23"placeholder="enter User id" required>
    </div>
    
<div class="textbox">
    <input type="password" name="password"maxlength="14"placeholder="password" required>
    </div>
    
<button type="submit" name="submit"><span></span>Login</button>
<p>

    <a href="forgot password">forgot password</a>
    </div>
</p>
   
</form>
  
    <?php
 if(isset($_REQUEST['submit']))
 {
    $uname=$_REQUEST['username'];
    $password=$_REQUEST['password'];
    $conf="select password from login where username='$uname'";
    $p=mysqli_query($con,$conf);
    while($a=mysqli_fetch_array($p))
    {
        $pass=$a['password'];
    }   
    if($password==$pass)
    {
		$_SESSION["u"]=$uname;
		$_SESSION['p']=$password;
        $sql="select usertype from login where username='$uname'";
        $utype=mysqli_query($con,$sql);
        while($data=mysqli_fetch_array($utype))
        {
            $user=$data['usertype'];
            if($user=="admin")
            { 
                echo "<script>location.href='adminindex.php';</script>";
            }
            elseif($user=="user")
            {
                echo "<script>location.href='userindex.php';</script>";
            }
          
        }    
    }
    else
    {
?>
    <script>
        alert("Check your password");
    </script>
<?php    
}
}
?>    
      
    </div>
   
</body>
</html>