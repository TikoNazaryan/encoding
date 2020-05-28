<?php
    class Validation
    {
        public $algorithm_ids = array(0, 1, 2);
        public function only_text_or_int($text)
        {
            if (preg_match('/[^A-Za-z0-9]/', $text))
            {
                global $Resp;
                $Resp -> out(0, "Text Should be only english characters or 0-9 numbers");
            }
        }

        public function algorithm_ids($id)
        {
            if (!in_array($id, $this -> algorithm_ids))
            {
                global $Resp;
                $Resp -> out(1, "Algorithm doesn't exists");
            }
        }
    }
?>