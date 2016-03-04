<?php

namespace exceptions\layer2;
use exceptions\layer1;

/**
 * Class ClassLayer2
 * @package exceptions\layer2
 */
class ClassLayer2 {

    /**
     * layer1
     * @var \exceptions\layer1\ClassLayer1
     */
    private $oLayer1;

    /**
     * Constructor
     * @param layer1\ClassLayer1 $oLayer1
     */
    function  __construct(layer1\ClassLayer1 $oLayer1){

        $this->oLayer1=$oLayer1;

    }

    /**
     * Calls the layer1 and to the value returned by it is added ten
     * @param $value
     * @return mixed
     * @throws exceptionLayer2\ExceptionLayer2
     * @throws \Exception|\exceptions\layer1\ExceptionLayer1
     */
    public function layer2($value){

        try{
            // echo "before calling  the ClassLayer0<br>";
            $iReturn=$this->oLayer1->layer1($value);
            // echo "after calling  the ClassLayer0<br>";
            if($iReturn>30){
                return $iReturn+10;
            }else{
                throw new exceptionLayer2\ExceptionLayer2('number '.$value.' too low, layer2',2); // this will be thrown
            }
        }catch(layer1\ExceptionLayer1 $e){
            throw $e;
        }


    }

}