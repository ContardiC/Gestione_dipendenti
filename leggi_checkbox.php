<?php

if(isset($_POST['linguaggi'])){
    $linguaggi=$_POST['linguaggi'];
    foreach ($linguaggi as $linguaggio){
        echo $linguaggio."<br>";
    }
}else{
    echo "Non hai selezionato nulla";
}
