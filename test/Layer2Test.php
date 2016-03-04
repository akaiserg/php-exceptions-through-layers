<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Andres_2
 * Date: 3/03/16
 * Time: 15:00
 * To change this template use File | Settings | File Templates.
 */


class Layer2Test extends PHPUnit_Framework_TestCase {


    private $oLayer0;
    private $oLayer1;
    private $oLayer2;

    /**
     *called before the test functions will be executed
     *this function is defined in PHPUnit_TestCase and overwritten
     *here
     */
    function setUp() {

        $this->oLayer0 = new exceptions\layer0\ClassLayer0();
        $this->oLayer1 = new exceptions\layer1\ClassLayer1($this->oLayer0);
        $this->oLayer2 = new exceptions\layer2\ClassLayer2($this->oLayer1);

    }
    /**
     * called after the test functions are executed
     * this function is defined in PHPUnit_TestCase and overwritten
     * here
     */
    function tearDown() {
        // delete your instance
        unset($this->layer0);
        unset($this->layer1);
        unset($this->layer2);
    }


    public function testLayer2Instance()
    {
        $this->assertInstanceOf('exceptions\layer2\ClassLayer2',$this->oLayer2,"Correct instance layer2");
    }


    /**
     *  with annotations is used expectedException
     * @test
     */
    public function testLayer2WhenValueIs0ExceptionLayer0isException()
    {
        $this->setExpectedException('Exception');
        $return=$this->oLayer2->layer2(0);

    }


    /**
     *
     * @test
     */
    public function testLayer2WhenValueIsFourExceptionLayer1isException()
    {
        $this->setExpectedException('Exception');
        $return=$this->oLayer2->layer2(4);

    }


    /**
     *
     * @test
     */
    public function testLayer2WhenValueIsSixExceptionLayer2()
    {
        $this->setExpectedException('exceptions\layer2\exceptionLayer2\ExceptionLayer2');
        $return=$this->oLayer2->layer2(6);

    }

    /**
     *
     * @test
     */
    public function testLayer2WhenValueIsSixException()
    {
        $this->setExpectedException('Exception');
        $return=$this->oLayer2->layer2(6);

    }


    /**
     * @test
     */
    public function testLayer2WhenValueIsEleven()
    {

        $value=11;
        $return=$this->oLayer2->layer2($value);
        $this->assertEquals($return,10+$this->oLayer1->layer1($value)," Returns  the value from the layer1 plus ten" );

    }



}