<?php

    class myDateClass {

        public $mm;
        public $dd;
        public $yyyy;

        function __construct($mm, $dd, $yyyy) {
            $this->mm = $mm;
            $this->dd = $dd;
            $this->yyyy = $yyyy;
        }

        function getMM()
        {
            return $this->mm;
        }

        function setMM($new_mm)
        {
            $this->mm = (int) $new_mm;
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
