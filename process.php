<?php 

require_once 'config.php';

$kleurenarray = array();
$sql = 'SELECT * FROM kleuren;';
$sth = $con->prepare($sql);
$sth->execute();

while($row = $sth -> fetch()){
    array_push($kleurenarray,$row);
}

echo json_encode($kleurenarray);
