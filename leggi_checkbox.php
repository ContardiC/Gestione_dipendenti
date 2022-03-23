<?php

if(isset($_POST['linguaggi'])){
    $linguaggi=$_POST['linguaggi'];
    foreach ($linguaggi as $linguaggio){
        echo $linguaggio."<br>";
    }
    echo count($linguaggi)."<br>";
    echo sizeof($linguaggi);
    /*
    for($i=0;$i<count($linguaggi);$i++){
        echo $linguaggi[$i]."<br>";
    }
    */

}else{
    echo "Non hai selezionato nulla";
}
