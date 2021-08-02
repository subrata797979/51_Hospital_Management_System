<?php
//for hiding errors
//error_reporting(E_PARSE | E_ERROR);
$upOne = dirname(__DIR__, 2);
require_once $upOne . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable($upOne);
$dotenv->load();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css files -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/dark-mode.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <link rel="stylesheet" href="../../css/fa.css">

    <title>Admin Dashboard</title>
</head>

<body>

    <?php
        include './admin_sidebar.php';
    ?>

    <main>

        <?php
        include '../dash_navbar.php';
        ?>

        <article>
            <h1 class="text-center fs-1 m-3">ADMIN <spand class="text-warning">DASHBOARD</span></h1>
            <p class="p-3">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur quaerat aut corporis optio suscipit dolore, voluptatibus officia ducimus fugit voluptatem soluta praesentium, possimus odio dolor, est doloribus sed commodi iusto.
                Harum debitis voluptate corporis eligendi corrupti hic eum, inventore illo quae ab possimus architecto necessitatibus assumenda unde vero beatae omnis rem voluptas nostrum delectus! Alias sed consequuntur rem quae minus.
                Soluta molestias, ullam harum doloribus possimus delectus at est neque ratione dignissimos recusandae cumque repellendus dolor, ipsum atque rem perferendis natus nesciunt tempore voluptatum culpa. Fugiat nisi inventore dicta suscipit.
                Eum recusandae consequatur atque rem voluptatum possimus porro aperiam cum laudantium ducimus veniam commodi assumenda ratione earum illo quo, odio alias iusto? Labore dolorem assumenda ab quod eius, animi veritatis?
                Excepturi consectetur praesentium exercitationem nam mollitia hic porro architecto dicta facere impedit sequi non saepe veritatis soluta, incidunt esse sit. Molestiae explicabo atque officia suscipit commodi sequi aut repellendus maiores.
                Minima assumenda consequuntur beatae facilis adipisci, impedit, fuga illo a vel provident et voluptates, deleniti magnam! Deserunt esse sapiente id commodi. Iste voluptatem consequatur aperiam odit molestias omnis culpa ratione!
                Autem officiis fugiat placeat aliquid illum ex vel corporis ut quos, nobis ad quia quisquam eos ullam praesentium tenetur aperiam nesciunt accusantium nostrum aspernatur? Ut laboriosam obcaecati odit consequatur laborum!
                Voluptatum, aspernatur minima! Beatae possimus ullam harum ratione, qui alias eaque iste animi ut natus sequi sint expedita unde aliquid illo voluptas necessitatibus dignissimos cum, pariatur dolorum nulla officia? Molestiae!
                Voluptates eius magni at labore a asperiores illum tempore obcaecati. Illum nisi at deleniti fuga totam dolorem, provident explicabo omnis dignissimos impedit nobis facere? Neque optio deleniti placeat incidunt excepturi?
                Hic cupiditate dolore, iste nam modi iure minus cumque saepe sit, voluptatum facilis! Assumenda aliquid quisquam magnam voluptate inventore dignissimos mollitia perferendis, animi atque, fugiat hic quo nisi temporibus. Ipsa?
            </p>
            <script>
                var today= new Date();
                var hourNow = today.getHours();
                var greeting;
                if (hourNow > 18) {
                greeting= 'Good evening!'; }
                else if (hourNow > 12) {
                greeting = ' Good afternoon!'; }
                else if (hourNow > 0) {
                greeting = 'Good morni ng!'; }
                else {
                greeting = 'Welcome! ' ; }
                document.write("<h4 class='text-center'><span class='text-warning'>"+ greeting +"</span> ADMIN<h4>");
            </script>
        </article>

    </main>
    <!-- js files -->
    <script src="../../js/bootstrap.bundle.js"></script>
    <script src="../../js/dark-mode-switch.min.js"></script>
</body>

</html>