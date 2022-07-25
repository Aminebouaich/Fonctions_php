<?php



// print(dateferie($tables));
// function dateFerie($tables){
//     $message='';
//     $today = "02-03-15";


// foreach ($tables as $table){
//     if($today == $table){
//         $message= "c'est férié !";
//         return $message;
//     }
//     else {  $message= "c'est pas férié";
        
    
// }

// }
// return $message;
// }

// function isOffDay($date) {
//     $tables =  array('01-01-20','25-07-22','17-04-22', '02-03-15');
//     return in_array($date,$tables);
// }


// print isOffDay("20-07-22");

// exo 2

// function tableferie(){
// $tablesJourFerie = array('01-01-22','17-04-22', '18-04-2022','01-05-22','08-05-22','26-05-22', '06-06-22','14-07-22', '15-08-22','01-11-22','11-11-22','25-12-22');

// return $tablesJourFerie;

// }
// print_r(tableferie());

// exo 3

// function checkNum($numberCheck)
// {$myPattern = '/^          
// [12]                      
// [0-9]{2}[0-1][0-9]        
// (2[AB]|[0-9]{2})      
// [0-9]{3}[0-9]{3}[0-9]{2}  
// $                        
// /x';

// if (preg_match($myPattern,$numberCheck,$match)){
// echo "c'est valide";}
// else {
//     echo "pas valide";
// }
// }
// $MyNumber = "180105313150368";
// print(checkNum($MyNumber));
// exo 4

$csvDepartement = array_map('str_getcsv', file('departement.csv'));
$csvVille = array_map('str_getcsv', file('villes_france.csv'));

$departNum = "93";

print_r(departName($departNum, $csvDepartement));
function departName($departNum, $array){
    foreach ($array as $key => $depart) {
        if ($departNum == $depart[1]) 
        {
            $departFound = $depart[2];
            return $departFound;
        }
    }
    $departFound = "Département introuvable";
    return $departFound;
}




function villesDepart($departNum, $array){
   
    $departVilles = array() ;
    foreach ($array as $key => $ville) {
        if ($departNum == $ville[1]) {
            array_push($departVilles,$ville[5]);
        }
    }
    if (count($departVilles) == 0) {
        return "Département introuvable";
    }
    return $departVilles;
}
// var_dump($csvVille);
var_dump(villesDepart( $departNum, $csvVille));