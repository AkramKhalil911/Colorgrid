<?php
    include_once 'config.php';
    $colorArray = array();

    function pushColor(){
        global $colorArray, $con;
        $sql = "INSERT INTO kleuren (kleur) VALUES (:kleur)";
        $sth = $con->prepare($sql);
        for($i = 0; $i < 10000; $i++){
            $newColor = createColor();
            $params = array(":kleur" => $newColor);
            $sth->execute($params);
        }
    }



    function createColor(){
        $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
        $kleur = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
        return $kleur;
    }
    pushColor();