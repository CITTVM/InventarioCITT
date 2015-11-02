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
        <li><a href="Reporte.php">Registrar Reporte</a></li>
      </ul>
    </div>
    </nav>
    <body>
        <?php
        include ("query/cnx.php");
        connect();
        ?>
        <form method="POST" action="query/querypersona.php">
             <table>
                <tr>
                    <td>Rut:</td>
                    <td><input type="text" id="txtRutPersona" name="txtRutPersona" required></td>
                </tr>
                <tr>
                    <td>Nombre: </td>
                    <td><input type="text" id="txtNombrePersona" name="txtNombrePersona" required></td>
                </tr>
                <tr>
                    <td>Apellido: </td>
                    <td><input type="text" id="txtApellidoPersona" name="txtApellidoPersona" required></td>
                </tr>
                <tr>
                    <td>Carrera: </td>
                    <td><select class="browser-default" name="cbxCarrera">
                        <option disabled selected>Seleccione Carrera</option>
                        <?php
                        $sql="select * from carrera";
                        $ressql=mysql_query($sql);
                        while($rowcarrera=mysql_fetch_array($ressql))
                        {
                            echo "<option>";
                            echo $rowcarrera['nombre_carrera'];
                            echo "</option>";
                        }
                        ?>
                        </select></td>
                </tr>
                <tr>
                    <td>Autorizable: </td>
                    <td><select class="browser-default" name="cbxAutorizable" >
                            <option disabled selected>Seleccione Opcion</option>
                            <option value="1">Autorizable</option>
                            <option value="0">No Autorizable</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="waves-effect waves-light btn-large" type="submit" id="btnAgregar" value="Agregar Persona"></td>
                </tr>
            </table>
            <table border="1">
            <tr>
                <td>Rut:</td>
                <td>Nombre:</td>
                <td>Carrera:</td>
                <td>Permiso:</td>
            </tr>
            <?php
                    $sql="select * from persona order by apellido_persona asc";
                    $ressql=mysql_query($sql);
                        while($rowpedido=mysql_fetch_array($ressql))
                        {
                            echo('<tr>');
                            echo('<td>'.$rowpedido['rut_persona'].'</td>');
                            echo('<td>'.$rowpedido['nombre_persona'].' '.$rowpedido['apellido_persona'].'</td>');
                            echo('<td>'.$rowpedido['carrera_persona'].'</td>');
                            if($rowpedido['permiso_persona']==1)
                                echo '<td>Autorizable</td>';
                            else if($rowpedido['permiso_persona']==0)
                                echo '<td>No Autorizable</td>';
                            //echo('<td>'.$rowpedido['permiso_persona'].'</td>');
                            echo('</tr>');
                            
                        }
                    ?>
            
        </table>
        </form>
    </body>
</html>
