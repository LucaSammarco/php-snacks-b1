<!-- Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->


<?php

$testo = "GALADRIEL: I amar prestar aen. Il mondo è cambiato. Han mathon ne nen. Lo sento nell'acqua. Han mathon ne chae. Lo sento nella terra. A han noston ned 'wilith. Lo avverto nell'aria. Molto di ciò che era si è perduto, perché ora non vive nessuno che lo ricorda. Tutto ebbe inizio con la forgiatura dei Grandi Anelli. Tre furono dati agli Elfi, gli esseri immortali più saggi e leali di tutti. Sette ai Re dei Nani, grandi minatori e costruttori di città nelle montagne. E nove, nove anelli furono dati alla razza degli uomini, che più di qualunque cosa desiderano il potere.";


$testoArray = str_split($testo);

// var_dump($testoArray);

$testoArray = (explode(".",$testo));

var_dump($testoArray);

foreach ($testoArray as $key => $value) {
    
    echo $testoArray[$key];
}
?>


