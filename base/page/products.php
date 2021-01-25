<div class="w-50 mx-auto">
    <h3>Products</h3>
    <p class="p-1 mb-2 bg-danger text-white">all products are loaded from products.json</p>
</div>

<?php
//_________ post save in $_SESSION _________
if (isset($_POST['name']) or isset($_POST['price'])) {
    $_SESSION['products'][] = $_POST;
    header( 'Location: /base/?page=products' );
    exit();
}
//_________ ****************** _________

if (isset($_SESSION['products'])) {
    $count_product = 0;
    $all_cost = 0;
    foreach ($_SESSION['products'] as $value) {
        $all_cost += $value['price'];
    }
    echo count($_SESSION['products']).'<br>';
    echo $all_cost;
}
?>

<div class="container">
    <div class="row">
        <?php
        $a = file_get_contents('data/products.json');
        $json_data = json_decode($a);
        foreach ($json_data as $key => $product) {
            echo '<div class="col-sm">';
            echo '<form method="post">';
                echo sprintf('<img class="img-thumbnail" style="max-width: 270px; max-height: 270px;" src="%s">', $product->{'image'});
                echo '<div class="product-list">';
                    echo sprintf('<h5><input type="hidden" name="name" value="%s" />%s</h5>', $product->{'name'}, $product->{'name'});
                    echo sprintf('<p><input type="hidden" name="price" value="%s" />%s $</p>', $product->{'price'}, $product->{'price'});
                    echo sprintf('<input type="hidden" name="img" value="%s" />', $product->{'image'});
                    echo '<button class="btn btn-lg btn-primary btn-block" type="submit">Add to cart</button>';
                echo '</div>';
                echo '</form>';
            echo '</div>';
        }
        ?>
    </div>
</div>

<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <p class="text-success bg-dark m-3">Place footer."code-Success"</p>
        <p>
        </p>
    </div>
</footer>
