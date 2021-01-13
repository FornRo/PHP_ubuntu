<div class="w-50 mx-auto">
    <h3>Products</h3>
    <p class="p-1 mb-2 bg-danger text-white">all products are loaded from products.json</p>
</div>


<!--    <p><input type="hidden" name="name" /></p>-->
<!--    <p><input type="submit" /></p>-->


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
            echo '<button class="btn btn-lg btn-primary btn-block" type="submit">Add to cart</button>';
        echo '</div>';
        echo '</form>';
    echo '</div>';
}

?>
<!--            <div class="product-list">-->
<!--                <h5>tomato</h5>-->
<!--                <span class="price">$15</span>-->
<!--                <a href="?products=name" class="button">В корзину</a>-->
<!--            </div>-->

    </div>
</div>

<?php

//var_dump($_SESSION);
print_r($_SESSION);
//$_SESSION['products'] = [];
//$products =[
//    "name" => "Product 1",
//    "detail" => "Lorem ipsum dolor sit amet",
//    "price" => "99",
//    "categories" => "This is the latest and greatest product from Derp corp.",
//    "image" => "http://placehold.it/300x300/999/CCC"
//];
//
//
//array_push($_SESSION['products'], $products);
?>

<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <p class="text-success bg-dark m-3">Place footer."code-Success"</p>
        <p>
        </p>
    </div>
</footer>
