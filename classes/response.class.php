<?php
    class Response
    {
        public function out($status = 0, $msg = "Something Went Wrong")
        {
            exit(json_encode(array("status" => $status, "msg" => $msg))); 
        }

        public function model()
        {
            include_once("model/tool.php");
        }
    }
?>