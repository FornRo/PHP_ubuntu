<div class="w-50 mx-auto">
    <h3>Basket</h3>
</div>
<?php
if (isset($_SESSION['products']))
{
?>
<div class="container">
    <table class="table table-hover table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">img</th>
            <th scope="col">name</th>
            <th scope="col">price</th>
            <th scope="col">#</th>
        </tr>
        </thead>
        <tbody>

        <?php
        //    _____________ Check for del product__________________
        if (isset($_GET['del_product'])){
            $key = $_GET['del_product'];
            unset($_SESSION['products'][$key]);
            header( 'Location: /base/?page=basket' );
            if ($_SESSION['products'] == null){
                unset($_SESSION['products']);
                exit();
            }
        }
        //_________ variables for basket _________
        $count_product = 0;
        $all_cost = 0;

        //    _________ Look in $_SESSION (basket) _________
        foreach ($_SESSION['products'] as $key => $value) {
            $all_cost += $value['price'];
            echo '<tr>';
                echo sprintf("<th scope='row'>%s</th>", $key);
                echo sprintf('<td><img class="img-thumbnail" style="max-width: 150px; max-height: 150px;" src="%s"> </td>', $value['img']);
                echo sprintf("<td>%s</td>", $value['name']);
                echo sprintf("<td>%s</td>", $value['price']);
                echo sprintf("<td><a href='?page=basket&del_product=%s'>del</a></td>", $key);
            echo '</tr>';
        }
        ?>
        <tr >
            <td class="bg-info"><?php echo count($_SESSION['products']).'<br>'; ?></td>
            <td class="bg-info">...</td>
            <td class="bg-info">...</td>
            <td class="bg-info"><?php echo $all_cost; ?></td>
            <td class="bg-info">...</td>
        </tr>
        </tbody>
    </table>
</div>
<?php
}
?>
