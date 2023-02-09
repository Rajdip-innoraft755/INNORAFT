<?php
    Interface A{
        function a();
    }
    Interface B{
        function b();
    }
    class C implements A,B{
        function a(){
            echo "function a \n";
        }
        function b(){
            echo "function b \n";
        }
    }
    $obj = new C();
    $obj->a();
    $obj->b();
?>