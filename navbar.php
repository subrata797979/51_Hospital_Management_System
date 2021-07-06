<?php
    require __DIR__ . '/vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
?>
<!-- navigation bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a href="#" class="navbar-brand"><h2>INSS Hospital Pvt. Lt.</h2></a>
        <div class="form-check form-switch">
            <label class="label" for="darkSwitch">Dark Mode</label>
            <input type="checkbox" class="form-check-input" id="darkSwitch" />
        </div>

        <button class="btn btn-primary navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto text-center ">
                <li class="nav-item">
                    <a href="http://<?php echo $_ENV[HOME]?>/admin/admin_login.php" class="nav-link text-warning">Admin</a>
                </li>
                <li class="nav-item">
                    <a href="#login" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">About Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>