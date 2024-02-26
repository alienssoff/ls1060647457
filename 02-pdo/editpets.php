<?php


    require_once "config/app.php";
    require_once "config/database.php";


    $pet = getPet($conx, $_GET['id']);


?>


<!DOCTYPE html>
<html lang="en">




<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pet</title>
    <link rel="stylesheet" href="<?php echo URLCSS . "/master.css"?>">




</head>




<body>
    <main>
        <header class="nav level-1">
            <a href="index.php">
                <img src="<?php echo URLIMGS . "/ico-back.svg"?>" alt="back">
            </a>
                <img src="<?php echo URLIMGS . "/logo.svg"?>" width="200px" alt="Logo">
           
            <a href="" class="mburger">
                <img src="<?php echo URLIMGS . "/burger.svg"?>" alt="Hamburguer">
            </a>
        </header>


        <section class="edit">
            <h1>Edit Pet</h1>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?=$pet['id']?>">
                <img src="<?php echo URLIMGS . "/" . $pet['photo']?>" alt="upload" id="upload">
                <input type="file" name="photo" id="photo" accept="image/*" >
                <input type="text" name="name" value="<?=$pet['name']?>" placeholder="Name" required>
                <input type="text" name="kind" value="<?=$pet['kind']?>" placeholder="Kind" required>
                <input type="number" name="weight" value="<?=$pet['weight']?>" placeholder="Weight" required>
                <input type="number" name="age" value="<?=$pet['age']?>" placeholder="Age" required>
                <input type="text" name="breed" value="<?=$pet['breed']?>" placeholder="Breed" required>
                <input type="text" name="location" value="<?=$pet['location']?>" placeholder="Location" required>
                <button type="submit">UPDATE</button>
            </form>
            <?php
                if ($_POST){


                    if(!empty($_FILES['photo']['name'])){
                        $photo = time() . "." . pathinfo($_FILES['photo'] ['name'], PATHINFO_EXTENSION);
                        $data = [
                            'id'    => $_POST['id'],
                            'name'  => $_POST['name'],
                            'photo' => $photo,
                            'kind'  => $_POST['kind'],
                            'weight'=> $_POST['weight'],
                            'age'   => $_POST['age'],
                            'breed' => $_POST['breed'],
                            'location' => $_POST['location']
                    ];
                    } else{
                        $data = [
                            'id'    => $_POST['id'],
                            'name' => $_POST['name'],
                            'kind' => $_POST['kind'],
                            'weight' => $_POST['weight'],
                            'age' => $_POST['age'],
                            'breed' => $_POST['breed'],
                            'location' => $_POST['location']
                    ];
                    }




                //echo var_dump($data);


             if (updatePet($conx, $data)){
                    if(!empty($_FILES['photo']['name'])){
                        move_uploaded_file($_FILES['photo']['tmp_name'], "../01-UI/img/" . $photo);
                    }
                    header("Location: index.php");
                } 
               }
            ?>
        </section>


        <script src="<?php echo URLJS . "/sweetalert2.js"?>"></script>
        <script src="<?php echo URLJS . "/jquery-3.7.1.min.js"?>"></script>
        <script>
            $(document).ready(function () {
              $('#upload').click(function (e) {
                e.preventDefault()
                $('#photo').click()
              })


              $('#photo').change(function (e) {
                e.preventDefault();
                let reader = new FileReader()
                reader.onload = function(event) {
                    $('#upload').attr('src', event.target.result)
                }
                reader.readAsDataURL(this.files[0])
              })
            })
        </script>


   </main>
</body>
</html>


