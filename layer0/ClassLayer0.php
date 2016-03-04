<?php

namespace exceptions\layer0;


use Exception;
use exceptions\layer0\exceptionLayer0;

/**
 * Class ClassLayer0
 * @package exceptions\layer0
 */
class ClassLayer0 {


    /**
     * Adds 10 to the value passed
     * @param $iNumber
     * @return mixed
     * @throws exceptionLayer0\ExceptionLayer0
     */
    public function layer0($iNumber)
    {

        if($iNumber>0){
           return $iNumber+10;
        }else{
          //  throw new Exception('number too low layer0'); // this will be thrown
            throw new exceptionLayer0\ExceptionLayer0("number ".$iNumber." too low, layer0",0); // this will be thrown
        }

    }

}