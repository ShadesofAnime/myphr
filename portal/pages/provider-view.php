<?php
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
<head>
  <!-- META TAGS -->
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="author" content="ShadesOfAnime">
  <meta name="description" content="Dashboard Home is the central location of the applications of the website My Health Data.">
  <!-- Basic TAGS-->
  <title>View Provider Details - My PHR</title>
  <!-- Linked Sources -->
  <link rel="stylesheet" href="../../css/includes/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/includes/font-awesome/all.min.css">
  <link rel="stylesheet" href="../../css/uniform/all.css">
  <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
</head>
<body>
<div class="container mt-5">

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4>Provider View Details
            <a href="provider-crud.php" class="btn btn-danger float-end">BACK</a>
          </h4>
        </div>
        <div class="card-body">

          <?php
                        if(isset($_GET['id']))
                        {
                            $provider_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM providers WHERE id='$provider_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                        {
                        $provider = mysqli_fetch_array($query_run);
                        ?>

          <div class="mb-3">
            <label>Provider First Name</label>
            <p class="form-control">
              <?=$provider['FName'];?>
            </p>
          </div>
          <div class="mb-3">
            <label>Provider Middle Name</label>
            <p class="form-control">
              <?=$provider['MName'];?>
            </p>
          </div>
          <div class="mb-3">
            <label>Provider Last Name</label>
            <p class="form-control">
              <?=$provider['LName'];?>
            </p>
          </div>
          <div class="mb-3">
            <label>Provider Displayed Name</label>
            <p class="form-control">
              <?=$provider['DName'];?>
            </p>
          </div>
          <div class="mb-3">
            <label>Provider's Degree</label>
            <p class="form-control">
              <?=$provider['Degree'];?>
            </p>
          </div>
          <div class="mb-3">
            <label>Date Added</label>
            <p class="form-control">
              <?=$provider['Added'];?>
            </p>
          </div>

          <?php
                            }
                            else
                            {
                                echo "<h4>No Such Provider Found</h4>";
                            }
          }
          ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>