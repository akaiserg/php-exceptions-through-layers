<?php

namespace exceptions\client;

require_once"vendor/autoload.php";

use exceptions\layer0;
use exceptions\layer1;
use exceptions\layer2;


$o0= new layer0\ClassLayer0();

//  without try catch  an error is thrown  Fatal error: Uncaught exceptions\layer0\exceptionLayer0\ExceptionLayer0
//$result=$o0->layer0(0);

echo "<br>----------LAYER0 OK---------------<br>";
try{
    $result=$o0->layer0(5);
    echo $result;
}catch(\Exception $e){
    echo $e->getMessage();
}
echo "<br>----------LAYER0 EXCEPTION---------------<br>";

try{
    $result=$o0->layer0(0);
    echo $result;
}catch(\Exception $e){
    echo $e->getMessage();
}


$o1= new layer1\ClassLayer1($o0);
echo "<br>-----------LAYER1 OK--------------<br>";
try{
    $result=$o1->layer1(6);
    echo $result;
}catch(\Exception $e){
   echo $e->getMessage();
}


echo "<br>-----------LAYER1 EXCEPTION LAYER0--------------<br>";
try{
    $result=$o1->layer1(0);
    echo $result;
}catch(\Exception $e){
    echo $e->getMessage();
}


echo "<br>-----------LAYER1 EXCEPTION LAYER1--------------<br>";
try{
    $result=$o1->layer1(2);
    echo $result;
}catch(\Exception $e){
    echo $e->getMessage();
}

$o2= new layer2\ClassLayer2($o1);
echo "<br>-----------LAYER2 OK--------------<br>";
try{
    $result=$o2->layer2(15);
    echo $result;
}catch(\Exception $e){
    echo $e->getMessage();
}

echo "<br>-----------LAYER2 EXCEPTION LAYER0--------------<br>";
try{
    $result=$o2->layer2(0);
    echo $result;
}catch(\Exception $e){
    echo $e->getMessage();
}

echo "<br>-----------LAYER2 EXCEPTION LAYER1--------------<br>";
try{
    $result=$o2->layer2(1);
    echo $result;
}catch(\Exception $e){
    echo $e->getMessage();
}
echo "<br>-----------LAYER2 EXCEPTION LAYER2--------------<br>";
try{
    $result=$o2->layer2(6);
    echo $result;
}catch(\Exception $e){
    echo $e->getMessage();
}
