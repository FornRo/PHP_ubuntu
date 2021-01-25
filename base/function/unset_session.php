<?php
if( isset($_GET['unset_ss']) ) {
    session_unset(); // $_SESSION['id_user'] = null;
//  unset($_SESSION['products']);

    header( 'Location: /base' );
    exit();
}
