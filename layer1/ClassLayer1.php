<?php

namespace exceptions\layer1;

use exceptions\layer0;

/**
 * Class ClassLayer1
 * @package exceptions\layer1
 */
class ClassLayer1 {

    /**
     * layer0
     * @var \exceptions\layer0\ClassLayer0
     */
    private $oLayer0;

    /**
     * Constructor
     * @param layer0\ClassLayer0 $oLayer0
     */
    function  __construct(layer0\ClassLayer0 $oLayer0){

        $this->oLayer0=$oLayer0;

    }

    /**
     * Calls the layer0 and to the value returned by it is added ten
     * @param $value
     * @return mixed
     * @throws exceptionLayer1\ExceptionLayer1
     * @throws \Exception|\exceptions\layer0\ExceptionLayer0
     */
    public function layer1($value){

        try{
           // echo "before calling  the ClassLayer0<br>";
            $iReturn=$this->oLayer0->layer0($value);
           // echo "after calling  the ClassLayer0<br>";
            if($iReturn>15){
                return $iReturn+10;
            }else{
                throw new exceptionLayer1\ExceptionLayer1('number '.$value.' too low, layer1',1); // this will be thrown
            }
        }catch(layer0\ExceptionLayer0 $e){
            throw $e; // caugth immediately to throw it to the next layer
        }

    }

}