<form class="form-signin m-5" method="post">
    <div class="w-75 mx-auto">
        <div class="text-center mb-4">
            <h3 class="h3 mb-3 font-weight-normal">Sign up page</h3>
        </div>

        <div class="form-group row mt-1">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="form-group row mt-1">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password_first">
            </div>
        </div>
        <div class="form-group row mt-1">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Again password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password_second">
            </div>
        </div>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="man" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Man
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="woman">
                        <label class="form-check-label" for="gridRadios2">
                            Woman
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="other" disabled>
                        <label class="form-check-label" for="gridRadios3">
                            Other
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <div class="form-group row">
            <div class="text-center col-sm-10 w-100">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </div>
        </div>


    </div>
</form>

<p class="mt-5 mb-3 text-muted text-center">
    <?php
    echo '© 2017-2020';
    ?>
</p>





