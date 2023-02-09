<?php
    abstract class Parentclass{
        abstract function fun();
    }

    class Childclass extends Parentclass{
        function fun(){
            
            echo "in child class. \n";
        }
        // function __construct(){
        //     parent :: fun();
        // }
        
    }

    $obj = new Childclass();
    $obj->fun();
    
?>