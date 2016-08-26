<?php

class Car {
    
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
    
    //construct executes when creating new instance of class. 
    function __construct(){
        
       echo $this->wheels = 10;
        
    } 
}
 $bmw = new Car();
 $truck = new Car();
 $semi = new Car();

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