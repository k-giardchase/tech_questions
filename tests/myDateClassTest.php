<?php

    require_once __DIR__.'/../src/myDateClass.php';

    class myDateClassTest extends PHPUnit_Framework_TestCase
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

        function test_prettyDateCase0()
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

        function test_prettyDateCase1()
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

        function test_prettyDateCase2()
        {
            //Arrange
            $MM = 10;
            $DD = 29;
            $YYYY = 1992;
            $test_date = new myDateClass($MM, $DD, $YYYY);

            //Act
            $result = $test_date->prettyDate(2);

            //Assert
            $this->assertEquals("October 29, 1992", $result);
        }

        function test_prettyDateCase3()
        {
            //Arrange
            $MM = 10;
            $DD = 29;
            $YYYY = 1992;
            $test_date = new myDateClass($MM, $DD, $YYYY);

            //Act
            $result = $test_date->prettyDate(3);

            //Assert
            $this->assertEquals("The 29th day of the month of October, in the year 1992", $result);
        }

        function test_prettyDateCase4()
        {
            //Arrange
            $MM = 10;
            $DD = 29;
            $YYYY = 1992;
            $test_date = new myDateClass($MM, $DD, $YYYY);

            //Act
            $result = $test_date->prettyDate(100);

            //Assert
            $this->assertEquals("Sorry, that's an invalid selection. Please choose a number ranging from 0 to 3.", $result);
        }

        function test_today()
        {
            //Arrange

            //Act
            $result = today();

            //Assert
            $this->assertEquals("2015-05-15", $result);
        }
    }

?>
