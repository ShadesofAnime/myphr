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
  <title>View Patient Details - My PHR</title>
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
          <h4>Patient View Details
            <a href="patient-crud.php" class="btn btn-danger float-end">BACK</a>
          </h4>
        </div>
        <div class="card-body">

          <?php
                        if(isset($_GET['id']))
                        {
                            $patient_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM patients WHERE id='$patient_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                        {
                        $patient = mysqli_fetch_array($query_run);
                        ?>

          <div class="mb-3">
            <label>Patient First Name</label>
            <p class="form-control">
              <?=$patient['FName'];?>
            </p>
          </div>
          <div class="mb-3">
            <label>Patient Middle Name</label>
            <p class="form-control">
              <?=$patient['MName'];?>
            </p>
          </div>
          <div class="mb-3">
            <label>Patient Last Name</label>
            <p class="form-control">
              <?=$patient['LName'];?>
            </p>
          </div>
          <div class="mb-3">
            <label>Patient Displayed Name</label>
            <p class="form-control">
              <?=$patient['DName'];?>
            </p>
          </div>
          <div class="mb-3">
            <label>Patient Birthdate</label>
            <p class="form-control">
              <?=$patient['birthdate'];?>
            </p>
          </div>
          <div class="mb-3">
            <label>Patient Last Four SSN</label>
            <p class="form-control">
              <?=$patient['ssn4'];?>
            </p>
          </div>

          <?php
                            }
                            else
                            {
                                echo "<h4>No Such Patient Found</h4>";
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