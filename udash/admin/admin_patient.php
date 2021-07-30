
<?php
//for hiding errors
//error_reporting(E_PARSE | E_ERROR);
$upOne = dirname(__DIR__, 1);
require_once $upOne . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable($upOne);
$dotenv->load();

require_once("./phpcrud/component.php");
require_once("./phpcrud/operation.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css files -->
    <link rel="stylesheet" href="./admin_dash.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/dark-mode.css">
    <link rel="stylesheet" href="../css/dash.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>Admin Dashboard</title>
</head>

<body style="min-height: 100vh; width: 100%;min-width: 800px;" class="bg-light">
    <!-- sidebar start -->
    <!-- sidebar start -->
    <nav class="navbar bg-dark navbar-expand d-flex flex-column align-item-start" id="sidebar">
        <a href="#" class="navbar-brand text-light mt-5">
            <div class="display-6 font-weight-bold">DASHBOARD</div>
        </a>
        <ul class="navbar-nav d-flex flex-column mt-5 w-100">
            <li class="nav-item w-100">
                <a href="<?php echo $_ENV['HTTP']?>/udash/admin_doctor.php" class="nav-link text-light pl-4">Doctor</a>
            </li>
            <li class="nav-item w-100">
                <a href="<?php echo $_ENV['HTTP']?>/udash/admin_receptionist.php" class="nav-link text-light pl-4">Receptionist</a>
            </li>
            <li class="nav-item w-100">
                <a href="<?php echo $_ENV['HTTP']?>/udash/admin_employee.php" class="nav-link text-light pl-4">Employee</a>
            </li>
            <li class="nav-item w-100">
                <a href="<?php echo $_ENV['HTTP']?>/udash/admin_patient.php" class="nav-link text-light pl-4">Patient</a>
            </li>
        </ul>
    </nav>

    <section class="my-container">
        <!-- topbar start -->
        <div class="topbar text-dark d-flex">
            <a href="#" id="menu-btn" class="text-primary bg-light px-3"><i class="fas fa-bars"></i></a>
            <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a>
            <a href="#"><i class="fa fa-fw fa-search"></i> Search</a>
            <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a>

            <a href="<?php echo $_ENV['HTTP'] . '/logout.php' ?>" class="ms-auto"><i class="fa fa-fw fa-user"></i> Logout</a>
            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
        </div>
    </section>

    <div class="container text-center py-3">
        <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Patient Details</h1>
        <div class="d-flex justify-content-center">
            <form action="" method="post" class="w-50">
                <div class="row pt-2">
                    <div class="col-4">
                        <?php inputElement("<i class='fas fa-people-carry'></i>", "ID", "did", setID()); ?>
                    </div>
                    <div class="col-8">
                        <?php inputElement("<i class='fas fa-dollar-sign'></i>", "Name", "dname", ""); ?>
                    </div>
                </div>
                <div class="pt-2">
                    <?php inputElement("<i class='fas fa-book'></i>", "Address", "addr", ""); ?>
                </div>
                <div class="row pt-2">
                    <div class="col">
                        <?php inputElement("<i class='fas fa-people-carry'></i>", "Date of birth : YYYY-MM-DD", "dob", ""); ?>
                    </div>
                    <div class="col">
                        <?php inputElement("<i class='fas fa-people-carry'></i>", "Email", "email", ""); ?>
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col">
                        <?php inputElement("<i class='fas fa-dollar-sign'></i>", "Speciality", "spl", ""); ?>
                    </div>
                    <div class="col">
                        <?php inputElement("<i class='fas fa-dollar-sign'></i>", "Mobile No.", "ph", ""); ?>
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col">
                        <?php inputElement("<i class='fas fa-people-carry'></i>", "Experience", "expr", ""); ?>
                    </div>
                    <div class="col">
                        <?php inputElement("<i class='fas fa-dollar-sign'></i>", "Salary", "sal", ""); ?>
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <?php buttonElement("btn-create", "btn btn-success", "<i class='fas fa-plus'></i>", "create", "data-toggle='tooltip' data-placement='bottom' title='Create'"); ?>
                    <?php buttonElement("btn-read", "btn btn-primary", "<i class='fas fa-sync'></i>", "read", "data-toggle='tooltip' data-placement='bottom' title='Read'"); ?>
                    <?php buttonElement("btn-update", "btn btn-light border", "<i class='fas fa-pen-alt'></i>", "update", "data-toggle='tooltip' data-placement='bottom' title='Update'"); ?>
                    <?php buttonElement("btn-delete", "btn btn-danger", "<i class='fas fa-trash-alt'></i>", "delete", "data-toggle='tooltip' data-placement='bottom' title='Delete'"); ?>
                    <?php //deleteBtn(); 
                    ?>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap table  -->
    <div class="containter px-3">
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

    <!-- js files -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="../js/custom.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/dark-mode-switch.min.js"></script>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script>
        var menu_btn = document.querySelector("#menu-btn")
        var sidebar = document.querySelector("#sidebar")
        var container = document.querySelector(".my-container")
        menu_btn.addEventListener("click", () => {
            sidebar.classList.toggle("active-nav")
            container.classList.toggle("active-cont")
        })
    </script>

</body>

</html>