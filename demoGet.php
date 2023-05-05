<?php
    // if($_SERVER['REQUEST_METHOD']=='POST'){
    //     $user = $_POST ['txtUser'];
    //     $pass = $_POST ['txtPass'];

    //     $sql = "SELECT * FROM users WHERE username='$user'";
    //     echo $sql;
    // }
?>
<form action="other.php" method="post">
    Username: <input type="text" name="txtUser" id="">
    Password: <input type="password" name="txtPass" id="">
    <button type="submit">Login</button>
</form>
