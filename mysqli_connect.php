<?php
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');
define('DB_NAME','member_mng');

try{
    $dbcon = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    mysqli_set_charset($dbcon,'utf8');
}
catch(Exception $e){
    print"The system is busy please try later";
}
catch(Error $e){
    print"The system is busy please try again later";
}
?>