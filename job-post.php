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
  <form class="form-signin" action="job-post.php" method="post">
    <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Se connecter</h1>

    <label for="inputEmail" class="sr-only">Adresse email</label>
    <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email" required autofocus>

    <label for="inputPassword" class="sr-only">Mot de passe</label>
    <input type="password" id="inputPassword" class="form-control" name="Password" placeholder="Mot de passe" required>

    <div class="checkbox mb-3">

    </div>
    <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" placeholder="Sign In">
    <a href="Sign-up.php">Créer un compte</a>
    <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
  </form>
</body>

</html>

<?php
include('connection/db.php');

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $pass = $_POST['Password'];

  $query = mysqli_query($conn, "SELECT * FROM jobskeer WHERE email='$email' and password='$pass'");

  if ($query) {

    if (mysqli_num_rows($query) > 0) {

      $_SESSION['email'] = $email;
      header('location:admin/admin_dashboard.php');
    } else {

      echo "<script>alert('Email ou mot de passe invalide, Veuillez réessayer')</script>";
    }
  }
}
?>