<html><body>




    <form method="POST">
        <h2>Please input your first number:</h2>
        
       <input type="number" name="num1" id="n1">
       <h2>Please input your second number:</h2>
       <input type="number" name="num2" id="n2">
        
        <input type="submit" value="Submit Numbers">

    </form>
    
    <?php
    if(isset($_POST['num1'],$_POST['num2'])){
        echo ($_POST['num1'] + $_POST['num2']);
    }
    else{
     echo "Submeta os numeros";
    }
    ?>
    
</body></html>