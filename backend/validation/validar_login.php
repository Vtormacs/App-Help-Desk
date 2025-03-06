<?php
/*
if (isset($_GET['email']) && isset($_GET['password'])) {
    echo $_GET['email'];
    echo "<br>";
    echo $_GET['password'];
} else {
    echo "Email ou senha não foram fornecidos.";
}
*/

if (isset($_POST['email']) && isset($_POST['password'])) {
    echo $_POST['email'];
    echo "<br>";
    echo $_POST['password'];
} else {
    echo "Email ou senha não foram fornecidos.";
}
?>