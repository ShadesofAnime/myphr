<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_patient']))
{
    $patient_id = mysqli_real_escape_string($con, $_POST['delete_patient']);

    $query = "DELETE FROM patients WHERE id='$patient_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Patient Deleted Successfully";
        header("Location: patient-crud.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Patient Not Deleted";
        header("Location: patient-crud.php");
        exit(0);
    }
}

if(isset($_POST['update_patient']))
{
    $patient_id = mysqli_real_escape_string($con, $_POST['patient_id']);

    $FName = mysqli_real_escape_string($con, $_POST['FName']);
    $MName = mysqli_real_escape_string($con, $_POST['MName']);
    $LName = mysqli_real_escape_string($con, $_POST['LName']);
    $DName = mysqli_real_escape_string($con, $_POST['DName']);
    $birthdate = mysqli_real_escape_string($con, $_POST['birthdate']);
    $ssn4 = mysqli_real_escape_string($con, $_POST['ssn4']);

    $query = "UPDATE patients SET FName='$FName', MName='$MName', LName='$LName', DName='$DName', birthdate='$birthdate', ssn4='$ssn4' WHERE id='$patient_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Patient Updated Successfully";
        header("Location: patient-crud.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Patient Not Updated";
        header("Location: patient-crud.php");
        exit(0);
    }

}


if(isset($_POST['save_patient']))
{
    $FName = mysqli_real_escape_string($con, $_POST['FName']);
    $MName = mysqli_real_escape_string($con, $_POST['MName']);
    $LName = mysqli_real_escape_string($con, $_POST['LName']);
    $DName = mysqli_real_escape_string($con, $_POST['DName']);
    $birthdate = mysqli_real_escape_string($con, $_POST['birthdate']);
    $ssn4 = mysqli_real_escape_string($con, $_POST['ssn4']);

    $query = "INSERT INTO patients (FName, MName, LName, DName, birthdate, ssn4) VALUES ('$FName', '$MName', '$LName', '$DName', '$birthdate', '$ssn4')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Patient Created Successfully";
        header("Location: patient-data.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Patient Not Created";
        header("Location: patient-data.php");
        exit(0);
    }
}

?>