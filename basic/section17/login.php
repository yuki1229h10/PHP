<?php
$id = $_POST["id"];
$password = $_POST["password"];

if ($id === "Andy" && $password === "secret") {
    session_start();
    $_SESSION["id"] = $id;
    $_SESSION["time"] = date("Y-m-d H:i:s");

    header("Location: menu.php");
} else {
    header("Location: login.html");
}
