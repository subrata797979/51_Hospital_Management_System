<?php
    require __DIR__ . '/vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
?>

<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light navbar-light py-5">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 min-vh-100">
        <a href="/" class="d-flex align-items-center mb-md-0 me-md-auto text-decoration-none">
            <span class="fs-5 d-none d-sm-inline text-warning">Menu</span>
        </a>
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item">
                <a href="<?php echo $_ENV['HMS']?>" class="nav-link align-middle px-0">
                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                </a>
            </li>
            <li>
                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                    <li class="w-100">
                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1 </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2 </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
            </li>
            <li>
                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                    <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                    <li class="w-100">
                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                    <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                    <li class="w-100">
                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
            </li>
        </ul> 
    </div>
</div>