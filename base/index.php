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
$GET = (is_null($_GET["page"]) ? 'home' : $GET);

?>

<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="?page=home">Logotype</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item active">
                        <a class="nav-link <?php echo ($GET == 'home' ? "active" : ""); ?>" aria-current="page" href="?page=home">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link <?php echo ($GET == 'about' ? "active" : ""); ?>" aria-current="page" href="?page=about">About</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="/test/">test_area</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link <?php echo ($GET == 'push_file' ? "active" : ""); ?>" aria-current="page" href="?page=push_file">push_file</a>
                    </li>
                </ul>
                <a class="btn btn-sm btn-outline-secondary m-1" href="?page=sing_up_page">Sign up</a>
                <a class="btn btn-sm btn-outline-secondary m-1" href="?page=login_page">Login</a>

                <ul class="navbar-nav mb-2 mb-md-0">
                    <li class="nav-item active">
                        <a class="nav-link <?php echo ($GET == 'password_recovery_page' ? "active" : ""); ?>" aria-current="page" href="?page=password_recovery_page">re_pass</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link <?php echo ($GET == 'login_page' ? "active" : ""); ?>" aria-current="page" href="?page=login_page">login</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link <?php echo ($GET == 'sing_up_page' ? "active" : ""); ?>" aria-current="page" href="?page=sing_up_page">sing_up</a>
                    </li>
                </ul>
<!--                <form class="d-flex">-->
<!--                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
<!--                    <button class="btn btn-outline-success" type="submit">Search</button>-->
<!--                </form>-->

            </div>
        </div>
    </nav>
</header>


<!-- Begin page content -->
<main class="flex-shrink-0">
    <div class="container" style="padding-top: 60px;">

            <?php

            switch ($GET) {
                case 'home':
                    require 'page/base.php';
                    break;
                case 'login_page':
                    require 'registration/login_page.php';
                    break;
                case 'sing_up_page':
                    require 'registration/sing_up_page.php';
                    break;
                case 'password_recovery_page':
                    require 'registration/password_recovery_page.php';
                    break;
                case 'about':
                    require 'page/about.php';
                    break;
                case 'push_file':
                    require 'registration/push_file.php';
                    break;
            }
//            require 'base.php';
//            include 'base.php';
            ?>
    </div>
</main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>



</body>
</html>