<html>
    <title>Login</title>
    <body>
        <?php
        $usr = "admin";
        $psw = "password";
        $username = '$_POST[username]';
        $password = '$_POST[password]';
        session_start();
        if ($_SESSION['login']==true || ($_POST['username']=="admin" && $_POST['password']=="password")) {
            echo "mot de passe accepté";
            $_SESSION['login']=true;
        }else {
            echo "login incorrect";
        }
        ?>

        <form name="input" action="adminportal.php" method="get">
            <input type="submit" value="Home">
        </form>
    </body>
</html>

<?php
$cookie_name = "user";
$cookie_value = "anyone";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
?>