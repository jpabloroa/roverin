<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from Form
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "juan" && $password == "loco") {
        echo "Sapagonorrea";
    } else {
        header("Refresh:0");
    }
}
