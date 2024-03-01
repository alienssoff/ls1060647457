<?php

require "config/app.php";

    unset($_SESSION['uid']);
    unset($_SESSION['unrole']);
    session_destroy();

    header('location: index.php');

?>