<?php include "db.php"; ?>
    <?php include "functions.php"; ?>
        <?php        
               
        $query = "SELECT * FROM users ";
        $result = mysqli_query($connection, $query);    
        if(!$result){
              die('Query Failed' . mysqli_error());
        }
          

    


?>
            <?php include "includes/header.php"; ?>
                <div class="container">
                    <div class="col-sm-6"> <pre>
            <?php readRows(); ?>
            </pre> </div>
                    <?php include "includes/footer.php"; ?>