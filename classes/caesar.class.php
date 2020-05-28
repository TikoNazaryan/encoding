<?php
    class Caesar implements Algorithm
    {
        private $key_for_alphabet;
        private $key_for_numbers;
        private $alphabet = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');

        public function __construct($key = 5)
        {
            if($key < 0)
                $key = $key * -1;
            
            $this -> key_for_alphabet = $key;
            $this -> key_for_numbers = $key;

            if($key > count($this -> alphabet))
                $this -> key_for_alphabet = $key - floor($key/count($this -> alphabet)) * count($this -> alphabet);
                
            if($key > 10)
                $this -> key_for_numbers = $key - floor($key/10) * 10;
        }

        private function getBackNumber($number)
        {
            $new_num = $number - $this -> key_for_numbers;
            if($new_num < 0)
                $new_num = 10 + $new_num;
            
            return $new_num;
        }

        private function getBackSymbol($symbol)
        {
            $index = array_search($symbol, $this -> alphabet);
            $new_index = $index - $this -> key_for_alphabet;

            if($new_index < 0)
                return $this -> alphabet[count($this -> alphabet) + $new_index];
            else
                return $this -> alphabet[$new_index];
        }

        public function encode($text)
        {
            $string_array = str_split($text);
            $encoded_string = "";

            foreach($string_array as $key => $value)
                if(is_numeric($value))
                    $encoded_string .= $this -> getBackNumber($value);
                else
                    $encoded_string .= $this -> getBackSymbol($value);

            return $encoded_string;
        }
    }
?>