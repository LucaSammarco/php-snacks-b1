<?php 


$arrayRamdom = [];

for ($i = 0; count($arrayRamdom) < 15; $i++) {

    $myNewInt = rand(1,100);

    if (in_array($myNewInt, $arrayRamdom) === false) {
        $arrayRamdom[] = $myNewInt;
    } 
}

var_dump($arrayRamdom);

?>