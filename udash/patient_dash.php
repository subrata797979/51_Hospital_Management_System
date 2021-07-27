<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5 Side Bar Navigation</title>
    <!-- bootstrap 5 css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" href="./admin_dash.css">
</head>

<body>
    <nav class="navbar navbar-expand d-flex flex-column align-item-start" id="sidebar">
        <a href="#" class="navbar-brand text-light mt-5">
            <div class="display-5 font-weight-bold">THANOS</div>
        </a>
        <ul class="navbar-nav d-flex flex-column mt-5 w-100">
            <li class="nav-item w-100">
                <a href="#" class="nav-link text-light pl-4">Home</a>
            </li>
            <li class="nav-item w-100">
                <a href="#" class="nav-link text-light pl-4">About</a>
            </li>
            <li class="nav-item w-100">
                <a href="#" class="nav-link text-light pl-4">Blog</a>
            </li>
            <li class="nav-item dropdown w-100">
                <a href="#" class="nav-link dropdown-toggle text-light pl-4" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Service</a>
                <ul class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                    <li><a href="#" class="dropdown-item text-light pl-4 p-2">Service 01</a></li>
                    <li><a href="#" class="dropdown-item text-light pl-4 p-2">Service 02</a></li>
                    <li><a href="#" class="dropdown-item text-light pl-4 p-2">Service 03</a></li>
                </ul>
            </li>
            <li class="nav-item w-100">
                <a href="#" class="nav-link text-light pl-4">Contact</a>
            </li>
        </ul>
    </nav>
    <section class="p-4 my-container">
        <button class="btn my-4" id="menu-btn">Toggle Sidebar</button>
        <h1>Bootstrap 5 Sidebar Navigation</h1>
        <p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam facilis inventore harum, architecto libero recusandae porro doloremque sunt cum consectetur, autem, vitae ea nihil sapiente voluptas at aut suscipit eos? Sapiente quam culpa aliquam
            itaque debitis nihil doloremque rem! Praesentium quae, facere nobis impedit quisquam aliquid maxime error? Totam eaque earum fuga aliquam sequi excepturi illum optio quas tempora ea! Eum perspiciatis accusantium distinctio eveniet consequatur
            sint illo officiis? Saepe dolores fugiat rerum, voluptatem sunt culpa nihil accusantium voluptates unde hic magnam quos est perspiciatis recusandae incidunt quod laborum vitae. Harum modi inventore ea odit eaque ut maiores voluptate nihil
            aspernatur voluptatibus exercitationem ipsa nam animi neque tempore, eligendi, repellendus praesentium ex voluptatum? Magni laboriosam nemo, assumenda veniam aperiam eum! Eos, ipsum. Eum illo quos quo tempora excepturi reprehenderit numquam
            voluptas! Blanditiis autem optio labore quisquam culpa, tempora minus eum repudiandae ea voluptatem quia obcaecati velit cum dolorum esse dolorem!</p>
        <p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam facilis inventore harum, architecto libero recusandae porro doloremque sunt cum consectetur, autem, vitae ea nihil sapiente voluptas at aut suscipit eos? Sapiente quam culpa aliquam
            itaque debitis nihil doloremque rem! Praesentium quae, facere nobis impedit quisquam aliquid maxime error? Totam eaque earum fuga aliquam sequi excepturi illum optio quas tempora ea! Eum perspiciatis accusantium distinctio eveniet consequatur
            sint illo officiis? Saepe dolores fugiat rerum, voluptatem sunt culpa nihil accusantium voluptates unde hic magnam quos est perspiciatis recusandae incidunt quod laborum vitae. Harum modi inventore ea odit eaque ut maiores voluptate nihil
            aspernatur voluptatibus exercitationem ipsa nam animi neque tempore, eligendi, repellendus praesentium ex voluptatum? Magni laboriosam nemo, assumenda veniam aperiam eum! Eos, ipsum. Eum illo quos quo tempora excepturi reprehenderit numquam
            voluptas! Blanditiis autem optio labore quisquam culpa, tempora minus eum repudiandae ea voluptatem quia obcaecati velit cum dolorum esse dolorem!</p>
    </section>


    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
    <!-- custom js -->
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