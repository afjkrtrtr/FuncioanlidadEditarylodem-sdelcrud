<?php
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','base_empleados');

$link=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
if ($link === false) {
    die("ERROR: No se puede conetar a ña base de datos".mysqli_connect_error());
}

?>