<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Andres_2
 * Date: 3/03/16
 * Time: 15:00
 * To change this template use File | Settings | File Templates.
 */


class Layer0Test extends PHPUnit_Framework_TestCase {

    private $oLayer0;

    /**
     *called before the test functions will be executed
     *this function is defined in PHPUnit_TestCase and overwritten
     *here
     */
    function setUp() {

        $this->oLayer0 = new exceptions\layer0\ClassLayer0();

    }

    /**
     * called after the test functions are executed
    * this function is defined in PHPUnit_TestCase and overwritten
    * here
     */
    function tearDown() {
        // delete your instance
       unset($this->layer0);
    }


    /**
     * @test
     */
    public function testLayer0Instance()
    {
        $this->assertInstanceOf('exceptions\layer0\ClassLayer0',$this->oLayer0,"Correct instance layer0");
    }


    /**
     *  with annotations is used expectedException
     * @test
     */
    public function testLayer0WhenValueIs0ExceptionLayer0()
    {
        $this->setExpectedException('exceptions\layer0\exceptionLayer0\ExceptionLayer0');
        $return=$this->oLayer0->layer0(0);

    }

    /**
     * @test
     */
    public function testLayer0WhenValueIs0Exception()
    {
        $this->setExpectedException('Exception');
        $return=$this->oLayer0->layer0(0);

    }

    /**
     * @test
     */
    public function testLayer0WhenValueIsNegativeException()
    {
        $this->setExpectedException('Exception');
        $return=$this->oLayer0->layer0(-1);

    }

    /**
     * @test
     */
    public function testLayer0WhenValueIsaLetter()
    {
        $this->setExpectedException('Exception');
        $return=$this->oLayer0->layer0("a");

    }

    /**
     * @test
     */
    public function testLayer0WhenValueIsNull()
    {
        $this->setExpectedException('Exception');
        $return=$this->oLayer0->layer0(null);

    }

    /**
     * @test
     */
    public function testLayer0WhenValueIsOne()
    {
        //$this->setExpectedException('Exception');
        $value=1;
        $return=$this->oLayer0->layer0($value);
        $this->assertEquals($return,10+$value," Returns  value plus ten" );

    }

    /**
     * @test
     */
    public function testLayer0WhenValueIsTen()
    {
        //$this->setExpectedException('Exception');
        $value=10;
        $return=$this->oLayer0->layer0($value);
        $this->assertEquals($return,10+$value," Returns  value plus ten" );

    }

}