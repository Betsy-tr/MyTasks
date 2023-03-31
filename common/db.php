<?php

$mysqli = @new mysqli($dbHost , $dbUser , $dbPw , $dbName) ;

if($mysqli->connect_error){

    echo "Viré plita" ;
    
}

?>