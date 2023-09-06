<html>
<head>
    <style>
        .div {
            border: 5px solid blue;
            background-color: lightblue;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="div">
    <h2>Gegevens</h2>
<?php

//Dit zijn alle variabelen
$firstname = "Tim";
$lastname = "Bakker";
$age = "19";
$mail = "1185808@student.windesheim.nl";
$adres = "overmeerseweg";
$huisnummer = "76";
$woonplaats = "Nederhorst";
$birthdate = "11/11/2003";
$telefoon = "068194871";
$nationaliteit = "Nederlands";
$postcode = "1309BE";
$isAanwezig = true;

//Hier worden alle variabelen laten zien
echo "Voornaam: " . $firstname . " " . $lastname . "<br>";
echo "Leeftijd: " . $age . "<br>";
echo "Mail: " . $mail . "<br>";
echo "Adres: " . $adres . "<br>";
echo "Huisnummer: " . $huisnummer . "<br>";
echo "Woonplaats: " . $woonplaats . "<br>";
echo "Birthdate: " . $birthdate . "<br>";
echo "Telefoon: " . $telefoon . "<br>";
echo "Nationaliteit: " . $nationaliteit . "<br>";
echo "Postcode: " . $postcode . "<br>";
echo "Is aanwezig: ";
//Dit check of het persoon aanwezig is, zo ja, dan komt er ja
echo !$isAanwezig == true ? 'Nee' : 'Ja' . "<br>";

echo "<br>";

?>
</div>
</body>
</html>
<?php

//Hier haalt hij de tijd op
date_default_timezone_set("Europe/Amsterdam");
$time = date("H:i:s");

//Hier word er gekeken hoe laat het is
if ($time < 140000) {
    echo '<body style="background-color:orange">';
} else {
     echo '<body style="background-color:red">';
}


// Developer Tim Bakker
