<html>
<HEAD><title>Result
    </title></HEAD>
<body>
     <a href="result%20home.php">result</a>
    
    <div align="center">
    <form method="POST" action="result.php">
        Input marks  <input type="number" name="m1">
        
        <br>
        <br>
        <input type="submit" name="btn" value="result">
        
    </form>
       
    <?php
    if (isset($_POST[('btn')])){
        $x=$_POST['m1'];
    }
    
    if($x >= 75) {
        echo " Result is: A";
    }
    elseif($x >= 65){
        echo "Result is: B";
    }
    elseif($x >= 55){
        echo "Result is: C";
    }
    else{
        echo "Result is: Fail";
    }
    
    ?>
    
    </div> 
    
    
    </body>
</html>