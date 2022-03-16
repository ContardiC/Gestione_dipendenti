<?php
include 'init/db_connect.php';

$sql ="SELECT id, nome FROM mansioni";

$res=$conn->query($sql);
echo "<FORM action='leggi_mansioni.php' method='post'>";
        echo "<INPUT type='text' name='nome' placeholder='nome'>";
        echo "<INPUT type='text' name='cognome' placeholder='cognome'>";
echo "<SELECT name='mansione'>";
        while($row=$res->fetch_assoc()){
            $id=$row['id'];
            $nome=$row['nome'];
            echo "<OPTION value='$id'>";
                    echo $nome;
            echo "</OPTION>";
        }
        echo "</SELECT>";
        echo "<INPUT type='submit'>";
echo "</FORM>";
$conn->close();