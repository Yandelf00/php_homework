<?php
//Déterminer le numéro de version de PHP, le nom du système
//d'exploitation de votre serveur ainsi que la langue du navigateur
//du poste client

echo "Version de PHP : ",PHP_VERSION, "<br />";
echo "Système d'exploitation du serveur : ",PHP_OS, "<br />";
echo "Langue du navigateur client :
",$_SERVER["HTTP_ACCEPT_LANGUAGE"], "<br />";
