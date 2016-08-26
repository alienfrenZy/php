<?php

class Car {
    
    function MoveWheels(){
        
        echo "Wheels move";
        
    }
    
}

if(method_exists("Car", "MoveWheels")) {
    
    echo "The Method Exists";

} else {
    
    echo "no it does not";
    
}

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