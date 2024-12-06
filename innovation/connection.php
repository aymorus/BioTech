<?php

    $database= new mysqli("localhost","root","","BioTech");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>