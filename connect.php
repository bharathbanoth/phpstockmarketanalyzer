<?php
$connect = mysql_connect('localhost','database','password');
if(!$connect){
die('could not connect to database !');
}
mysql_select_db("database",$connect);

?>
