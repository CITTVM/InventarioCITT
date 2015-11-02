

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
$rut= $_POST["txtRutPersona"];
$nombre= $_POST["txtNombrePersona"];
$apellido= $_POST["txtApellidoPersona"];
$carrera= $_POST["cbxCarrera"];
$autorizable= $_POST["cbxAutorizable"];
$idData= "insert into persona (rut_persona, nombre_persona, apellido_persona, carrera_persona, permiso_persona) values ('$rut', '$nombre', '$apellido', '$carrera', '$autorizable')";
if(mysql_query($idData))
{
    echo('Se realizó la operación.<br>');
    echo('Espere 3 segundos para volver, o vaya al index.<br>');
     header( "refresh:3; url=../Persona.php" ); 
}

else
{
    echo('Algo falló. '.  mysql_error().'<br>');
}
echo('<A HREF="../index.php">Volver a Index</A><br>');
?>
</body>
</html>