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

        function test_setMM()
        {
            //Arrange
            $mm = 10;
            $dd = 29;
            $yyyy = 1992;
            $test_date = new myDateClass($mm, $dd, $yyyy);

            //Act
            $test_date->setMM(11);
            $result = $test_date->getMM();

            //Assert
            $this->assertEquals(11, $result);
        }

        function test_getDD()
        {
            //Arrange
            $mm = 10;
            $dd = 29;
            $yyyy = 1992;
            $test_date = new myDateClass($mm, $dd, $yyyy);

            //Act
            $result = $test_date->getDD();

            //Assert
            $this->assertEquals(29, $result);
        }

        function test_setDD()
        {
            //Arrange
            $mm = 10;
            $dd = 29;
            $yyyy = 1992;
            $test_date = new myDateClass($mm, $dd, $yyyy);

            //Act
            $test_date->setDD(30);
            $result = $test_date->getDD();

            //Assert
            $this->assertEquals(30, $result);
        }

        function test_getYYYY()
        {
            //Arrange
            $mm = 10;
            $dd = 29;
            $yyyy = 1992;
            $test_date = new myDateClass($mm, $dd, $yyyy);

            //Act
            $result = $test_date->getYYYY();

            //Assert
            $this->assertEquals(1992, $result);
        }
    }

?>
