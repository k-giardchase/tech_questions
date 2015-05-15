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

        // function prettyDate($num)
        // {
        //
        //     if($num == 0) {
        //
        //     }
        //
        //     if($num == 1) {
        //
        //     }
        //
        //     if($num == 2) {
        //
        //     }
        //
        //     if($num == 3) {
        //
        //     }
        //
        // }
        //
        // function today()
        // {
        //
        // }

    }


?>
