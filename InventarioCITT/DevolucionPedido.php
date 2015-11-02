<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
         <?php
        include ("query/cnx.php");
        connect();
        ?>
        <form method="POST" action="query/querydevolucion.php">
            <table>
                <tr>
                    <td>Id Pedido:</td>
                    <td><select class="browser-default" name="cbxidpedido">
                    <?php
                    $sql="select id_pedido from pedido order by id_pedido desc";
                    $ressql=mysql_query($sql);
                        while($rowitem=mysql_fetch_array($ressql))
                        {
                            echo "<option>";
                            echo $rowitem['id_pedido'];
                            echo "</option>";
                        }
                    ?></select></td>
                </tr>
                <tr>
                    <td>Rut Persona: </td>
                    <td><input type="text" id="txtRut" name="txtRut" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="waves-effect waves-light btn-large" type="submit" id="btnAgregar" value="Procesar Devolucion"></td>
                </tr>
            </table>
            <table border="1">
            <tr>
                <td>Id Pedido:</td>
                <td>Autoriza:</td>
                <td>Nombre Item:</td>
                <td>Fecha Pedido:</td>
                <td>Solicitante:</td>
                <td>Cantidad:</td>
            </tr>
            <?php
                    $sql="select * from pedido order by id_pedido desc";
                    $ressql=mysql_query($sql);
                        while($rowpedido=mysql_fetch_array($ressql))
                        {
                            echo('<tr>');
                            echo('<td>'.$rowpedido['id_pedido'].'</td>');
                            echo('<td>'.$rowpedido['rut_persona'].'</td>');
                            echo('<td>'.$rowpedido['nombre_item'].'</td>');
                            echo('<td>'.$rowpedido['fecha_pedido'].'</td>');
                            echo('<td>'.$rowpedido['nombre_pedidor'].'</td>');
                            echo('<td>'.$rowpedido['cantidad'].'</td>');
                            echo('</tr>');
                            
                        }
                    ?>
        </table>
        </form> 
    </body>
</html>
