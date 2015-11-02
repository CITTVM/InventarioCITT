

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
$idPedido= $_POST["cbxidpedido"];
$query=  mysql_query("select cantidad from pedido where id_pedido='$idPedido'");
$res=  mysql_fetch_assoc($query);
$queryid=mysql_query("select nombre_item from pedido where id_pedido='$idPedido'");
$resid= mysql_fetch_assoc($queryid);
$update="update item set cantidad_item=cantidad_item+".$res['cantidad']." where nombre_item='".$resid['nombre_item']."'";
if(mysql_query($update))
{
    $del="delete from pedido where id_pedido='$idPedido'";
    if(mysql_query($del))
    {
        echo('Se realizó la operación.<br>');
        echo('Espere 3 segundos para volver, o vaya al index.<br>');
        header( "refresh:3; url=../Devolucion.php" ); 
}
    else
        echo('Se actualizo inventario pero algo paso con pedidos. '.  mysql_error());
}
else
    echo('No se pudo realizar la solicitud. '.  mysql_error());
echo('<A HREF="../index.php">Volver a Index</A><br>');
?>
</body>
</html>
