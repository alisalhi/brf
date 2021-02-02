<?php
 

function x($genre ,$age){
    while($genre=="homme"){
        if($age<18){
            return "Vous êtes un homme et vous êtes mineur";
        }
        else{
            return "Vous êtes un homme et vous êtes majeur";
        }
    }
    while($genre=="femme"){
        if($age<18){
            return "Vous êtes un femme et vous êtes mineur";
        }
        else{
            return "Vous êtes un homme et vous êtes majeur";
        }
    }
    
}
 echo x("homme","27");

?>