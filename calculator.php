<?php

echo "welke uitvoering wil je doen? (+ of -)\n";
$uitvoering = readline();

echo "wat is het eerste getal?\n";
$getal1 = readline();

echo "wat word het tweede getal?\n";
$getal2 = readline();


if ($uitvoering == "+"){
  $antwoord =  ($getal1+$getal2);

  echo "je antwoord is $antwoord";

}

if ($uitvoering == "-"){
    $antwoord =  ($getal1-$getal2);

    echo "je antwoord is $antwoord";
}

?>