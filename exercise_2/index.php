<?php

include('Animal.php');
include('Dog.php');
include('Cat.php');

$cat = new Cat('Matis', '5kg', '20cm', 'Europeo');

$dog = new Dog('Bobby',  '15kg', '30cm', 'Setter Inglese');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>
        <?php
        echo 'Il nome del Gatto è: ' . $cat->get_name();
        ?>
    </div>

    <div>
        <?php
        echo 'Il nome del Cane è: ' . $dog->get_name();
        ?>
    </div>

    <div>
        <?php
        $cat->meow();
        ?>
    </div>

    <div>
        <?php
        $dog->bark();
        ?>
    </div>

</body>

</html>