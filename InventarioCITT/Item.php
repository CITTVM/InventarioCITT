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
        <?php
        include ("query/cnx.php");
        connect();
        ?>
        <form method="POST" action="query/queryitem.php">
            <table>
                <tr>
                    <td>Nombre Item:</td>
                    <td><input type="text" id="txtNombre" name="txtNombre" required></td>
                </tr>
                <tr>
                    <td>Cantidad:</td>
                    <td><input type="text" id="txtCantidad" name="txtCantidad" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="waves-effect waves-light btn-large" type="submit" id="btnAgregar" name="btnAgregar" value="Agregar Item" required></td>
                </tr>
            </table>
            <table border="1">
            <tr>
                <td>Id Item:</td>
                <td>Nombre Item:</td>
                <td>Cantidad Item:</td>
            </tr>
            <?php
                    $sql="select * from item order by id_item asc";
                    $ressql=mysql_query($sql);
                        while($rowitem=mysql_fetch_array($ressql))
                        {
                            echo('<tr>');
                            echo('<td>'.$rowitem['id_item'].'</td>');
                            echo('<td>'.$rowitem['nombre_item'].'</td>');
                            echo('<td>'.$rowitem['cantidad_item'].'</td>');
                            echo('</tr>');
                            
                        }
                    ?>
        </table>
        </form>
    </body>
</html>
