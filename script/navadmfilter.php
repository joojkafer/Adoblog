<?php

    if($_SESSION){
        if($_SESSION['tipo'] == "ADMIN"){
            $url = "#";
        }else{
            $url = "ong/ongprofile.php";
        }
    }else{
        
    }