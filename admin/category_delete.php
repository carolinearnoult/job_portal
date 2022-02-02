<?php
include('connection/db.php');
$del=$_GET['del'];

$query=mysqli_query($conn,"DELETE FROM job_category WHERE id ='$del'");
if ($query) {
    echo "<script>alert('Données effacées')</script>";
    header('location:category.php');
}else{
    echo "<script>alert('Une erreure est survenu, Réessayez')</script>";
}
