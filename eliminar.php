<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/c5.css">
    <title>empleados</title>
</head>
<script>
    function confirmacion(){
        var respuesta=confirm("¿Desea realmente borrar el registro?");
        if(respuesta == true){
            return true;
        }else{
            return false;
        }
    }
</script>
<body>
<style>body{
    background-image: url(mediaa/San\ Juan.jpg);
        background-size: cover;
        background-attachment: fixed;}
        </style>
        <main id="principal">
            <header>
                <div class="Menu container">
                    <a href="#" class="logo">AYUNTAMIENTO</a>
                        <ing src="media/Menu.png" class="Menu-icono" alt="">
                    </label>
                    <nav class="navbar">
                        <ul>
                            <li><a href="menu.html">Menu</a></li>
                            <li><a href="empleados.php">Empleados</a></li>
                            <li><a href="alta.php">Alta empleados</a></li>
                            <li><a href="eliminar.php">Modificaciones</a> </li>
                            <li><a href="index.php">Salir</a></li>
                        </ul>
                    </nav>
                </div>   
                </header>
                <div class="contentcontainer">
                 <center><h2>SISTEMA DE ATENCION SIYECA</h2></center>
                </div>
<center>
                <table>
                    <tr>
                        <td>no_empleado</td>
                        <td>nombre</td>
                        <td>edad</td>
                        <td>CURP</td>
                        <td>num_tel</td>
                        <td>nacionalidad</td>
                        <td>genero</td>
                        <td>dirreccion</td>
                        <td>profesion</td>
                        <td>ocupacion</td>
                        <td>tipo de sangre</td>
                        <td>RFC</td>
                        <td>estado civil</td>
                        <td>tel emergencia</td>
                        <td>dependencia</td>
                        <td>Eliminar</td>
                        <td>Editar</td>
                    </tr>
                    <?php
       $conexion=mysqli_connect("localhost","root","","siyeca");
       $alumnos= "select * from alta_empleados"
?>
         <?php
        $resultado=mysqli_query($conexion,$alumnos);
        while ($row=mysqli_fetch_assoc($resultado))
        {
            ?>
            <tr>
                <td> <?php echo $row["no_empleado"];?> </td>
                <td> <?php echo $row["nombre"];?> </td>
                <td> <?php echo $row["edad"];?> </td>
                <td> <?php echo $row["curp"];?> </td>
                <td> <?php echo $row["num_tel"];?> </td>
                <td> <?php echo $row["nacionalidad"];?> </td>
                <td> <?php echo $row["genero"];?> </td>
                <td> <?php echo $row["dirreccion"];?> </td>
                <td> <?php echo $row["profesion"];?> </td>
                <td> <?php echo $row["ocupacion"];?> </td>
                <td> <?php echo $row["tipo_de_sangre"];?> </td>
                <td> <?php echo $row["rfc"];?> </td>
                <td> <?php echo $row["estado_civil"];?> </td>
                <td> <?php echo $row["tel_emergencia"];?> </td>
                <td> <?php echo $row["dependencia"];?> </td>
                <td> <form action='php/elimina.php' method='GET'>
                <input type="hidden" name="no_empleado"  value='<?php echo $row["no_empleado"];?>'>
                <input type="hidden" name="nombre"  value='<?php echo $row["nombre"];?>'>
                <input type="hidden" name="edad"  value='<?php echo $row["edad"];?>'>
                <input type="hidden" name="curp"  value='<?php echo $row["curp"];?>'>
                <input type="hidden" name="num_tel"  value='<?php echo $row["num_tel"];?>'>
                <input type="hidden" name="nacionalidad"  value='<?php echo $row["nacionalidad"];?>'>
                <input type="hidden" name="genero"  value='<?php echo $row["genero"];?>'>
                <input type="hidden" name="dirreccion"  value='<?php echo $row["dirreccion"];?>'>
                <input type="hidden" name="profesion"  value='<?php echo $row["profesion"];?>'>
                <input type="hidden" name="ocupacion"  value='<?php echo $row["ocupacion"] ?>'>
                <input type="hidden" name="tipo_de_sangre"  value='<?php echo $row["tipo_de_sangre"];?>'>
                <input type="hidden" name="rfc"  value='<?php echo $row["rfc"];?>'>
                <input type="hidden" name="Estado_civil"  value='<?php echo $row["estado_civil"];?>'>
                <input type="hidden" name="estado_civil"  value='<?php echo $row["tel_emergencia"];?>'>
                <input type="hidden" name="dependencia"  value='<?php echo $row["dependencia"];?>'>
                <input type="submit" name="eliminar"  value='eliminar' onclick='return confirmacion()'>
                </form></td> 
                
                
                <td> <form action='php/editar.php' method='GET'>
                <input type="hidden" name="no_empleado"  value='<?php echo $row["no_empleado"];?>'>
                <input type="hidden" name="nombre"  value='<?php echo $row["nombre"];?>'>
                <input type="hidden" name="edad"  value='<?php echo $row["edad"];?>'>
                <input type="hidden" name="curp"  value='<?php echo $row["curp"];?>'>
                <input type="hidden" name="num_tel"  value='<?php echo $row["num_tel"];?>'>
                <input type="hidden" name="nacionalidad"  value='<?php echo $row["nacionalidad"];?>'>
                <input type="hidden" name="genero"  value='<?php echo $row["genero"];?>'>
                <input type="hidden" name="dirreccion"  value='<?php echo $row["dirreccion"];?>'>
                <input type="hidden" name="profesion"  value='<?php echo $row["profesion"];?>'>
                <input type="hidden" name="ocupacion"  value='<?php echo $row["ocupacion"] ?>'>
                <input type="hidden" name="tipo_de_sangre"  value='<?php echo $row["tipo_de_sangre"];?>'>
                <input type="hidden" name="rfc"  value='<?php echo $row["rfc"];?>'>
                <input type="hidden" name="estado_civil"  value='<?php echo $row["estado_civil"];?>'>
                <input type="hidden" name="tel_emergencia"  value='<?php echo $row["tel_emergencia"];?>'>
                <input type="hidden" name="dependencia"  value='<?php echo $row["dependencia"];?>'>
                <input type="submit" name="Editar"  value='Editar'>
                </form></td> 
                
            </tr>
        <?php } ?>
                </table>
                </center>

    
    <?php
     mysqli_free_result($resultado);
  mysqli_close($conexion);
  ?>
</body>
</html>