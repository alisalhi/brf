<?php
 

function x($nmbr1,$nmbr2){
    if($nmbr1>$nmbr2){
    return " Le premier nombre est plus grand ";
}
     else if($nmbr1<$nmbr2){
        return " Le premier nombre est plus petit ";
    }
        else{
            return " Les deux nombres sont identiques";
        }
}
 echo x("25","25");

?>
   
    
   