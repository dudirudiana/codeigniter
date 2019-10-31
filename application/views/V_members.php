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
            <h2 class="m-3 pt-5">Data Member</h2>
            <hr>
        </div>
        <table class="table table-striped m-3">
            <thead>
                <tr>
                    <th scope="col">Profile ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($profile as $prf) : ?>
                    <tr>
                        <td><?php echo $prf['profile_id']; ?></td>
                        <td><?php echo $prf['name']; ?></td>
                        <td><?php echo $prf['address']; ?></td>
                        <td><button type="button" class="btn btn-primary" href="#">Edit</button>
                            <button type="button" class="btn btn-primary" href="#">Delete</button></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <!-- JavaScript -->
    <script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="js/popper.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/tooltip.js"></script>
</body>

</html>