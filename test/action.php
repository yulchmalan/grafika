<?php
if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    // var_dump($email);
    // var_dump($password);
    echo("Привіт, моя пошта це ");
    echo($email);
}

?>