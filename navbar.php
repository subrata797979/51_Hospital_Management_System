<!-- navigation bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <a href="<?php echo $_ENV['HTTP']?>" class="navbar-brand"><h2>INSS Hospital Pvt. Lt.</h2></a>
        <div class="form-check form-switch">
            <label class="label" for="darkSwitch">Dark Mode</label>
            <input type="checkbox" class="form-check-input shadow-sm" id="darkSwitch" />
        </div>

        <button class="btn btn-primary navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto text-center ">
                <li class="nav-item">
                    <a href="#help" class="nav-link text-warning">Help</a>
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