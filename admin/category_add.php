<?php
include('connection/db.php');

$category=$_POST['category'];
$Description=$_POST['Description'];

$query=mysqli_query($conn, "INSERT INTO job_category(category,des)values('$category','$Description')");

//var_dump($query);

if ($query) {
    echo "Données enregistrées avec succes";
} else {
    echo "Données invalides, Réessayez";
}
