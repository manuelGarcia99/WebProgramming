
    
<?php
    for($u= 1 ,$d=0 ; ($u<=9 && $d==0) || ($d==1 && $u==0);$u++){
    
    $mystring = sprintf("Classe%u%u",$d,$u);
    echo  $mystring;
    echo "</br>";
    if($u == 9){
        $u = -1;
        $d +=1;
    }
    }
?>

