<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
<A HREF="Pedidos.php">Registrar Pedidos</A><p1>||</p1>
        <A HREF="Persona.php">Registrar Persona</A><p1>||</p1>
        <A HREF="Item.php">Registrar Item</A><p1>||</p1>
        <A HREF="Carrera.php">Registrar Carrera</A><p1>||</p1>
        <A HREF="DevolucionPedido.php">Devolucion Pedido</A><br>
        <A HREF="ListarPedidos.php">Listar Pedidos</A><p1>||</p1>
        <A HREF="ListarPersonas.php">Listar Personas</A><p1>||</p1>
        <A HREF="ListarItem.php">Listar Items</A><p1>||</p1><br>
        <A HREF="index.php">Volver al Index</A><br>
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
          
    </head>
    <nav>
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo right">CITT</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="Pedidos.php">Registrar Pedidos</a></li>
        <li><a href="Persona.php">Registrar Personas</a></li>
        <li><a href="Carrera.php">Registrar Carrera</a></li>
        <li><a href="Item.php">Registrar Item</a></li>
        <li><a href="DevolucionPedido.php">Devoluciones</a></li>
        <li><a href="Reporte.php">Ingresar Reporte</a></li>
      </ul>
    </div>
    </nav>
    <body>
        
    <p1>Bienvenido al sitio de inventario CITT VIÑA.</p1><br>
    <table width="700">
        <tr>
            <td width="350"><img src="images/logo.png" width='350' height='350'></td>
            <td width="350"  align="left">Bienvenidos al portal de inventario de CITT<br></td>
        </tr>
        <p1>Este es un portal Open Source, por lo que cualquiera le puede meter mano.</p1><br>
        <p1>Ante cualquier duda preguntele al sensual Milico :)</p1>
        <?php
        include ("query/cnx.php");
        connect();
        ?>
        <?php
                    $sql="select * from reportes order by id_reporte desc";
                    $ressql=mysql_query($sql);
                        while($rowitem=mysql_fetch_array($ressql))
                        {
                            echo('<tr>');
                            echo("<td width='350'><img src=".$rowitem['ruta_imagen_reporte']." width='350' height='350'></td>");
                            echo('<td>'.$rowitem['descripcion_reporte'].'</td>');
                            echo('</tr>');
                            
                        }
                    ?>
    </table>
    
            
     
    </body>
    <p>Aún en desarrollo... Atte: Milico</p>
</html>
