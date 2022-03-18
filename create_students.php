<?php 
include 'functions/functions.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <div class="container">
          <form action="" class="m-5 w-50" method="post">
              <input type="text" name="f-name" id="" class="form-control">
              <input type="text" name="age" id="" class="form-control mt-3">
              <input type="text" name="loc" id="" class="form-control mt-3">
              <input type="text" name="uname" id="" class="form-control mt-3">
              <input type="text" name="pword" id="" class="form-control mt-3">
              <input type="text" name="email" id="" class="form-control mt-3">
              <button type="submit" name="save" class="btn btn-outline-success mt-3">Save</button>
          </form>
      </div>
      <?php 
      if(isset($_POST['save'])){
          $fname = $_POST['f-name'];
          $age = $_POST['age'];
          $location = $_POST['loc'];
          $uname = $_POST['uname'];
          $pword = $_POST['pword'];
          $email = $_POST['email'];

          create_user($fname,$age,$location,$uname,$pword,$email);

      }
      
      ?>

     
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>