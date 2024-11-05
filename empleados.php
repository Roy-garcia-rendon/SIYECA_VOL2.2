<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/c5.css">
    <title>empleados</title>
</head>
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
                           <center> <li><a href="menu.html">Menu</a></li>
                            <li><a href="alta.php">Alta empleados</a></li>
                            <li><a href="eliminar.php">Modificaciones</a> </li>
                            <li><a href="index.php">Salir</a></li>
                            <h2>dependencias</h2></center>
                 <li><a href="obras.php">Obras publicas</a></li>
                 <li><a href="dependecias/desarrollo_social.php">Desarrollo social</a></li>
                 <li><a href="dependecias/juridico.php">Juridico</a></li>
                 <li><a href="dependecias/proteccion_civil.php">Proteccion civil</a></li>
                 <li><a href="dependecias/registro_civil.php">Registro civil</a></li>
                 <li><a href="dependecias/Seguridad.php">Seguridad</a></li>
                 <li><a href="dependecias/trancito.php">Trancito</a></li>
                        </ul>
                    </nav>
                </div>   
                </header>
                <div class="contentcontainer">
                    <center><h2>SISTEMA DE ATENCION SIYECA</h2></div>
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
            </tr>
        <?php } ?>
                </table>
                </center>

    
    <?php
   
  mysqli_close($conexion);
  ?>
</body>
</html>