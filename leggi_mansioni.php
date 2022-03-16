<?php
include 'init/db_connect.php';
$nome=$_POST['nome'];
$cognome=$_POST['cognome'];
$id_mansione=$_POST['mansione'];

$sql="INSERT INTO dipendenti(nome,cognome,id_mansione)
VALUES ('$nome','$cognome',$id_mansione)";

if($conn->query($sql)===TRUE){
    echo "Dipendente inserito correttamente";
}else{
    echo "Errori : ".$conn->error;
}

