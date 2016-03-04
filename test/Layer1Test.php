<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Andres_2
 * Date: 3/03/16
 * Time: 15:00
 * To change this template use File | Settings | File Templates.
 */


class Layer1Test extends PHPUnit_Framework_TestCase {


    private $oLayer0;
    private $oLayer1;

    /**
     *called before the test functions will be executed
     *this function is defined in PHPUnit_TestCase and overwritten
     *here
     */
    function setUp() {

        $this->oLayer0 = new exceptions\layer0\ClassLayer0();
        $this->oLayer1 = new exceptions\layer1\ClassLayer1($this->oLayer0);

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
    }


    public function testLayer1Instance()
    {
        $this->assertInstanceOf('exceptions\layer1\ClassLayer1',$this->oLayer1,"Correct instance layer1");
    }


    /**
     *  with annotations is used expectedException
     * @test
     */
    public function testLayer1WhenValueIs0ExceptionLayer0isException()
    {
        $this->setExpectedException('Exception');
        $return=$this->oLayer1->layer1(0);

    }


    /**
     *
     * @test
     */
    public function testLayer1WhenValueIsTwoExceptionLayer1()
    {
        $this->setExpectedException('exceptions\layer1\exceptionLayer1\ExceptionLayer1');
        $return=$this->oLayer1->layer1(2);

    }

    /**
     *
     * @test
     */
    public function testLayer1WhenValueIsTwoException()
    {
        $this->setExpectedException('Exception');
        $return=$this->oLayer1->layer1(2);

    }


    /**
     *
     * @test
     */
    public function testLayer1WhenValueIsFiveException()
    {
        $this->setExpectedException('Exception');
        $return=$this->oLayer1->layer1(5);

    }

    /**
     * @test
     */
    public function testLayer1WhenValueIsSix()
    {

        $value=6;
        $return=$this->oLayer1->layer1($value);
        $this->assertEquals($return,10+$this->oLayer0->layer0($value)," Returns  the value from the layer0 plus ten" );

    }


}