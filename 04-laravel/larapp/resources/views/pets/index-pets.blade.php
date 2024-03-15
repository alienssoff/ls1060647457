
@extends('layouts.app')

@section('title', 'Pets Page - PetsApp')

@section('content')

<header class="nav level-0">
    <a href="../dashboard.html">
        <img src="{{asset ('images/ico-back.svg')}}" alt="back">
    </a>
    <img src="{{asset ('images/logo.svg')}}" width="200px" alt="Logo">
   
    <a href="" class="mburger">
        <img src="<?php echo URLIMGS ."/burger.svg" ?>"alt="Hamburguer">
    </a>
</header>
<section class="module">
    <h1>MODULE PETS</h1>
    <a class="add" href="add.php">
        <img src="<?php echo URLIMGS ."/ico-add.svg" ?>" width="30px" alt="">
        Add Pet
    </a>
    <table>
        <tbody>
        <?php foreach($pets as $pet):?>
            <tr>
                <td><img src="<?php echo URLIMGS . "/" . $pet['photo'] ?>" alt="Pet"></td>
                <td>
                   <span><?php echo $pet['name'] ?></span>
                   <span><?php echo $pet['breed'] ?></span>
                </td>
                <td>
                    <a href="showpets.php?id=<?=$pet['id']?>" class="show">
                        <img src="<?php echo URLIMGS ."/ico-search.svg"?>" alt="">
                    </a>
                    <a href="editpets.php?id=<?=$pet['id']?>" class="edit">
                        <img src="<?php echo URLIMGS ."/ico-pencil.svg"?>" alt="">
                    </a>
                    <a href="javascript:;" class="delete" data-id="<?=$pet['id']?>">
                        <img src="<?php echo URLIMGS ."/ico-delete.svg" ?>"alt="">
                    </a>
                </td>
            </tr>


<?php endforeach?>


           
        </tbody>
    </table>
</section>
