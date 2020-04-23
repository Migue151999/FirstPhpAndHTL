<?php

//conectando
$connection = mysql_connect("localhost","root","");
mysql_select_db("cursophp");

if (mysqli_connect_error()) {
    trigger_error("Failed to connect to MySql");
    
}
?>
