<?php
include('connection/db.php');

$query = mysqli_query($conn, "SELECT * FROM job_category");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>JobPortal - Free Bootstrap 4 Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">TRT Conseil</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.php" class="nav-link">Accueil</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">A propos</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
          <li class="nav-item cta mr-md-2"><a href="new-post.php" class="nav-link">Déposer une offre</a></li>
          <li class="nav-item cta cta-colored"><a href="job-post.php" class="nav-link">Connexion</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
        <div class="col-xl-10 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
          <p class="mb-4 mt-5 pt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Nous avons <span class="number" data-number="200000">0</span> offres d'emplois</p>
          <h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Recrutement<br><span>Simple, Rapide, Efficace</span></h1>

          <div class="ftco-search">
            <div class="row">
              <div class="col-md-12 nav-link-wrap">
                <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Trouver un emploi</a>

                  <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Trouver un Candidat</a>

                </div>
              </div>
              <div class="col-md-12 tab-wrap">

                <div class="tab-content p-4" id="v-pills-tabContent">

                  <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                    <form action="index.php" method="post" class="search-job">
                      <div class="row">
                        <div class="col-md">
                          <div class="form-group">
                            <div class="form-field">
                              <div class="icon"><span class="icon-briefcase"></span></div>
                              <input type="text" name="key" id="key" class="form-control" placeholder="Emploi recherché">
                            </div>
                          </div>
                        </div>
                        <div class="col-md">
                          <div class="form-group">
                            <div class="form-field">
                              <div class="select-wrap">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <select name="category" id="category" class="form-control">
                                  <option value="">Categorie</option>
                                  <?php
                                  while ($row = mysqli_fetch_array($query)) { ?>

                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['category']; ?></option>

                                  <?php } ?>

                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--<div class="col-md">
                          <div class="form-group">
                            <div class="form-field">
                              <div class="icon"><span class="icon-map-marker"></span></div>
                              <input type="text" class="form-control" placeholder="Location">
                            </div>
                          </div>
                        </div>-->
                        <div class="col-md">
                          <div class="form-group">
                            <div class="form-field">
                              <input type="submit" value="Search" name="search" id="search" class="form-control btn btn-primary">
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>

                  <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
                    <form action="#" class="search-job">
                      <div class="row">
                        <div class="col-md">
                          <div class="form-group">
                            <div class="form-field">
                              <div class="icon"><span class="icon-user"></span></div>
                              <input type="text" class="form-control" placeholder="eg. Adam Scott">
                            </div>
                          </div>
                        </div>
                        <div class="col-md">
                          <div class="form-group">
                            <div class="form-field">
                              <div class="select-wrap">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <select name="" id="" class="form-control">
                                  <option value="">Categories</option>
                                  <option value="">Plein Temps</option>
                                  <option value="">Temps Partiel</option>
                                  <option value="">Freelance</option>
                                  <option value="">Alternance</option>
                                  <option value="">Temporaire</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--<div class="col-md">
                          <div class="form-group">
                           <div class="form-field">
                              <div class="icon"><span class="icon-map-marker"></span></div>
                              <input type="text" class="form-control" placeholder="Location">
                            </div>
                          </div>
                        </div>-->
                        <div class="col-md">
                          <div class="form-group">
                            <div class="form-field">
                              <input type="submit" value="Search" class="form-control btn btn-primary">
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 
  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <span class="subheading">Ajouts Récents</span>
          <h2 class="mb-4"><span>Nouvelles</span> Offres</h2>
        </div>
      </div>
      <div class="row">
     
          <div class="col-md-12 ftco-animate">

            <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
                <div class="job-post-item-header d-flex align-items-center">
                  <h2 class="mr-3 text-black h3">Serveur/Serveuse</h2>
                  <div class="badge-wrap">
                    <span class="bg-primary text-white badge py-2 px-3">Temps Plein</span>
                  </div>
                </div>
                <div class="job-post-item-body d-block d-md-flex">
                  <div class="mr-3"><span class="icon-layers"></span> <a href="#">Chez Martin</a></div>
                  <div><span class="icon-my_location"></span> <span>Paris</span></div>
                </div>
              </div>

              <div class="ml-auto d-flex">
                <a href="blog-single.php" class="btn btn-primary py-2 mr-1">Postuler</a>
                <a href="#" class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
                  <span class="icon-heart"></span>
                </a>
              </div>
            </div>
          </div><!-- end -->

          <div class="col-md-12 ftco-animate">
            <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
                <div class="job-post-item-header d-flex align-items-center">
                  <h2 class="mr-3 text-black h4">Receptionniste</h2>
                  <div class="badge-wrap">
                    <span class="bg-warning text-white badge py-2 px-3">Temps Plein</span>
                  </div>
                </div>
                <div class="job-post-item-body d-block d-md-flex">
                  <div class="mr-3"><span class="icon-layers"></span> <a href="#">Thalazur</a></div>
                  <div><span class="icon-my_location"></span> <span>Capbreton</span></div>
                </div>
              </div>

              <div class="ml-auto d-flex">
                <a href="job-single.html" class="btn btn-primary py-2 mr-1">Postuler</a>
                <a href="#" class="btn btn-danger rounded-circle btn-favorite d-flex align-items-center">
                  <span class="icon-heart"></span>
                </a>
              </div>

            </div>
          </div> <!-- end -->

  

        <div class="col-md-12 ftco-animate">
          <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

            <div class="mb-4 mb-md-0 mr-5">
              <div class="job-post-item-header d-flex align-items-center">
                <h2 class="mr-3 text-black h4">Commise de cuisine</h2>
                <div class="badge-wrap">
                  <span class="bg-info text-white badge py-2 px-3">Freelance</span>
                </div>
              </div>
              <div class="job-post-item-body d-block d-md-flex">
                <div class="mr-3"><span class="icon-layers"></span> <a href="#">New York Times</a></div>
                <div><span class="icon-my_location"></span> <span>Lyon</span></div>
              </div>
            </div>

            <div class="ml-auto d-flex">
              <a href="job-single.html" class="btn btn-primary py-2 mr-1">Postuler</a>
              <a href="#" class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
                <span class="icon-heart"></span>
              </a>
            </div>
          </div>
        </div> <!-- end -->
        <div class="col-md-12 ftco-animate">

          <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

            <div class="mb-4 mb-md-0 mr-5">
              <div class="job-post-item-header d-flex align-items-center">
                <h2 class="mr-3 text-black h4">Chef de rang</h2>
                <div class="badge-wrap">
                  <span class="bg-secondary text-white badge py-2 px-3">Alterance</span>
                </div>
              </div>
              <div class="job-post-item-body d-block d-md-flex">
                <div class="mr-3"><span class="icon-layers"></span> <a href="#">Atlantica</a></div>
                <div><span class="icon-my_location"></span> <span>Biarritz</span></div>
              </div>
            </div>

            <div class="ml-auto d-flex">
              <a href="job-single.html" class="btn btn-primary py-2 mr-1">Postuler</a>
              <a href="#" class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
                <span class="icon-heart"></span>
              </a>
            </div>
          </div>
        </div> <!-- end -->

      </div>
      <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              <li><a href="#">&lt;</a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&gt;</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section-parallax">
    <div class="parallax-img d-flex align-items-center">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2>Subcribe to our Newsletter</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
            <div class="row d-flex justify-content-center mt-4 mb-4">
              <div class="col-md-8">
                <form action="#" class="subscribe-form">
                  <div class="form-group d-flex">
                    <input type="text" class="form-control" placeholder="Enter email address">
                    <input type="submit" value="Subscribe" class="submit px-3">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">À propos</h2>
            <p>Agence de recrutement Hôtellerie et Restauration</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Employeurs</h2>
            <ul class="list-unstyled">
              <li><a href="#" class="py-2 d-block">Comment ça marche</a></li>
              <li><a href="#" class="py-2 d-block">S'enregister</a></li>
              <li><a href="#" class="py-2 d-block">Poster une annonce</a></li>
              <li><a href="#" class="py-2 d-block">Recherches avancées</a></li>
              <li><a href="#" class="py-2 d-block">Service Recrutemeny</a></li>
              <li><a href="#" class="py-2 d-block">Faq</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-4">
            <h2 class="ftco-heading-2">Employés</h2>
            <ul class="list-unstyled">
              <li><a href="#" class="py-2 d-block">Comment ça marche</a></li>
              <li><a href="#" class="py-2 d-block">S'enregister</a></li>
              <li><a href="#" class="py-2 d-block">Filtrer vos recherches</a></li>
              <li><a href="#" class="py-2 d-block">Nos offres</a></li>
              <li><a href="#" class="py-2 d-block">Rechercher un offre</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Contact</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">12 rue Quincampoix 75002 Paris</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+33 01 34 65 67 98</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@trtconseil.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p>

            Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> Tous droits réservés

          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>

</html>