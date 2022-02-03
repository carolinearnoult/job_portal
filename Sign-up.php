<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
</head>

<body class="text-center">
    <form class="form-signin" action="Sign-up.php" method="post">
        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Je m'inscris</h1>

        <label for="inputEmail" class="sr-only">Adresse email</label>
        <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email" required autofocus>

        <label for="inputPassword" class="sr-only">Mot de passe</label>
        <input type="password" id="inputPassword" class="form-control" name="Password" placeholder="Mot de passe" required>

        <label for="inputEmail" class="sr-only">Prénom</label>
        <input type="first_name" id="first_name" class="form-control" name="first_name" placeholder="Prénom" required autofocus>

        <label for="inputEmail" class="sr-only">Nom</label>
        <input type="last_name" id="last_name" class="form-control" name="last_name" placeholder="Nom" required autofocus>

        <label for="inputEmail" class="sr-only">Téléphone</label>
        <input type="Number" id="mobile_number" class="form-control" name="mobile_number" placeholder="Téléphone" required autofocus>

        <label for="inputEmail" class="sr-only">Date de naissance</label>
        <input type="date" id="dob" class="form-control" name="dob" placeholder="Date de naissance" required autofocus>

        <div class="checkbox mb-3"></div>

        <input type="submit" class="btn btn-lg btn-primary btn-block" name="submit" vale="sign up">
        <a href="job-post.php">Déjà inscrit</a>
        <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
    </form>
</body>

</html>

<?php
include('connection/db.php');

if (isset($_POST['submit'])) {
    $email=$_POST['email'];
    $Password=$_POST['Password'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $mobile_number=$_POST['mobile_number'];
    $dob=$_POST['dob'];

    $query = mysqli_query($conn, "INSERT INTO jobskeer(email,Password,first_name,last_name,mobile_number,dob)values('$email',
'$Password','$first_name','$last_name','$mobile_number','$dob')");

    var_dump($query);
    if ($query) {
        echo "<script>alert('votre isncription est validée')</script>";
        header('location:job-post.php');
    } else {
        echo "<script>alert('erreur recommencer')</script>";
    }
}
?>