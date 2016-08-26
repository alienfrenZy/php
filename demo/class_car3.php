<?php

class Car {
    
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
    
    
    function MoveWheels(){
        
        $this->wheels = 10;
        
    } 
    
    function CreateDoors(){
        
        $this->doors = 6;
        
    }
    
}

$bmw = new Car();
$truck = new Car();
echo $bmw->wheels . "<br>";

echo $truck->wheels = 10 . "<br>";
$truck->CreateDoors();
echo $truck->doors . "<br>";

class classroom {
    
    var $teachers = 1;
    var $students = 20;
    var $chairs = 21;
    var $desks = 21;
    
    function teachstudents() {
        $this->students = 10;
    }
        
}

$firstclass = new classroom();
echo $firstclass->chairs;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    
    
    
</body>
</html>