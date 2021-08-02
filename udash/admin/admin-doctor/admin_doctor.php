<?php
//for hiding errors
//error_reporting(E_PARSE | E_ERROR);
$upOne = dirname(__DIR__, 3);
require_once $upOne . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable($upOne);
$dotenv->load();
require_once("component.php");
require_once("operation.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css files -->
    <link rel="stylesheet" href="<?php echo $_ENV['HTTP'] ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_ENV['HTTP'] ?>/css/dark-mode.css">
    <link rel="stylesheet" href="<?php echo $_ENV['HTTP'] ?>/css/dashboard.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>Admin Dashboard</title>
</head>

<body>
    <?php
        include '../admin_sidebar.php';
    ?>
    <main>
        <?php
        include '../../dash_navbar.php';
        ?>

        <article>
            <div class="container text-center py-3">
                <h1 class="py-4 mb-5 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Doctor <spand class="text-warning">Details</span></h1>
                <div class="d-flex justify-content-center">
                    <form action="" method="post" class="w-75">
                        <div class="row pt-2">
                            <div class="col-md col-lg-4">
                                <?php inputElement("<i class='fas fa-id-card'></i>", "ID", "did", setID()); ?>
                            </div>
                            <div class="col-md col-lg-8">
                                <?php inputElement("<i class='fas fa-file-signature'></i>", "Name", "dname", ""); ?>
                            </div>
                        </div>
                        <div class="pt-2">
                            <?php inputElement("<i class='fas fa-book'></i>", "Address", "addr", ""); ?>
                        </div>
                        <div class="row pt-2">
                            <div class="col-md">
                                <?php inputElement("<i class='fas fa-calendar-alt'></i>", "Date of birth : YYYY-MM-DD", "dob", ""); ?>
                            </div>
                            <div class="col-md">
                                <?php inputElement("<i class='fas fa-envelope'></i>", "Email", "email", ""); ?>
                            </div>
                        </div>
                        <div class="row pt-2">
                            <div class="col-md">
                                <?php inputElement("<i class='fas fa-user-tag'></i>", "Speciality", "spl", ""); ?>
                            </div>
                            <div class="col-md">
                                <?php inputElement("<i class='fas fa-mobile-alt'></i>", "Mobile No.", "ph", ""); ?>
                            </div>
                        </div>
                        <div class="row pt-2">
                            <div class="col-md">
                                <?php inputElement("<i class='fas fa-flask'></i>", "Experience", "expr", ""); ?>
                            </div>
                            <div class="col-md">
                                <?php inputElement("<i class='fas fa-dollar-sign'></i>", "Salary", "sal", ""); ?>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center my-3">
                            <?php buttonElement("btn-create", "btn btn-success mx-3", "<i class='fas fa-plus'></i>", "create", "data-toggle='tooltip' data-placement='bottom' title='Create'"); ?>
                            <?php buttonElement("btn-read", "btn btn-primary mx-3", "<i class='fas fa-sync'></i>", "read", "data-toggle='tooltip' data-placement='bottom' title='Read'"); ?>
                            <?php buttonElement("btn-update", "btn btn-light border mx-3", "<i class='fas fa-pen-alt'></i>", "update", "data-toggle='tooltip' data-placement='bottom' title='Update'"); ?>
                            <?php buttonElement("btn-delete", "btn btn-danger mx-3", "<i class='fas fa-trash-alt'></i>", "delete", "data-toggle='tooltip' data-placement='bottom' title='Delete'"); ?>
                            <?php //deleteBtn(); 
                            ?>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Bootstrap table  -->
            <div class="containter">
                <div class="table-responsive">
                    <table class="table table-striped table-dark table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Doctor Name</th>
                                <th>Address</th>
                                <th>Date of birth</th>
                                <th>Email</th>
                                <th>Speciality</th>
                                <th>Mobile No.</th>
                                <th>Experience</th>
                                <th>Salary</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            <?php


                            if (isset($_POST['read'])) {
                                $result = getData();

                                if ($result) {

                                    while ($row = mysqli_fetch_assoc($result)) { ?>

                                        <tr>
                                            <td data-id="<?php echo $row['id']; ?>"><?php echo $row['did']; ?></td>
                                            <td data-id="<?php echo $row['id']; ?>"><?php echo $row['dname']; ?></td>
                                            <td data-id="<?php echo $row['id']; ?>"><?php echo $row['addr']; ?></td>
                                            <td data-id="<?php echo $row['id']; ?>"><?php echo $row['dob']; ?></td>
                                            <td data-id="<?php echo $row['id']; ?>"><?php echo $row['email']; ?></td>
                                            <td data-id="<?php echo $row['id']; ?>"><?php echo $row['spl']; ?></td>
                                            <td data-id="<?php echo $row['id']; ?>"><?php echo $row['ph']; ?></td>
                                            <td data-id="<?php echo $row['id']; ?>"><?php echo $row['expr']; ?></td>
                                            <td data-id="<?php echo $row['id']; ?>"><?php echo '$' . $row['sal']; ?></td>
                                            <td><i class="fas fa-edit btnedit" data-id="<?php echo $row['id']; ?>"></i></td>
                                        </tr>

                            <?php
                                    }
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </article>

    </main>
    <!-- js files -->
    <script src="<?php echo $_ENV['HTTP'] ?>/js/bootstrap.bundle.js"></script>
    <script src="<?php echo $_ENV['HTTP'] ?>/js/dark-mode-switch.min.js"></script>
</body>

</html>