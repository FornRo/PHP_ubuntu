<!--<div class="col-sm">-->
<!--</div>-->
<div class="w-75 mx-auto">
    <code class="small">
    <?php
    //_________ start _________
    if (isset($_POST['name']) or isset($_POST['price'])) {
        $_SESSION['products'][] = $_POST;
        header( 'Location: /test/' );
        exit();
    }
    foreach ($_SESSION['products'] as $key => $value) {
        echo $key.' = ';
        print_r($value);
        print '<br>';
    }
    //_________ end _________
    ?>
    </code>
</div>

<!--TEST_FORM-->
<div class="container">
    <div class="row">
        <form method="post">
            <img class="img-thumbnail" style="max-width: 270px; max-height: 270px;" src="http://placehold.it/300x300/999/CCC">
            <div class="product-list">
                <h5><input type="hidden" name="name" value="Product <?php $product_name = random_int(0, 5); echo $product_name; ?>" />Product <?php echo $product_name;?></h5>
                <p><input type="hidden" name="price" value="<?php $prise = random_int(5, 15); echo $prise; ?>" /><?php echo $prise;?> $</p>
                <input type="hidden" name="img" value="http://placehold.it/300x300/999/CCC" />
                <button class="btn btn-lg btn-primary btn-block" type="submit">Add to cart</button>
            </div>
        </form>

    </div>
</div>
<!--END TEST_FORM-->




<footer class="footer mt-auto py-3 bg-light">
    <div class="container w-75 mx-auto">
        <p class="text-success bg-dark m-3">Place footer."code-Success"</p>
    </div>
</footer>


