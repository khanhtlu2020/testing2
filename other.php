<?php
if(isset($_POST['txtUser']) && isset($_POST['txtPass'])){
    $user = $_POST['txtUser'];
    $pass = $_POST['txtPass'];

    $sql = "SELECT * FROM users WHERE username='$user'";
    echo $sql;   
}
?>