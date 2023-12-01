<?php
session_start();
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
  <title>New Patient Entry - My PHR</title>
  <!-- Linked Sources -->
  <link rel="stylesheet" href="../../css/includes/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/includes/font-awesome/all.min.css">
  <link rel="stylesheet" href="../../css/uniform/all.css">
  <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
</head>
<body>
  <div class="container mt-5">
    <?php include('message.php'); ?>
    <div class="row">
      <div class="col">
        <p></p>
        <div class="card">
          <div class="card-header bg-primary-subtle">
            <h3>New Patient Basic Data</h3>
            Please enter the new patient's basic data. <a href="patient-crud.php" class="btn btn-danger float-end">BACK</a>
          </div>
          <div class="card-body">
            <form action="patient-form.php" id="Basic" method="post">
              <div class="row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="First Name" aria-label="First Name" name="FName" id="FName" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Middle Name" aria-label="Middle Name" name="MName" id="MName" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Last Name" aria-label="Last Name" name="LName" id="LName" required>
                </div>
              </div>
              <p></p>
              <div class="row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Displayed Name" aria-label="Displayed Name" name="DName" id="DName" readonly>
                </div>
                <div class="col">
                  <input type="date" class="form-control" placeholder="Birthday" aria-label="Birthday" name="birthdate" id="birthdate" required>
                </div>
                <div class="col">
                  <input type="number" class="form-control" placeholder="Last Four of SSN" aria-label="Last Four of SSN" name="ssn4" id="ssn4" required>
                </div>
              </div>
              <p></p>
              <div class="card-footer">
                <div class="row">
                  <div class="col">
                    <button class="btn btn-primary float-end" type="submit" name="save_patient">Save</button>
                  </div>
                  <div class="col">
                    <button class="btn btn-warning float-left" type="reset" id="reset">Clear Form</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../../js/forms/inc/pat-dspname.js" type="text/javascript"></script>
  <script src="../../js/includes/bootstrap/bootstrap.bundle.min.js" type="text/javascript"></script>
  <script src="../../js/includes/font-awesome/fontawesome.min.js" type="text/javascript"></script>
  <script src="../../js/links/external-link.js" type="text/javascript"></script>
</body>
</html>