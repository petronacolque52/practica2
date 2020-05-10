<?php

$name = "katy";
$age  = 26;
$date = "16/11/1993";
$year = "2020";

echo "Name: " . $name . "\nAge: " . $age . "\nDate: " . $date . "\nYear: " . $year; 
echo "\n-----------\n";

$array = [$name, $age, $date, $year, 4.2];

print_r ($array);


$a = ["num10" => $name, "num25" => $age, "num30" => $date, "num45" =>$year,];

print_r ($a);
print_r ($a["num30"]);

if ($age >= 26 ) {
   echo " Puedes ir de  viajes."; 
} else {
    echo " no estas autorizado para realizar viajes.";
}

echo "\n----------\n";


for($i = 1; $i <= 5; $i++){
    
    $cuadrado = $i*$i;
    
    echo "El cuadrado de " . $i ." es ". $cuadrado;
    
    if($cuadrado%2 == 0){
        echo "  y es PAR";
        
    }else{
        echo "  y ES IMPAR";
    }
    
    echo "<br/>";
}
foreach ($array as $value) {
   echo "\n" . $value;
}

echo "\n-------\n";

foreach ($a as $value) {
   echo "\n" . $value;
}
?>
