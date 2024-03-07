<?php

    function coinToss(){
       return (rand()% 2 == 1) ? 'cara' : 'coroa'; 
    }

    echo sprintf("Lançou moeda ao ar, o resultado foi: %s",coinToss());

?>