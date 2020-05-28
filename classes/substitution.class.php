<?php
    class Substitution implements Algorithm
    {
        private $alphabet = array('A' => 'P','B' => 'H','C' => 'Q','D' => 'G','E' => 'I','F' => 'U','G' => 'M','H' => 'E','I' => 'A','J' => 'Y','K' => 'L','L' => 'N','M' => 'O','N' => 'F','O' => 'D','P' => 'X','Q' => 'J','R' => 'K','S' => 'R','T' => 'C','U' => 'V','V' => 'S','W' => 'T','X' => 'Z','Y' => 'W','Z' => 'B', 'a' => 'p', 'b' => 'h', 'c' => 'q', 'd' => 'g', 'e' => 'i', 'f' => 'u', 'g' => 'm', 'h' => 'e', 'i' => 'a', 'j' => 'y', 'k' => 'l', 'l' => 'n', 'm' => 'o', 'n' => 'f', 'o' => 'd', 'p' => 'x', 'q' => 'j', 'r' => 'k', 's' => 'r', 't' => 'c', 'u' => 'v', 'v' => 's', 'w' => 't', 'x' => 'z', 'y' => 'w', 'z' => 'b', 1 => 4, 2 => 8, 3 => 7, 4 => 1, 5 => 9, 6 => 0, 7 => 3, 8 => 2, 9 => 5, 0 => 6);
        
        
        public function encode($text)
        {
            $string_array = str_split($text);
            $encoded_string = "";
            foreach($string_array as $key => $value)
                $encoded_string .= $this -> alphabet[$value];
            
            return $encoded_string;
        }
    }
?>