<?php 
include 'conn.php';

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: SignIn.php");
  exit;
}


if($_SERVER["REQUEST_METHOD"]=="POST"){
  
 if(isset($_POST['btn1'])){
  $id=$_POST["id"];
  $firstname=$_POST["firstname"];
  $lastname=$_POST["lastname"];
  $email=$_POST["email"];

  $sql="INSERT INTO `employeeinfo` (`emp_id`, `firstname`, `lastname`, `email`) VALUES ('$id', '$firstname', '$lastname', '$email')";
  $result=mysqli_query($conn,$sql);
  if($result){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Successfull!</strong> Record Inserted Successfully
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
 }

  if(isset($_POST['btn2'])){
  $id1=$_POST["id1"];
  $firstname1=$_POST["firstname1"];
  $lastname1=$_POST["lastname1"];
  $email1=$_POST["email1"];
  if($lastname1){
    $sql1="UPDATE `employeeinfo` SET `lastname` = '$lastname1' WHERE `employeeinfo`.`emp_id` = '$id1' ";
  $result=mysqli_query($conn,$sql1);
  if($result){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Successfull!</strong> Record Updated Successfully
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
  }
  elseif($firstname1){
    $sql1="UPDATE `employeeinfo` SET `firstname` = '$firstname1' WHERE `employeeinfo`.`emp_id` = '$id1' ";
    $result=mysqli_query($conn,$sql1);
    if($result){
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Successfull!</strong> Record Updated Successfully
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
  }
  else{
    $sql1="UPDATE `employeeinfo` SET `email` = '$email1' WHERE `employeeinfo`.`emp_id` = '$id1' ";
    $result=mysqli_query($conn,$sql1);
    if($result){
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Successfull!</strong> Record Updated Successfully
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
  }
  }

  if(isset($_POST['btn3'])){
  $id2=$_POST["id2"];
  $firstname2=$_POST["firstname2"];
  $lastname2=$_POST["lastname2"];
  $email2=$_POST["email2"];
  $sql2="DELETE FROM `employeeinfo` WHERE `employeeinfo`.`emp_id` = '$id2'";
  $result=mysqli_query($conn,$sql2);
  if($result){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Successfull!</strong> Record Deleted Successfully
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  }
  }


}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Update Recod</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php 
    include 'nav.php';
    ?>
    <div class="container" style="margin-top: 34px;">
        <form action="update.php" method="post">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">operation</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><input type="text" name="id" id="id" placeholder="Id"></th>
      <td><input type="text" name="firstname" id="firstname" placeholder="FirstName"></td>
      <td><input type="text" name="lastname" id="lastname" placeholder="LastName"></td>
      <td><input type="email" name="email" id="email" placeholder="Email"></td>
      <td><input type="submit" name="btn1" class="btn btn-success" value="Insert Record" /></td>
    </tr>
    <tr>
      <th scope="row"><input type="text" name="id1" id="id" placeholder="Id"></th>
      <td><input type="text" name="firstname1" id="firstname" placeholder="FirstName"></td>
      <td><input type="text" name="lastname1" id="lastname" placeholder="LastName"></td>
      <td><input type="email" name="email1" id="email" placeholder="Email"></td>
      <td><input type="submit" name="btn2" class="btn btn-success" value="Update Record" /></td>
    </tr>
    <tr>
      <th scope="row"><input type="text" name="id2" id="id" placeholder="Id"></th>
      <td><input type="text" name="firstname2" id="firstname" placeholder="FirstName"></td>
      <td><input type="text" name="lastname2" id="lastname" placeholder="LastName"></td>
      <td><input type="email" name="email2" id="email" placeholder="Email"></td>
      <td><input type="submit" name="btn3" class="btn btn-success" value="Delete Record" /></td>
    </tr>
  </tbody>
</table>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>