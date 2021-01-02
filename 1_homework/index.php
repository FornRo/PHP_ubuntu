<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body class="d-flex flex-column h-100">

<?php

    $GET = $_GET["page"];
    $GET = (is_null($_GET["page"]) ? 'Home' : $GET);

?>

<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/1_homework/">Main</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item active">
                        <a class="nav-link <?php echo ($GET == 'Home' ? "active" : ""); ?>" aria-current="page" href="?page=Home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($GET == 'Test1' ? "active" : ""); ?>" href="?page=Test1">Test1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($GET == 'Test2' ? "active" : ""); ?>" href="?page=Test2">Test2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($GET == 'Test3' ? "active" : ""); ?>" href="?page=Test3">Test3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($GET == 'Test4' ? "active" : ""); ?>" href="?page=Test4">Test4</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>

<!-- Begin page content -->
<main class="flex-shrink-0">
    <div class="container" style="padding-top: 60px;">
        <h1 class="mt-5">Sticky footer with fixed navbar</h1>
        <p class="lead">
        <h4 style="font-style: italic;">php code</h4>
        <code class="small">
            <?php
                        var_dump($_GET["page"]);
                        echo $_GET["page"];

//            include 'base.php';
            ?>
        </code>
        </p>
    </div>
</main>




<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>



</body>
</html>