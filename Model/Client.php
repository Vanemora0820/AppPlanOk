<?php
    class Client{
        private $rut;


        public function __construct( $rut) {
            $this->rut = $rut;
           
        }
    
        public function getRut() {
            return $this->rut;
        }


    }
?>