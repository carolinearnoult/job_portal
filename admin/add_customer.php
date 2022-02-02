<?php
include('include/header.php');
include('include/sidebar.php');
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="Customers.php">Customers</a></li>
            <li class="breadcrumb-item"><a href="#">Add Customer</a></li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Customers</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
            </div>
        </div>
    </div>
    <div style="width: 60%; margin-left: 20%; background-color: #f2f4f4;">

        <form action="" method="post" style="margin: 3%; padding: 3%;" name="customer_form" id="customer_form">
            <div id="msg"></div>
            <div class="form-group">
                <label for="Customer Email">Adresse email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Entrez votre email">
            </div>

            <div class="form-group">
                <label for="Customer Username">Identifiant</label>
                <input type="text" name="Username" id="Username" class="form-control" placeholder="Entrez votre identifiant">
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="pass" name="Password" id="Password" class="form-control" placeholder="Entrez votre mot de passe">
            </div>

            <div class="form-group">
                <label for="First name">Prénom</label>
                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Entrez votre prénom">
            </div>

            <div class="form-group">
                <label for="Last name">Nom</label>
                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Entrez votre nom">
            </div>

            <div class="form-group">
                <label for="Admin Type">Sélectionnez</label>
                <select name="admin_type" name="admin_type" class="form-control" id="admin_type">
                    <option value="1">administrateur</option>
                    <option value="2">recruteur</option>
                    <option value="3">candidat</option>
                    <option value="4">consultant</option>
                </select>
            </div>
            <div class="form-group">

                <input type="submit" class="btn btn-block btn-success" name="submit" id="submit">
            </div>

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
            var email = $("#email").val();
            var Username = $("#Username").val();
            var Password = $("#Password").val();
            var first_name = $("#first_name").val();
            var last_name = $("#last_name").val();
            var admin_type = $("#admin_type").val();
            var data = $("#customer_form").serialize();

            $.ajax({
                type: "POST",
                url: "Customer_add.php",
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