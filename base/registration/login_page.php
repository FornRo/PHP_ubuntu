<form class="form-signin m-5" method="post">
    <div class="text-center mb-4">
        <h3 class="h3 mb-3 font-weight-normal">Login page</h3>
    </div>

    <div class="form-label-group w-50 mx-auto">
        <label for="inputEmail">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" name="email">

        <label for="inputPassword">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" name="password">
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
        <div>
            <a class="text-xs" data-turbolinks="false" href="?page=password_recovery_page" tabindex="-1">Forgot your password?</a>
        </div>
    </div>
</form>

<p class="mt-5 mb-3 text-muted text-center">
    <?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    $format = 'Your email %s and password %s';
    echo sprintf($format, $email, $password);
    ?>
</p>
