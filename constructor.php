<?php
    include_once "classes/response.class.php";
    include_once "classes/validation.class.php";
    $Resp = new Response();
    $Validate = new Validation();

    if(isset($_GET['G1']) && $_GET['G1'] == "ajax")
    {
        include_once("classes/algorithm.interface.php");
        include_once("classes/handler.class.php");
        
        $text = $_POST["text"];
        $algorithm_id = $_POST["algorithm"];
        
        $Validate -> only_text_or_int($text);
        $Validate -> algorithm_ids($algorithm_id);
        
        if($algorithm_id == 2)
        {
            
            return;
        }

        switch($algorithm_id)
        {
            case 0:
                include_once("classes/caesar.class.php");
                $Algorithm = new Caesar();
            break;
            case 1:
                include_once("classes/substitution.class.php");
                $Algorithm = new Substitution();
            break;
        }
        
        $Handler = new Handler($Algorithm);
        $encoded_text = $Handler -> encode($text);
        $Resp -> out(200, $encoded_text);
    }
    else
    {
        $Resp -> model();
    }
?>