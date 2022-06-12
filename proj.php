<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$txt ="hello world";
$sh="k";
$_vare =1.2;
$bw =3;
$bww= 34;
// $txt=$sh;

$cars = array("Volvo", "BMW", "Toyota");
$animals = array("cat", "lion", "dog");

$num = 82329738.33232;
$t = (int)$num;
define("saa","djslkj");


echo $_vare."".$txt. "" .$sh;
echo $_vare."".$txt. "" .$sh . $txt;
echo str_word_count($txt);
echo strlen($txt);
echo strrev($txt);
echo strpos($txt, "o");
echo str_replace("hello", "akram", $txt);

echo "</br>".saa;
echo $t;



$cars[count($cars)-1] ="akk";
for ($x = 0; $x <= count($cars)-1; $x++) {
    echo  "</br>". $cars[$x];
};



echo rand(4,10);
$sw= 9.3;
echo abs($sw);
echo max(round(2,5), round(3.5), round(1));
echo $bw .=$bww;


function rep_arr($arr1, $arr2) {

    for($x=0; $x<=count($arr1)-1; $x++){
       echo $arr1[$x]= $arr2[$x];

    };
};

rep_arr($cars, $animals);
echo $animals[1];


// this is recursion function
$nu = 10;
function recur($num){
   
    if($num >= 0){
        echo "</br>".$num. "+". $num. "=". $num + $num;
        recur($num-1);
    }

};

recur($nu);





?>

</body>
</html>