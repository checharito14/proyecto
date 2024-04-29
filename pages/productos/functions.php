<?php
    function connect(){
        $mysqli = new mysqli("localhost","root","v10203040D:","paginaweb","3306"); #Si note jala borra el puerto "3306"
        if ($mysqli->connect_errno !=0) {
            return $mysqli->connect_error;
        }else{
            return $mysqli;
        }
    }

    function getAllProducts(){
        $mysqli = connect();
        $res = $mysqli->query("SELECT Modelo FROM malacates UNION SELECT Modelo FROM poleas UNION SELECT Modelo FROM bombas");   
        while( $row = $res->fetch_assoc() ){
            $products[] = $row;
        }
        return $products;
    }   


    function getMalacates(){
        $mysqli = connect();
        $res = $mysqli->query("SELECT Modelo FROM malacates");
        while( $row = $res->fetch_assoc() ){
            $products[] = $row;
        }
        return $products;
    }


    function getPoleas(){
        $mysqli = connect();    
        $res = $mysqli->query("SELECT Modelo FROM poleas");
        while( $row = $res->fetch_assoc() ){
            $products[] = $row;
        }
        return $products;
    }

    function getBombas(){
        $mysqli = connect();
        $res = $mysqli->query("SELECT Modelo FROM bombas");
        while( $row = $res->fetch_assoc() ){
            $products[] = $row;
        }
        return $products;
    }


