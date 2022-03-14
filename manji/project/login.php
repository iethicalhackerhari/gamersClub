<?php
    include "connect.php";
    session_start();

    $user = $_POST["uname"];
    $pass = $_POST["psw"];
    
    $qry = "SELECT * FROM profile WHERE name = '".$user."'";
    //echo $qry;
    $res = $con->query($qry);

    $msg = "";

    if($res->num_rows > 0)
    {
        //user exists
        $row = $res->fetch_assoc();
        if($row["password"] == $pass)
        {
            $user= $row["name"];
            $logo= $row["pic"];
            $mail= $row["email"];
            $_SESSION["user"] = $user;
            $_SESSION["logo"] = $logo;
            $_SESSION["mail"] = $mail;
            header("Location:home.php");
        }
        else
        {            
            $msg = "Invalid password";
            header("Location:index.php?Message=$msg");
        }
    }
    else
    {
        $msg = "The Username: ".$user." does not exist!";
        header("Location:index.php?Message=$msg");
    }
    //echo $msg;
?>
