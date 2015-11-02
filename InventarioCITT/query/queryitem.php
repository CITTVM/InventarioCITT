
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
$nombre=$_POST['txtNombre'];
$cantidad=$_POST['txtCantidad'];
$inData="insert into item (nombre_item, cantidad_item) values ('$nombre', '$cantidad')";
if(mysql_query($inData))
    {
        echo('Se realizó la operación.<br>');
        echo('Espere 3 segundos para volver, o vaya al index.<br>');
        header( "refresh:3; url=../Item.php" ); 
    }

else
    echo('Algo falló. '.  mysql_error().'<br>');
echo('<A HREF="../index.php">Volver a Index</A><br>');
?>
</body>
</html>
