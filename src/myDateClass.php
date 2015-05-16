<?php

    class myDateClass {

        public $MM;
        public $DD;
        public $YYYY;

        function __construct($MM, $DD, $YYYY) {
            $this->MM = $MM;
            $this->DD = $DD;
            $this->YYYY = $YYYY;
        }

        function getMM()
        {
            return $this->MM;
        }

        function setMM($new_MM)
        {
            $this->MM = (int) $new_MM;
        }

        function getDD()
        {
            return $this->DD;
        }

        function setDD($new_DD)
        {
            $this->DD = (int) $new_DD;
        }

        function getYYYY()
        {
            return $this->YYYY;
        }

        function setYYYY($new_YYYY)
        {
            $this->YYYY = (int) $new_YYYY;
        }

        function prettyDate($num)
        {
            $MM = $this->getMM();
            $DD = $this->getDD();
            $YYYY = $this->getYYYY();
            $original_date = $YYYY . '-' . $MM . '-' . $DD;
            date_default_timezone_set('America/Los_Angeles');

            if($num == 0) {
                return $new_date = date('Y-m-d', strtotime($original_date));
            } else if($num == 1) {
                return $new_date = date('m/d/Y', strtotime($original_date));
            } else if($num == 2) {
                return $new_date = date('F j, Y', strtotime($original_date));
            } else if($num == 3) {
                return $new_date = date('\T\h\e jS \d\a\y\ \o\f \t\h\e\ \m\o\n\t\h\ \o\f\ F, \i\n\ \t\h\e \y\e\a\r\ Y', strtotime($original_date));
            } else {
                return "Sorry, that's an invalid selection. Please choose a number ranging from 0 to 3.";
            }

        }

        static function today()
        {
            return (date('Y-m-d'));

        }

    }

    $test_case_one = new myDateClass(01, 01, 2001);
    $test_case_two = new myDateClass(02, 02, 2002);
    $test_case_three = new myDateClass(03, 03, 2003);
    $test_case_four = new myDateClass(04, 04, 2004);
    $test_case_five = new myDateClass(12, 05, 2015);

?>
<html>
<head>
    <title>Pretty Date</title>
</head>
<body>
    <h2>Test Case One - January 1, 2001</h2>
    <?php
        echo "<p><strong>YYYY-MM-DD:</strong> " . $test_case_one->prettyDate(0) . "</p>";
        echo "<p><strong>MM/DD/YYYY:</strong> " . $test_case_one->prettyDate(1) . "</p>";
        echo "<p><strong>Month day, YYYY:</strong> " . $test_case_one->prettyDate(2) . "</p>";
        echo "<p><strong>The Xst day of the month of Month, in the year YYYY:</strong> " . $test_case_one->prettyDate(3) . "</p>";
        echo "<p><strong>Error message:</strong> " . $test_case_one->prettyDate(50) . "</p><br><br>";
    ?>
    <h2>Test Case One - January 1, 2001</h2>
    <?php
        echo "<p><strong>YYYY-MM-DD:</strong> " . $test_case_two->prettyDate(0) . "</p>";
        echo "<p><strong>MM/DD/YYYY:</strong> " . $test_case_two->prettyDate(1) . "</p>";
        echo "<p><strong>Month day, YYYY:</strong> " . $test_case_two->prettyDate(2) . "</p>";
        echo "<p><strong>The Xst day of the month of Month, in the year YYYY:</strong> " . $test_case_two->prettyDate(3) . "</p>";
        echo "<p><strong>Error message:</strong> " . $test_case_two->prettyDate(50) . "</p><br><br><br>";
    ?>
    <h2>Test Case One - January 1, 2001</h2>
    <?php
        echo "<p><strong>YYYY-MM-DD:</strong> " . $test_case_three->prettyDate(0) . "</p>";
        echo "<p><strong>MM/DD/YYYY:</strong> " . $test_case_three->prettyDate(1) . "</p>";
        echo "<p><strong>Month day, YYYY:</strong> " . $test_case_three->prettyDate(2) . "</p>";
        echo "<p><strong>The Xst day of the month of Month, in the year YYYY:</strong> " . $test_case_three->prettyDate(3) . "</p>";
        echo "<p><strong>Error message:</strong> " . $test_case_three->prettyDate(50) . "</p><br><br><br>";
    ?>
    <h2>Test Case One - January 1, 2001</h2>
    <?php
        echo "<p><strong>YYYY-MM-DD:</strong> " . $test_case_four->prettyDate(0) . "</p>";
        echo "<p><strong>MM/DD/YYYY:</strong> " . $test_case_four->prettyDate(1) . "</p>";
        echo "<p><strong>Month day, YYYY:</strong> " . $test_case_four->prettyDate(2) . "</p>";
        echo "<p><strong>The Xst day of the month of Month, in the year YYYY:</strong> " . $test_case_four->prettyDate(3) . "</p>";
        echo "<p><strong>Error message:</strong> " . $test_case_four->prettyDate(50) . "</p><br><br><br>";
    ?>
    <h2>Test Case One - January 1, 2001</h2>
    <?php
        echo "<p><strong>YYYY-MM-DD:</strong> " . $test_case_five->prettyDate(0) . "</p>";
        echo "<p><strong>MM/DD/YYYY:</strong> " . $test_case_five->prettyDate(1) . "</p>";
        echo "<p><strong>Month day, YYYY:</strong> " . $test_case_five->prettyDate(2) . "</p>";
        echo "<p><strong>The Xst day of the month of Month, in the year YYYY:</strong> " . $test_case_five->prettyDate(3) . "</p>";
        echo "<p><strong>Error message:</strong> " . $test_case_five->prettyDate(50) . "</p><br><br><br>";
    ?>
    <h2>Today</h2>
    <?php
        echo "<p><strong>YYYY-MM-DD</strong> " . myDateClass::today() . "</p>";
    ?>
</body>
</html>
