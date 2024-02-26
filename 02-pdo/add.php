<?php

require "config/app.php";
require "config/database.php";


?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Add Pet</title>
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
        <section class="create">
            <h4>Add Pet</h4>
            <form action="" method="post" enctype="multipart/form-data">
                <img src="<?php echo URLIMGS . "/ico-uploadpet.svg"?>" width="255px" alt="" id="upload">
                <input type="file" name="photo" id="photo" accept="image/*" required>
                <input type="text" name="name" placeholder="FULL NAME" required>
                <input type="text" name="kind" placeholder="KIND" required>
                <input type="number" name="age" placeholder="AGE" required>
                <input type="text" name="breed" placeholder="BREED" required>
                <input type="text" name="weight" placeholder="WEIGHT" required>
                <input type="text" name="location" placeholder="LOCATION" required>
                <button type="submit">ADD</button>
            </form>
            <?php
            if ($_POST){
                  
           $photo = time() . "." . pathinfo($_FILES ['photo']['name'], PATHINFO_EXTENSION);

                $data=[
                    'name'   => $_POST['name'],
                    'photo'  => $photo,
                    'kind'   => $_POST['kind'],
                    'weight' => $_POST['weight'],
                    'age'   => $_POST['age'],
                    'breed'  => $_POST['breed'],
                    'location'   => $_POST['location']   
                ];

                //echo var_dump($data);
              

                 if (addPet($conx, $data)){
                     move_uploaded_file($_FILES ['photo']['tmp_name'],"../01-UI/img/" . $photo);
                        header("location: index.php");
                    } else {
                        }

                    }
            
            ?>
        </section>




   </main>

    <script src="<?php echo URLJS ."/sweetalert2.js" ?>"></script>
    <script src="<?php echo URLJS ."/jquery-3.7.1.min.js" ?>"></script>
<script>
    $(document).ready(function () {
        $('#upload').click(function (e) {
            e.preventDefault();
            $('#photo').click()
           
        });
        $('#photo').change(function (e) {
            e.preventDefault();
            let reader = new FileReader()
            reader.onload = function(event)
    {
        $('#upload').attr('src', event.target.result);
    }            
    reader.readAsDataURL(this.files[0])
        });
    });
</script>




</body>
</html>

