<?php
$cookie_name="colore_preferito";
$cooke_value="rosso";
setcookie($cookie_name,$cooke_value,time()+(86400)*30,"/");

if(isset($_COOKIE[$cookie_name])){
    echo $_COOKIE[$cookie_name];
}