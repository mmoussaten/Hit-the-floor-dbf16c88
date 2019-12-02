<?php

$bedrag = $argv[1];

$aantal = array(10, 5, 2, 1);
for ($i=0; $i <count($aantal) ; $i++) {
    if ($aantal[$i] <= $bedrag) {
        $wisselgeld =  floor($bedrag / $aantal[$i]);
        $bedrag = $bedrag - ($wisselgeld * $aantal[$i]);
        echo $wisselgeld . " x " . $aantal[$i] . " euro" . PHP_EOL;

    }
    else{
        echo  0 . " x " . $aantal[$i] . " euro" . PHP_EOL;
    }
}