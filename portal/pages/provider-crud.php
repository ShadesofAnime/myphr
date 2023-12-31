<?php
    session_start();
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
  <title>Provider Review - My PHR</title>
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
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Provider Details
              <a href="provider-data.php" class="btn btn-primary float-end">Add Provider</a>
            </h4>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Provider Name</th>
                  <th>Date Added</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $query = "SELECT * FROM providers";
                  $query_run = mysqli_query($con, $query);

                  if(mysqli_num_rows($query_run) > 0)
                  {
                    foreach($query_run as $provider)
                    {
                      ?>
                      <tr>
                        <td><?= $provider['DName']; ?></td>
                        <td><?= $provider['Added']; ?></td>
                        <td>
                          <a href="provider-view.php?id=<?= $provider['id']; ?>" class="btn btn-info btn-sm">View</a>
                          <a href="provider-edit.php?id=<?= $provider['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                          <form action="provider-form.php" method="POST" class="d-inline">
                            <button type="submit" name="delete_provider" value="<?=$provider['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                          </form>
                        </td>
                      </tr>
                      <?php
                    }
                  }
                  else
                  {
                  echo "<h5> No Record Found </h5>";
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>