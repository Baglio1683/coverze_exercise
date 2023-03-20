<?php

require_once('config.php');

$firstname = $connection->real_escape_string($_POST['firstname']);
$lastname = $connection->real_escape_string($_POST['lastname']);
$email = $connection->real_escape_string($_POST['email']);
$password = $connection->real_escape_string($_POST['password']);
$password_hash = password_hash($password, PASSWORD_DEFAULT);



$sql = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$firstname' , '$lastname' , '$email' , '$password_hash')";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="../style/style.css" />
    <title>Area Registrazione Effettuata</title>
</head>

<body>

    <header class="d-flex align-items-center">
        <div class="container">
            <div>
                <img src="../style/img/logo.png" alt="" class="logo" />
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <?php
                if ($connection->query($sql) === true) {
                    echo "registrazione effettuta con successo";
                } else {
                    echo "registrazione fallita utente $sql";
                }
                ?>

                <p>Vai alla pagina di Login: <a href="../login.html">UserPage</a></p>
            </div>
        </div>
    </main>

</body>

</html>