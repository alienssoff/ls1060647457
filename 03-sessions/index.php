<?php


require "config/app.php";
require "config/database.php";

if(isset($_SESSION['uid'])){
    header("location: dashboard.php");
}

?>




<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Users</title>
    <link rel="stylesheet" href="<?php echo URLCSS . "/master.css"?>">


</head>

<body>
<main>
        <header>
            <h3>Login</h3>
        </header>
        <section class="login">
            <menu>
                <a href="javascript:;">LOGIN</a>
                <a href="register.php">REGISTER</a>
            </menu>
            <form action="login.php" method="post">
                <input type="email" name="email" placeholder="EMAIL" required>
                <input type="password" name="password" placeholder="PASSWORD" required>
                <button type="submit">LOGIN </button>
            </form>
            
        </section>
    </main>
    

<script src="<?php echo URLJS ."/sweetalert2.js" ?>"></script>
<script src="<?php echo URLJS ."/jquery-3.7.1.min.js" ?>"></script>
<script>
            $(document).ready(function () {




                <?php if(isset($_SESSION['error'])): ?>
                        Swal.fire({
                        position:"top-end",
                        title: "Ops!",
                        text: "<?php echo $_SESSION['error'] ?>",
                        icon: "error",
                        showConfirmButton: false,
                        timer: 5000
                    })
                    <?php unset($_SESSION['error']) ?>
                    <?php endif ?>








                
    })
        </script>


</body>
</html>