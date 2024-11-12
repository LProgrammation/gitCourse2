<?php 
if (isset($_GET['test']) && $_GET['test2']){

    if($_GET["test"] != null){
        print($_GET['test']) ; 
        
    }
    
    if ($_GET['test2'] != null){
        print($_GET['test2']) ;
    }
}