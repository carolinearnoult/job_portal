<?php
include('include/header.php');
include('include/sidebar.php');
?>
<?php
$query = mysqli_query($conn, "SELECT * FROM job_category");
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="job_create.php">Toutes les offres</a></li>
            <li class="breadcrumb-item"><a href="#">Ajouter une offre</a></li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Ajouter une offre</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
            </div>
        </div>
    </div>
    <div style="width: 60%; margin-left: 20%; background-color: #f2f4f4;">
        <form action="" method="post" style="margin: 3%; padding: 3%;" name="job_form" id="job_form">
            <div id="msg"></div>
            <div class="form-group">
                <label for="Company Name">Titre de l'offre</label>
                <input type="text" name="job_title" id="job_title" class="form-control" placeholder="Titre de l'annonce">
            </div>

            <div class="form-group">
                <label for="Company Descritpion">Description</label>
                <textarea name="Description" id="Description" class="form-control" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group">
                <label for="Company Descritpion">mot-clé</label>
                <input type="text" class="form-control" name="Keyword" id="Keyword" placeholder="entrez le mot-clé">
            </div>


            <div class="form-group">
                <label for="">Pays</label>
                <select name="country" class="countries form-control" id="countryId">
                    <option value="">Sélectionnez le Pays</option>
                </select>
            </div>

            <div class="form-group">
                <label for="">Région</label>
                <select name="state" class="states form-control" id="stateId">
                    <option value="">Sélectionnez la région</option>
                </select>
            </div>

            <div class="form-group">
                <label for="">Ville</label>
                <select name="city" class="cities form-control" id="cityId">
                    <option value="">Sélectionnez la ville</option>
                </select>
            </div>

            <div class="form-group">
                <label for="">Catégorie</label>
                <select name="category" class="category form-control" id="category">
                    <?php
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['category'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-block btn-success" name="submit" id="submit">
            </div>
        </form>
    </div>

    <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

    <div class="table-responsive">

    </div>
</main>
</div>
</div>

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>

<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>

<!-- Graphs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<!-- Datatables Plugin -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
<script>
    $(document).ready(function() {
        $("#submit").click(function() {
            var job_title = $("#job_title").val();
            var Description = $("#Description").val();
            var countryId = $("#countryId").val();
            var stateId = $("#stateId").val();
            var cityId = $("#cityId").val();

            if (job_title == '') {
                alert("Veuillez entrer le titre de l'annonce");
                return false;
            }

            if (Description == '') {
                alert("Veuillez entrer une description");
                return false;
            }

            if (countryId == '') {
                alert("Veuillez sélectionner le pays");
                return false;
            }

            if (stateId == '') {
                alert("Veuillez sélectionner la région");
                return false;
            }

            if (cityId == '') {
                alert("Veuillez sélectionner la ville");
                return false;
            }

            var data = $("#job_form").serialize();

            $.ajax({
                type: "POST",
                url: "add_new_job.php",
                data: data,
                success: function(data) {
                    alert(data);
                }
            });
        });
    });
</script>
</body>

</html>