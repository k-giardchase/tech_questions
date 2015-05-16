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

            if($num == 0) {
                return $new_date = date('Y-m-d', strtotime($original_date));
            } else if($num == 1) {
                return $new_date = date('m-d-Y', strtotime($original_date));
            } else if($num == 2) {
                return $new_date = date('F d, Y', strtotime($original_date));
            } else if($num == 3) {
                return $new_date = date('\T\h\e jS \d\a\y\ \o\f \t\h\e\ \m\o\n\t\h\ \o\f\ F, \i\n\ \t\h\e \y\e\a\r\ Y', strtotime($original_date));
            } else {
                return "Sorry, that's an invalid selection. Please choose a number ranging from 0 to 3.";
            }

        }

        function today()
        {

        }

    }


?>
