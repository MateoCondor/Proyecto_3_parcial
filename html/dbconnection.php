<?php
$con = new mysqli('localhost', 'root', 'rootroot', 'proyecto_bd');
//$con = mysqli_connect("localhost", "root", "rootroot", "bd_p");
if (mysqli_connect_errno()) {
    echo "Connection Fail" . mysqli_connect_error();
}
?>
