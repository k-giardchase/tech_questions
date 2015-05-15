<?php

    require_once __DIR__.'/../src/myDateClass.php';

    class ComitteeTest extends PHPUnit_Framework_TestCase
    {
        function test_getMM()
        {
            //Arrange
            $mm = 10;
            $dd = 29;
            $yyyy = 1992;
            $test_date = new myDateClass($mm, $dd, $yyyy);

            //Act
            $result = $test_date->getMM();

            //Assert
            $this->assertEquals(10, $result);
        }
    }

?>
