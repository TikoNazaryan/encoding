<?php
    include_once "classes/model.class.php";
    if(isset($_GET['G1']) && $_GET['G1'] == "ajax")
    {
        print_r(json_encode($_POST));
    }
    else
    {
        include_once("model/tool.php");
    }
?>