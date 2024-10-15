<?php
    class Car {
        public $color;
        public $year;
        private $engineStatus = false;
        
        public function __construct($color = "Black", $year = 2024){
            $this->color = $color;
            $this->year = $year;
        }

        public function startEngine() {
            $this->engineStatus = true;
            echo "Engine started!";
        }

        public function stopEngine(){
            $this->engineStatus = false;
        }

        public function getEngineStatus () {
            return $this->engineStatus 
                            ? "Engine is running" 
                            : "Engine is stopped";
        }
    }

?>