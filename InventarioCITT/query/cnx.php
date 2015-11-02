<?php
function connect()
{
    $cnx = mysql_connect("localhost", "root", "");
    mysql_select_db("inventariocittdb",$cnx) or die ("Error, no se pudo conectar con la base de datos");
if(!$cnx)
{
    die('No hay conexión: '. mysql_error());
    echo('Cago.</br>');
}
else
    echo('Esta conectado a la base de datos. </br>');

    
}


