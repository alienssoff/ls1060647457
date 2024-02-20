<?php

require "config/app.php";
require "config/database.php";

$pets = getAllPets($conx);
?>

<?php foreach($pets as $pet):?>
<div> <?php echo $pet['name'] ?></div>
<div> <?php echo $pet['breed'] ?></div>
<div> <?php echo $pet['location'] ?></div>
<?php endforeach?>

<!DOCTYPE html>
<html lang="en">




<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module Pets</title>
    <link rel="stylesheet" href="<?php echo URLCSS . "/master.css"?>">




</head>




<body>
    <main>
        <header class="nav level-0">
            <a href="../dashboard.html">
                <img src="/ico-back.svg" alt="back">
            </a>
            <img src="<?php echo URLIMGS . "/logo.svg" ?>" width="200px" alt="Logo">
           
            <a href="" class="mburger">
                <img src="<?php echo URLIMGS ."/burger.svg" ?>"alt="Hamburguer">
            </a>
        </header>
        <section class="module">
            <h1>MODULE PETS</h1>
            <a class="add" href="add.html">
                <img src="<?php echo URLIMGS ."/ico-add.svg" ?>" width="30px" alt="">
                Add Pet 
            </a>
            <table>
                <tbody>
                <?php foreach($pets as $pet):?>
                    <tr>
                        <td><img src="<?php echo URLIMGS ."/ico-pets.svg"?>" alt=""></td>
                        <td>
                           <span><?php echo $pet['name'] ?></span> 
                           <span><?php echo $pet['breed'] ?></span>
                        </td>
                        <td>
                            <a href="showpets.html" class="show">
                                <img src="<?php echo URLIMGS ."/ico-search.svg"?>" alt="">
                            </a>
                            <a href="editpets.html" class="edit">
                                <img src="<?php echo URLIMGS ."/ico-pencil.svg"?>" alt="">
                            </a>
                            <a href="javascript:;" class="delete">
                                <img src="<?php echo URLIMGS ."/ico-delete.svg" ?>"alt="">
                            </a>
                        </td>
                    </tr>

<?php endforeach?>

                   
                </tbody>
            </table>
        </section>




   </main>

<script src="../../js/sweetalert2.js"></script>
<script src="../../js/jquery-3.7.1.min.js"></script>
<script>
  $(document).ready(function () {
     $('body').on('click', '.delete', function () {
                Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#FFDDD2",
        cancelButtonColor: "#E29578",
        confirmButtonText: "Yes, delete it!"
        }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
            title: "Deleted!",
            text: "Your file has been deleted.",
            confirmButtonColor: "#FFDDD2",
            icon: "success"
            });
        }
        });     
            });
  });
</script>
</body>
</html>

