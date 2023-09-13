<?php

//Dit is een array van een persoon
$persoon = [
    'Tim', 
    'Bakker',
    's1185808@windesheim.nl'
];
//Dit is een multidimensinale array met meerdere personen
$studenten = [
    array ('Tim', 'Bakker', 's1185808@windesheim.nl' ),
    array ('Jeroen', 'Versteeg', 'Jeroen@windesheim.nl'),
    array ('Meric', 'Oktayio4', 'Meric@windesheim.nl'),
];

//Dit is een for loop die laat alle studenten zien en alle gegevens daarvan
for ($i  = 0; $i < count($studenten); $i++) {
    echo $studenten[$i][0] . " " . $studenten[$i][1] . " " . $studenten[$i][2] . " <hr>";
}

//Dit zorgt voor een "enter"
echo "<br> <br>";

//Deze foreach zorgt ervoor dat alle studenten en alle gegevens worden laten zien
foreach ($studenten as $arree) {
    echo $arree[0] . " ";
    echo $arree[1] . " ";
    echo $arree[2] . " ";
    echo "<hr/>";
}



?>