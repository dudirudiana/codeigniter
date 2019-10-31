<html>

<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/navlink.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">

    <title>ADMIN PAGE</title>
</head>

<body>
    <!-- Navbar -->
    <?php $this->view('V_navbar'); ?>

    <!-- Sidebar -->
    <?php $this->view('V_sidebar'); ?>

    <div class="container mt-5 pl-5">
        <div>
            <h2 class="m-3 pt-5">Profile</h2>
            <hr>
        </div>
    </div>

    <!-- JavaScript -->
    <script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="js/popper.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/tooltip.js"></script>
</body>

</html>