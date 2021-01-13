<div class="col-sm">

</div>


<div class="w-75 mx-auto">
    <code class="small">
    <?php

    //_________ start _________

//    print_r($result);
//        echo nl2br($a);

    //_________ end _________

    ?>
    </code>
</div>
<div class="container">
    <div class="row">
        <form method="post">
            <img class="img-thumbnail" style="max-width: 270px; max-height: 270px;" src="http://placehold.it/300x300/999/CCC">
            <div class="product-list">
                <h5><input type="hidden" name="name" value="Product 1" />Product 1</h5>
                <p><input type="hidden" name="price" value="9" />9 $</p>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Add to cart</button>
            </div>
        </form>

    </div>
</div>


<div class="w-50 mx-auto">
    <p>
        <?php // clear URL
        if( isset($_GET['unset_ss']) ) {
            session_unset(); // $_SESSION['id_user'] = null;

            // обрабатываем ситуацию
            header( 'Location: /test' );
            exit();
        } else {
            echo $_SESSION['id_user'];
        }
        ?>

    </p>
    <a href="?unset_ss=1">unset_ss</a><br>

    <?php
    if (isset($_SESSION['id_user'])) {
        print '';
//        print_r($_SESSION);
    } else {
        print '';
//        print_r($_SESSION);
    }
    ?>
</div>


<footer class="footer mt-auto py-3 bg-light">
    <div class="container w-75 mx-auto">
        <p class="text-success bg-dark m-3">Place footer."code-Success"</p>
    </div>
</footer>


