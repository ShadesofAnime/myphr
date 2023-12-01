<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_patient']))
{
    $provider_id = mysqli_real_escape_string($con, $_POST['delete_provider']);

    $query = "DELETE FROM providers WHERE id='$provider_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Provider Deleted Successfully";
        header("Location: provider-crud.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Provider Not Deleted";
        header("Location: provider-crud.php");
        exit(0);
    }
}

if(isset($_POST['update_provider']))
{
    $provider_id = mysqli_real_escape_string($con, $_POST['provider_id']);

    $FName = mysqli_real_escape_string($con, $_POST['FName']);
    $MName = mysqli_real_escape_string($con, $_POST['MName']);
    $LName = mysqli_real_escape_string($con, $_POST['LName']);
    $DName = mysqli_real_escape_string($con, $_POST['DName']);
    $Degree = mysqli_real_escape_string($con, $_POST['Degree']);
    $Added = mysqli_real_escape_string($con, $_POST['Added']);

    $query = "UPDATE providers SET FName='$FName', MName='$MName', LName='$LName', DName='$DName', Degree='$Degree', Added='$Added' WHERE id='$provider_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Provider Updated Successfully";
        header("Location: provider-crud.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Provider Not Updated";
        header("Location: provider-crud.php");
        exit(0);
    }

}


if(isset($_POST['save_provider']))
{
    $FName = mysqli_real_escape_string($con, $_POST['FName']);
    $MName = mysqli_real_escape_string($con, $_POST['MName']);
    $LName = mysqli_real_escape_string($con, $_POST['LName']);
    $DName = mysqli_real_escape_string($con, $_POST['DName']);
    $Degree = mysqli_real_escape_string($con, $_POST['Degree']);
    $Added = mysqli_real_escape_string($con, $_POST['Added']);

    $query = "INSERT INTO providers (FName, MName, LName, DName, Degree, Added) VALUES ('$FName', '$MName', '$LName', '$DName', '$Degree', '$Added')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Provider Created Successfully";
        header("Location: provider-data.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Provider Not Created";
        header("Location: provider-data.php");
        exit(0);
    }
}

?>