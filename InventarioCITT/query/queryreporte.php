
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
//Lo original
include("cnx.php");
connect();
$descripcion=$_POST['txtDescripcion'];  
date_default_timezone_set("America/Argentina/Buenos_Aires"); 
if (is_uploaded_file($_FILES['fileImagen']['tmp_name']))
{
    $nombreDirectorio = "../images/imagenReportes";
    $nombreDirectorioSQL="images/imagenReportes";
    $nombreFichero = $_FILES['fileImagen']['name'];
    $nombreCompleto = $nombreDirectorio . $nombreFichero;
    $nombreCompletoSQL= $nombreDirectorioSQL . $nombreFichero;
    if (is_file($nombreCompleto))
    {
        $idUnico = time();
        $nombreFichero = $idUnico . "-" . $nombreFichero;
    }
    move_uploaded_file($_FILES['fileImagen']['tmp_name'], $nombreDirectorio.$nombreFichero);
    $inData="insert into reportes (ruta_imagen_reporte, descripcion_reporte, fecha_reporte) values ('$nombreCompletoSQL', '$descripcion', '".date("Y-m-d H:m:s")."')";
    if(mysql_query($inData))
    {
        echo('Se realizó la operación.<br>');
        echo('Espere 3 segundos para volver, o vaya al index.<br>');
        header( "refresh:3; url=../Reporte.php" ); 
    }

    else
        echo('Algo falló. '.  mysql_error().'<br>');
    echo('<A HREF="../index.php">Volver a Index</A><br>');
}
else
{
    echo("No se ha podido subir el fichero <br>");
    echo('<A HREF="../index.php">Volver a Index</A><br>');
}


?>
</body>
</html>

