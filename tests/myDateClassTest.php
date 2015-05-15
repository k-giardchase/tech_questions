<?php

    require_once __DIR__.'/../src/myDateClass.php';

    class ComitteeTest extends PHPUnit_Framework_TestCase
    {
        function test_getMM()
        {
            //Arrange
            $MM = 10;
            $DD = 29;
            $YYYY = 1992;
            $test_date = new myDateClass($MM, $DD, $YYYY);

            //Act
            $result = $test_date->getMM();

            //Assert
            $this->assertEquals(10, $result);
        }

        function test_setMM()
        {
            //Arrange
            $MM = 10;
            $DD = 29;
            $YYYY = 1992;
            $test_date = new myDateClass($MM, $DD, $YYYY);

            //Act
            $test_date->setMM(11);
            $result = $test_date->getMM();

            //Assert
            $this->assertEquals(11, $result);
        }

        function test_getDD()
        {
            //Arrange
            $MM = 10;
            $DD = 29;
            $YYYY = 1992;
            $test_date = new myDateClass($MM, $DD, $YYYY);

            //Act
            $result = $test_date->getDD();

            //Assert
            $this->assertEquals(29, $result);
        }

        function test_setDD()
        {
            //Arrange
            $MM = 10;
            $DD = 29;
            $YYYY = 1992;
            $test_date = new myDateClass($MM, $DD, $YYYY);

            //Act
            $test_date->setDD(30);
            $result = $test_date->getDD();

            //Assert
            $this->assertEquals(30, $result);
        }

        function test_getYYYY()
        {
            //Arrange
            $MM = 10;
            $DD = 29;
            $YYYY = 1992;
            $test_date = new myDateClass($MM, $DD, $YYYY);

            //Act
            $result = $test_date->getYYYY();

            //Assert
            $this->assertEquals(1992, $result);
        }

        function test_setYYYY()
        {
            //Arrange
            $MM = 10;
            $DD = 29;
            $YYYY = 1992;
            $test_date = new myDateClass($MM, $DD, $YYYY);

            //Act
            $test_date->setYYYY(1991);
            $result = $test_date->getYYYY();

            //Assert
            $this->assertEquals(1991, $result);
        }

        function test_case0()
        {
            //Arrange
            $MM = 10;
            $DD = 29;
            $YYYY = 1992;
            $test_date = new myDateClass($MM, $DD, $YYYY);

            //Act
            $result = $test_date->prettyDate(0);

            //Assert
            $this->assertEquals("1992-10-29", $result);
        }

        function test_case1()
        {
            //Arrange
            $MM = 10;
            $DD = 29;
            $YYYY = 1992;
            $test_date = new myDateClass($MM, $DD, $YYYY);

            //Act
            $result = $test_date->prettyDate(1);

            //Assert
            $this->assertEquals("10-29-1992", $result);
        }
    }

?>
