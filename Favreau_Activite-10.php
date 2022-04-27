<?php

function verifierMotDePasse($motDePasse) {
    $caracteres = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z",0,1,2,3,4,5,6,7,8,9];
    $motDePasse = trim($motDePasse);
    for ($i=0; $i < count($caracteres); $i++) {
        for ($j=0; $j < count($caracteres); $j++){
            for ($k=0; $k < count($caracteres); $k++){
                $toutesPossibilites1 = $caracteres[$i].$caracteres[$j].$caracteres[$k];
                if ($toutesPossibilites1 === $motDePasse) {                   
                    return true;
                }
                for ($m=0; $m < count($caracteres); $m++){   
                    $toutesPossibilites2 = $caracteres[$i].$caracteres[$j].$caracteres[$k].$caracteres[$m];      
                    if ($toutesPossibilites2 === $motDePasse) {                        
                        return true;
                    }      
                    for ($n=0; $n < count($caracteres); $n++){                 
                        $toutesPossibilites3 = $caracteres[$i].$caracteres[$j].$caracteres[$k].$caracteres[$m].$caracteres[$n];
                        if ($toutesPossibilites3 === $motDePasse) {                            
                            return true;
                        }
                    }
                }
            }
        }
    }    
}

$motDePasse1 = "hb1";
$motDePasse2 = "auto";
$motDePasse3 = "a2c3x";

$start_time = microtime(true);
verifierMotDePasse($motDePasse1);
$end_time = microtime(true); 
$execution_times = ($end_time - $start_time);
echo "Mot de passe : ". $motDePasse1. " trouvé en ". round($execution_times, 2). " secondes". "<br>";

$start_time = microtime(true);
verifierMotDePasse($motDePasse2);
$end_time = microtime(true); 
$execution_times = ($end_time - $start_time);
echo "Mot de passe : ". $motDePasse2. " trouvé en ". round($execution_times, 2). " secondes". "<br>";

$start_time = microtime(true);
verifierMotDePasse($motDePasse3);
$end_time = microtime(true); 
$execution_times = ($end_time - $start_time);
echo "Mot de passe : ". $motDePasse3. " trouvé en ". round($execution_times, 2). " secondes". "<br>";



