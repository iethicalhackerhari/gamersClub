<?php
include "dbcon.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Upload Game</title>
  </head>
  <body>


   <!--  -->
   <section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark" style="min-height: 100vh; background-size: cover; background-image: url(https://images.unsplash.com/photo-1477346611705-65d1883cee1e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1920&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=c0d43804e2c7c93143fe8ff65398c8e9);">
    <div class="container-fluid">
      <div class="row  justify-content-center align-items-center d-flex-row text-center h-100">
        <div class="col-12 col-md-4 col-lg-3   h-50 ">
          <div class="card shadow ">
            <div class="card-body mx-auto ">
              <h4 class="card-title mt-3 text-center">Upload Your Game</h4>
    
              <form enctype="multipart/form-data" method="post" action="post.php">
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                  </div>
                  <input name="dev" class="form-control" placeholder="Developer's Name" type="text">
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="game" class="form-control" placeholder="Game's Name" type="text">
                  </div>
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-pen"></i> </span>
                  </div>
                  <input name="description" class="form-control" placeholder="Description" type="text">
                </div>
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-image"></i> </span>
                  </div>
                  <label for="files" class="btn">Select Thumbnail</label>
                  <input name="img" class="form-control" placeholder="Choose Thumbnail" type="file" >
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fa fa-gamepad"></i> </span>
                    </div>
                    <label for="files" class="btn me-5">Select APK  </label>
                    <input name="apk" class="form-control" placeholder="" type="file" >
                  </div>
                
                <div class="form-group">
                  <button type="submit" name="submit" class="m-3 btn btn-primary btn-block"> UPLOAD </button>
                </div>
               
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
 </section>

 <!--  -->
<?php

$query=$conn->query("INSERT INTO upload (name,date) VALUES ('$name','$date')");
if($query){
header("location:index.php");
}
else{
die(mysqli_error($conn));
}



?>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
 
  </body>
</html>
</body>
</html>