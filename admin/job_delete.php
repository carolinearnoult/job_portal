<?php
include('connection/db.php');
$del=$_GET['del'];

$query=mysqli_query($conn,"DELETE FROM all_jobs WHERE job_id ='$del'");
if ($query) {
    echo "<script>alert('Données effacées')</script>";
    header('location:job_create.php');
}else{
    echo "<script>alert('Une erreure est survenu, Réessayez')</script>";
}
?>