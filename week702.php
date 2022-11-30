<?php
    class person{
        public $name = "Eion Mask", $age=50;//property

        function __construct($n, $a)
        {
            $this->name = $n;
            $this->age = $a;
        }
        function show(){
            print($this->name . $this->age);

        }
    }
    $obj1 = new Person("Mark Zuckerberg",45);
    // $obj1->name = "Mark Zuckerberg<br />";
    // $obj1->age = 45;
    $obj1->show();
?>