
<?php 

include 'conn.php';
$showError=false;
// posting the data to the database
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];

    $exist=false;
    if(($password==$cpassword)&& $exist==false){
        $sql="INSERT INTO `user` (`UserName`, `Email`, `Password`, `Date`) VALUES ('$username', '$email', '$password', current_timestamp())";
        $result=mysqli_query($conn,$sql);
        if($result){
            header("location:index.php");
        }
    }
    else{
        $showError="Password mismatch";
    }
    
    


    


    // Inserting the data in mysql
   

    
    
}
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
    <title>SignUp</title>
</head>

<body>
    
    <?php 
    include 'nav.php';
    if($showError){
        echo'<div class="alert alert-danger" role="alert">
       Try Again!'.$showError.'
      </div>';
      }
    ?>
    <div class="container">
    
        <h1>SignUp to Our Website</h1>
        <form method="POST" action="SignUp.php">
            <div class="mb-3">
                <label for="username" class="form-label">Enter Your User Name</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp"
                    placeholder="UserName">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="mb-3">
                <label for="cpassword" class="form-label">ConfirmPassword</label>
                <input type="password" class="form-control" name="cpassword" id="cpassword">
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