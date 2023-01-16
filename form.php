<?php

echo "prénom: " . $_POST["firstName"] . "<br>";

$prenom = $_POST["firstName"];

if($prenom == "james"){
    echo "Bond, James Bond";
}else{
    echo "Bonjour $prenom";
}