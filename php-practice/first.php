
<?php
    class cars{
        public $name;
        public $price;

        function __construct($name,$price){
            $this->name = $name;
            $this->price =$price;
        }
        function getter(){
            echo "car name is : $this->name" ."\n";
            echo "car's price is : $this->price";
        }
    }

    $car1 = new cars("bmw",100000);
    $car1->getter();
?>    

