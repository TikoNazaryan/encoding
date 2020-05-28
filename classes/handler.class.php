<?php
    class Handler
    {
        private $Algorithm;
        public function __construct(Algorithm $Algorithm)
        {
            $this -> Algorithm = $Algorithm;
        }

        public function encode($text)
        {
            return $this -> Algorithm -> encode($text);
        }
    }
?>