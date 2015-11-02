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
    
    
     <form method="POST" action="query/queryreporte.php" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Inserte Imagen:</td>
                    <td><input class="waves-effect waves-light btn-large" type="file" id="fileImagen" name="fileImagen" required></td>
                </tr>
                <tr>
                    <td>Inserte Descripción:</td>
                    <td><textarea id="txtDescripcion" class="materialize-textarea" cols="20" name="txtDescripcion" rows="10" ></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="waves-effect waves-light btn-large" type="submit" id="btnAgregar" name="btnAgregar" value="Agregar Reporte"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
