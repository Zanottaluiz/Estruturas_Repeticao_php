<?php

//foreach

$nomes=["João","Maria","Pedro","Zé"];
foreach($nomes as $i =>$n){
    echo "<p> O indice é: " . $i . " e o nome é: " . $n . "</p>";
}



//While

$k=10;
while(false){
    $k++;
}
echo $k . "<br>";



//  DO/WHILE
$k=0;
do{
    $k+=2;
    echo "<p>" . $k . "</p>";
}while($k<256);
echo $k;



// Um exemplo de FOR
for($k=0;$k<10;$k++){
    echo $k . "<br>";
}



//Outro exemplo de FOR
$num1=3;
$num2=4;
$resultado=0;
for($i=0; $i < $num2; $i++){
    $resultado=$resultado + $num1;    
}
echo "O resultado da multiplicação é:" . $resultado;
