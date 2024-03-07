<?php
//http://localhost/phpapps/sum2.php?num1=10&num2=55
    if(isset($_GET['num1'], $_GET['num2'])){
    $num1= $_GET['num1'];
    $num2= $_GET['num2'];
    settype($num1,"integer");
    settype($num2,"integer");
    echo ( $num1 + $num2);
    }
    else{
        echo "Não foram passados argumentos";
    }
?>