
<html>
<head>
<meta charset="UTF-8">
<title></title>
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
          
</head>
<body>
    <div class="preloader-wrapper big active">
      <div class="spinner-layer spinner-blue">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div> 
    </div><br>
<?php
include("cnx.php");
connect();
$cantidadRequerida=$_POST['txtCantidad'];
$nombreItem= $_POST["cbxItem"];
$rut= $_POST["txtRut"];
$nombrePedidor= $_POST["cbxPersona"];
date_default_timezone_set("America/Argentina/Buenos_Aires"); 
$idData= "insert into pedido (rut_persona, nombre_item, fecha_pedido, nombre_pedidor, cantidad) values ('$rut', '$nombreItem', '".date("Y-m-d H:m:s")."', '$nombrePedidor', '$cantidadRequerida')";
$verAu=  mysql_query("select permiso_persona from persona where rut_persona='$rut'");
$res= mysql_fetch_assoc($verAu);
if($res['permiso_persona']=='1')
{
    
    $verStock=mysql_query("select cantidad_item from item where nombre_item='$nombreItem'");
    $stock=  mysql_fetch_assoc($verStock);
    if($stock['cantidad_item']>=$cantidadRequerida)
    {
        if(mysql_query($idData))
        {
            $upstock="update item set cantidad_item=cantidad_item-'$cantidadRequerida' where nombre_item='$nombreItem' ";
            if(mysql_query($upstock))
                {
                    echo('Se realizó la operación.<br>');
                    echo('Espere 3 segundos para volver, o vaya al index.<br>');
                    header( "refresh:3; url=../Pedidos.php" ); 
                }
            else
                echo('Algo falló. '.  mysql_error().'<br>');
            
        }
        else
            echo('Algo falló. '.  mysql_error().'<br>');

    }
    else
        echo('No hay suficiente stock, verifique la cantidad.');
}
else
    echo('Persona sin autoridad... no se puede hacer la solicitud.');

echo('<A HREF="../index.php">Volver a Index</A><br>');
?>
</body>
</html>