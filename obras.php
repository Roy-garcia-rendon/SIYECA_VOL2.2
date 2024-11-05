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
                            <li><a href="menu.html">Menu</a></li>
                            <li><a href="empleados.php">Empleados</a></li>
                            <li><a href="dependecias/altaobras.php">Alta empleados</a></li>
                            <li><a href="dependecias/modobras.php">Modificaciones</a> </li>
                            <li><a href="index.php">Salir</a></li>
                        </ul>
                    </nav>
                </div>   
                </header>
                <div class="contentcontainer">
                 <center><h2>SISTEMA DE ATENCION SIYECA</h2>
                </div>
<center>
                <table>
                    <tr>
                        <td>hora_entrada</td>
                        <td>hora_salida</td>
                        <td>sueldo_quincenal</td>
                        <td>fecha_pago</td>
                        <td>forma_pago</td>
                        <td>tipo_banco</td>
                        <td>dias_laborales</td>
                        <td>fecha_ingreso</td>
                        <td>identificador_nomina</td>
                        <td>no_empleado</td>
                    </tr>
                    <?php
       $conexion=mysqli_connect("localhost","root","","siyeca");
       $alumnos= "select * from obras_publicas_nomina"
?>
         <?php
        $resultado=mysqli_query($conexion,$alumnos);
        while ($row=mysqli_fetch_assoc($resultado))
        {
            ?>
            <tr>
                <td> <?php echo $row["hora_entrada"];?> </td>
                <td> <?php echo $row["hora_salida"];?> </td>
                <td> <?php echo $row["sueldo_quincenal"];?> </td>
                <td> <?php echo $row["fecha_pago"];?> </td>
                <td> <?php echo $row["forma_pago"];?> </td>
                <td> <?php echo $row["tipo_banco"];?> </td>
                <td> <?php echo $row["dias_laborales"];?> </td>
                <td> <?php echo $row["fecha_ingreso"];?> </td>
                <td> <?php echo $row["identificador_nomina"];?> </td>
                <td> <?php echo $row["no_empleado"];?> </td>
            </tr>
        <?php } ?>
                </table>
                </center>

    
    <?php
  mysqli_close($conexion);
  ?>
</body>
</html>