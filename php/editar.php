<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/www.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/c.css">
    <link rel="icon" type="image/x-icon" href="../mediaa/icons8-favicon-16 (1).png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <title>SIYECA</title>
</head>
<body>
    <style>body{background-image: url(../mediaa/maxresdefault.jpg);
    background-size: cover;
    background-attachment: fixed;}
    </style>
    <main id="principal">
        <header>
    <div class="Menu container">
        <a href="#" class="logo">AYUNTAMIENTO</a>
        <input type="" id="Menu">
        <label for="Menu">
            <ing src="" class="Menu-icono" alt="">
        </label>

        <nav class="navbar">

            <ul>
            <li><a href="../menu.html">Menu</a></li>
            <li><a href="../empleados.php">Empleados</a></li>
            <li><a href="../eliminar.php">Modificaciones</a> </li>
            <li><a href="../index.php">Salir</a></li>
            </ul>

        </nav>

    </div>   

    </header>
    <div class="contentcontainer">

        <div class="content" id = "content">
        </div class="wrapper">
        <img src="../mediaa/images.jfif" alt=" " width="10%" height="10%"> 
        <div class="text-box">
            <h2>Altas de empleados </h2>
        </div>
        </div> 
       <div class="sy">
        <h1>(SIYECA) </h1>
       </div>
            
            
            <img src="image/shutterstock-51313744_sm.webp" alt="">
        </div>
    </div> 
       <div class="form-content">
        <h2>Enviar tu solicitud</h2>
        <?php
    $no_empleado=$_GET['no_empleado'];
    $nombre=$_GET['nombre'];
    $edad=$_GET['edad'];
    $curp=$_GET['curp'];
    $num_tel=$_GET['num_tel'];
    $nacionalidad=$_GET['nacionalidad'];
    $genero=$_GET['genero'];
    $direccion=$_GET['dirreccion'];
    $profesion=$_GET['profesion'];
    $ocupacion=$_GET['ocupacion'];
    $tipo_de_sangre=$_GET['tipo_de_sangre'];
    $rfc=$_GET['rfc'];
    $estado_civil=$_GET['estado_civil'];
    $tel_emergencia=$_GET['tel_emergencia'];
    $dependencia=$_GET['dependencia'];

    if(isset($_GET['editar2'])){
        include("conexion.php");
        $getmysql=new mysqlconex();
        $getconex=$getmysql->conex();

        $query="UPDATE alta_empleados SET nombre=?,edad=?,curp=?,num_tel=?,nacionalidad=?,genero=?,dirreccion=?,profesion=?,ocupacion=?,tipo_de_sangre=?,rfc=?,estado_civil=?,tel_emergencia=?,dependencia=? WHERE no_empleado=?";
          $sentencia = mysqli_prepare($getconex,$query);
          mysqli_stmt_bind_param($sentencia,"ssssssssssssssi",$nombre,$edad,$curp,$num_tel,$nacionalidad,$genero,$direccion,$profesion,$ocupacion,$tipo_de_sangre,$rfc,$estado_civil,$tel_emergencia,$dependencia,$no_empleado);
          mysqli_stmt_execute($sentencia);
          $afectado=mysqli_stmt_affected_rows($sentencia);
          if($afectado==1){
         echo"<script> alert('EL empleado [$no_empleado]  se edito correctamente'); location.href='../eliminar.php'; </script>";
        }else{
        echo"<script> alert('EL empleado [$no_empleado] no se edito correctamente'); location.href='../eliminar.php'; </script>";
    }
    mysqli_stmt_close($sentencia);
    mysqli_close($getconex);
    
    }
    ?>
   
        <form  action="editar.php" método="GET" >
            <input type="hidden" value="<?php echo $no_empleado ?>" name="no_empleado" >

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre"  value="<?php echo $nombre ?>" style="color: black;">
    
            <label for="edad">Edad</label>
            <input type="number" name="edad" id="edad" value="<?php echo $edad ?>" min="18" max="60"  style="color: black;" >

            <label for="curp">CURP</label>
            <input type="text" name="curp" id="curp" maxlength="18" minlength="18"    value="<?php echo $curp ?>" style="color: black;">

            <label for="num_tel">NUMERO DE TELEFONÓ</label>
            <input type="number" name="num_tel" id="num_tel" max="9000000000" min="1000000000"   style="color: black;"  value="<?php echo $num_tel ?>">

            <label>Nacionalidad:</label>
            <input type="radio"  value="<?php echo $nacionalidad ?>"  hidden selected><?php echo $nacionalidad ?>!!
            <input type="radio"  name='nacionalidad' value="Mexicano">Mexicano
            <input type="radio" name='nacionalidad' value="Extranjero">Extranjero
            <br>

            <label>Genero:</label>
            <input type="radio"  value="<?php echo $genero ?>" hidden selected><?php echo $genero ?>!!
            <input type="radio" name='genero' value="Hombre">Hombre
            <input type="radio" name='genero' value="Mujer">Mujer
            <input type="radio" name='genero' value="Otro">Otro
            <br>

            <label for="direccion">Direccion:</label>
            <input type="textarea" name="dirreccion" value="<?php echo $direccion ?>" style="color: black;">

            <label for="Profesión">Profesión:</label>
            <input type="text" name="profesion" id="profesion"   value="<?php echo $profesion ?>" style="color: black;">

            <label for="Ocupación">Ocupación:</label>
            <input type="text" name="ocupacion" id="ocupacion"   value="<?php echo $ocupacion ?>" style="color: black;">

            <label for="Tipo_de_sangre">Tipo de sangre</label>
            <select name="tipo_de_sangre" id="tipo_de_sangre" >
                <option value="<?php echo $tipo_de_sangre ?>" hidden selected><?php echo $tipo_de_sangre ?></option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>

            </select>

            <label for="rfc">RFC</label>
            <input type="text" name="rfc" id="rfc" maxlength="13" minlength="13"  value="<?php echo $rfc ?>" style="color: black;">
             
            <label>Estado civil</label>
            <input type="radio" value="<?php echo $estado_civil ?>"  hidden selected><?php echo $estado_civil ?>!!
            <input type="radio" name='estado_civil' value="casado">casado
            <input type="radio" name='estado_civil' value="soltero">soltero
            <input type="radio" name='estado_civil' value="divorciado">divorciado
            <input type="radio" name='estado_civil' value="viudo">viudo
            <input type="radio" name='estado_civil' value="union libre">union libre
            <br>

            <label for="tel_emergencia">NUMERO emergencia</label>
            <input type="number" name="tel_emergencia" id="tel_emergencia" max="9000000000" min="1000000000" class="form-control" required style="color: black;"  value="<?php echo $tel_emergencia ?>">

            <label for="dependencia">Area o dependencia a trabajar</label>
            <select name="dependencia" id="dependencia">
                <option  value="<?php echo $dependencia ?>" hidden selected><?php echo $dependencia ?></option>
                <option value="Obras publicas">Obras publicas</option>
                <option value="Registro civil">Registro civil</option>
                <option value="Seguridad">Seguridad</option>
                <option value="Trancito">Trancito</option>
                <option value="Juridico">Juridico</option>
                <option value="Proteccion civil">Proteccion civil</option>
                <option value="Desarrollo social">Desarrollo social</option>
            </select>
        
   <br>
   <input type="submit" name="editar2" value="Editar">
        </form>
       
        
    </div>
    <script src="js/java.js"></script>
</body>
</html>