<?php
$SERVER = "localhost";
$USER = "root";
$PASS = "";
$DB = "TIENDAONLINE";

$con = mysqli_connect($SERVER, $USER, $PASS, $DB);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
