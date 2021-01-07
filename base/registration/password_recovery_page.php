<div class="w-50 mx-auto">
    <div class="text-center mb-4">
        <h3 class="h3 mb-3 font-weight-normal">Recovery Password</h3>
    </div>
    <form class="form-inline" method="post">
        <div class="form-group mt-1">
            <label for="inputPassword6">Password</label>
            <small id="passwordHelpInline" class="text-muted">Must be 8-20 characters long.</small>
            <input type="password" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline" placeholder="Password" name="password">
        </div>
        <div class="form-group mt-1">
            <input type="password" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline" placeholder="Password again" name="password_again">
        </div>
        <button type="submit" class="btn btn-primary mt-1">Submit</button>
    </form>
</div>
<?php

function check_length($value = "", $min=8, $max=20) {
    $result = (mb_strlen($value) < $min or mb_strlen($value) > $max);
    return !$result;
}


$password = $_POST['password'];
$password_again = $_POST['password_again'];
?>
<div class="w-50 mx-auto m-3 bg-dark" style="margin-bottom: 0;">
    <p class="text-success text-center">
        <?php
        if ($password == $password_again and check_length($password)) {
            $format = 'Your new password %s';
            echo sprintf($format, $password);
        } elseif (check_length($password)) {
            echo 'passwords different';
        } else {
            echo 'passwords do not match';
        }

        ?>
    </p>
</div>