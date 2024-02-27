<?php


require "config/app.php";
require "config/database.php";



?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="<?php echo URLCSS . "/master.css"?>">

<style>

div.menu{
    background-color: #FFDDD2;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 2rem;
    position: absolute;
    top: -2000px;
    opacity: 0;
    left: 0;
    z-index: 999;
    justify-content: center;
    min-height: 100vh;
    width: 100%;


    a:is(:link, :visited){
        border: 1px solid #fff;
        border-radius: 50px;
        color: #fff;
        font-size: 2rem;
        padding: 10px 20px;
        text-decoration: none;
    }
}
div.menu.open{
    animation: openMenu 0.5s ease-in 1 forwards;

}

div.menu.close{
    animation: openMenu 0.5s ease-in 1 forwards;

}
@keyframes openMenu {
    0%{
        top: -2000px;
        opacity:0;
    }
    100%{
        top:0;
        opacity: 1;
    }
}

@keyframes closeMenu {
    0%{
        top: 0;
        opacity:1;
    }
    100%{
        top:-2000;
        opacity: 0;
    }
}
</style>

</head>

<body>

<div class="menu">
    <a href="javascript:;" class="closem">X</a>
    <nav>
     <a href="close.php">Close Session</a>
    </nav>
</div>
<main>
<header class="nav level-0">
            <a href="../dashboard.html">
                <img src="/ico-back.svg" alt="back">
            </a>
            <img src="<?php echo URLIMGS . "/logo.svg" ?>" width="200px" alt="Logo">
           
            <a href="javascript:;" class="mburger">
                <img src="<?php echo URLIMGS ."/burger.svg" ?>"alt="Hamburguer">
            </a>
        </header>
        <section class="dashboard">
            <h1>Dashboard</h1>
            <menu>
                <ul>
                    <li>
                        <a href="#">
                            <img src="<?php echo URLIMGS . "/ico-users.svg"?>" alt="Users">
                            Module User
                        </a>
                    </li>
                    <li class="pet">
                        <a href="#">
                            <img src="<?php echo URLIMGS . "/ico-pets.svg"?>" alt="Pets">
                            Module Pets
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo URLIMGS ."/ico-adoptions.svg"?>" alt="Adoptions">
                            Module Adoptions
                        </a>
                    </li>
                </ul>
            </menu>
        </section>


   </main>

<script src="<?php echo URLJS ."/sweetalert2.js" ?>"></script>
<script src="<?php echo URLJS ."/jquery-3.7.1.min.js" ?>"></script>
<script>
            $(document).ready(function () {

                $('body').on('click', '.mburger', function () {
                    $('.menu').addClass('open')
                });

                $('body').on('click', '.closem', function () {
                    $('.menu').addClass('close')
                    setTimeout(()=> {
                        $('.menu').removeClass('open')
                        $('.menu').removeClass('close')
                    },1000)
                   
                    
                });


                <?php if(isset($_SESSION['msg'])): ?>
                        Swal.fire({
                        position:"top-end",
                        title: "Congratulations!",
                        text: "<?php echo $_SESSION['msg'] ?>",
                        icon: "success",
                        showConfirmButton: false,
                        timer: 5000
                    })
                    <?php unset($_SESSION['msg']) ?>
                    <?php endif ?>

    })
        </script>


</body>
</html>