<?php 
include 'conn.php';
$showError=false;
$login=false;
// posting the data to the database
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"];
    $password=$_POST["password"];

    
        $sql="select * from user where UserName='$username' AND Password='$password'";
        $result=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);
        if($num==1){
          $login="Login Successfull";
          session_start();
          $_SESSION['loggedin']=true;
          $_SESSION['UserName']=$username;
          header("location:home.php");
        }
        else{
          $showError="Invalid credentials";
        }
      
    }
    
    


    


    // Inserting the data in mysql
   

    
    



?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>MyContacts</title>
</head>

<body>
  <?php
    include 'nav.php';
    if($showError){
      echo'<div class="alert alert-danger" role="alert">
     Try Again!'.$showError.'
    </div>';
    }
    if($login){
      echo'<div class="alert alert-danger" role="alert">
     Try Again!'.$login.'
    </div>';
    }
    ?>
  

  <div class="container my-34">
  <h1>Login to Our Website</h1>
    <form method="POST" action="SignIn.php">
      <div class="mb-3">
        <label for="username" class="form-label">Enter Your User Name</label>
        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="UserName">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password">
    </div>
      <button style="padding-left: 47%; padding-right:48%;" type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>