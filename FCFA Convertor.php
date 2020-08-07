<?php

debut:
$solde=0.00; $choix=0;

$solde=readline("donnez votre solde en FCFA :");

while($solde <= 0)
{
  $solde=readline("donnez votre solde en FCFA :");
}

$veriter=($solde > 0)? "\nVous avez indiquer $solde FCFA !\n\n" : "\nErreur montant !"; echo $veriter;

echo "------   [1]- Convertir en euro     ----\n";
echo "------   [2]- Convertir en dirham   ----";
echo "\n\n";

$choix=readline("Votre option:");

while($choix < 1 OR $choix > 2)
{
echo "------   [1]- Convertir en euro     ----\n";
echo "------   [2]- Convertir en dirham   ----";
echo "\n\n";

  echo "Vous devez choisir entre [1] ou [2]\n";
  $choix=readline("Votre option:");

}

switch($choix)
{

  case 1: $resultat1=$solde/650;
          echo "\n #################>>>>> $solde FCFA en euro =$resultat1 \n\n"; break;


  case 2: $resultat2=($solde/650) * 10;
          echo "\n #################>>>>> $solde FCFA en Dirham =$resultat2 \n\n"; break;

default: echo "\n Error Program !"; break;

}

$conclusion=0;

echo "[0]- pour quitter\n[1]- pour continuer\n";

$conclusion=readline("Votre option:");


while($conclusion < 0 OR $conclusion > 1)
{
echo "[0]- pour quitter\n[1]- pour continuer\n";

$conclusion=readline("Votre option:");
}

if($conclusion == 1)
{
  goto debut;
}else
{
  echo "\n Bye !";
}


?>