<?php 
include 'conn.php';

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: SignIn.php");
  exit;
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
  
  <title>ContactImportExport</title>
</head>

<body>
  <?php 
    include 'nav.php';
    include 'functions.php';
    ?>
  <div id="wrap container">
    <div class="container">
      <div class="row">
        <form class="form-horizontal" action="functions.php" method="post" name="upload_excel"
          enctype="multipart/form-data">
          <fieldset>
            <!-- Form Name -->
            <legend style="margin-bottom: 34px;">Data Csv with Import and Export</legend>
            <!-- File Button -->
            <div class="form-group">
              <div class="col-md-4" style="margin-top: 34px; margin-bottom: 34px;">
                <input type="file" name="file" id="file" class="input-large" required>
              </div>
            </div>
            <!-- Button -->
            <div class="form-group">
              <div class="col-md-4">
                <button type="submit" id="submit" name="Import" style="margin-top: 34px; margin-bottom: 34px;" class="btn btn-primary button-loading"
                  data-loading-text="Loading...">Import Records</button>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
      <?php
                   get_all_records();
                ?>
      <div>
        <form class="form-horizontal" action="functions.php" method="post" name="upload_excel"
          enctype="multipart/form-data">
          <div class="form-group">
            <div class="col-md-4 col-md-offset-4">
              <input type="submit" name="Export" class="btn btn-success" value="export to excel" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
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