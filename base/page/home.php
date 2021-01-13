<div class="w-50 mx-auto">
    <h3>Home</h3>
    <p>
        <?php
            if( isset($_GET['unset_ss']) ) {
                session_unset(); // $_SESSION['id_user'] = null;

                // обрабатываем ситуацию
                header( 'Location: /base' );
                exit();
            }
            echo $_SESSION['id_user'];
        ?>
    </p>
    <p><a href="?unset_ss=1">unset_ss</a> = clear $_SESSION</p>
    <p>re_pass = page in repass </p>
    <p>products = page where you can buy some products</p>
</div>

<?php

?>

