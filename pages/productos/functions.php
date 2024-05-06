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
        $res = $mysqli->query("SELECT Modelo, Imagen_producto FROM malacates UNION SELECT Modelo, Imagen_producto FROM poleas UNION SELECT Modelo, Imagen_producto FROM bombas;");   
        while( $row = $res->fetch_assoc() ){
            $products[] = $row;
        }
        return $products;
    }   


    function getMalacates(){
        $mysqli = connect();
        $res = $mysqli->query("SELECT Modelo, Imagen_producto FROM malacates");
        while( $row = $res->fetch_assoc() ){
            $products[] = $row;
        }
        return $products;
    }


    function getPoleas(){
        $mysqli = connect();    
        $res = $mysqli->query("SELECT Modelo, Imagen_producto FROM poleas");
        while( $row = $res->fetch_assoc() ){
            $products[] = $row;
        }
        return $products;
    }

    function getBombas(){
        $mysqli = connect();
        $res = $mysqli->query("SELECT Modelo, Imagen_producto FROM bombas");
        while( $row = $res->fetch_assoc() ){
            $products[] = $row;
        }
        return $products;
    }


