<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/www.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/c.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="icon" type="image/x-icon" href="../mediaa/icons8-favicon-16 (1).png">
    
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
        <input type="checkbox" id="Menu">
        <label for="Menu">
            <ing src="media/Menu.png" class="Menu-icono" alt="">
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
        <img src="mediaa/images.jfif" alt=" " width="10%" height="10%"> 
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
    $curp=$_GET['CURP'];
    $num_tel=$_GET['num_tel'];
    $nacionalidad=$_GET['nacionalidad'];
    $genero=$_GET['Genero'];
    $direccion=$_GET['dirreccion'];
    $profesion=$_GET['Profesión'];
    $ocupacion=$_GET['Ocupación'];
    $tipo_de_sangre=$_GET['Tipo_de_sangre'];
    $rfc=$_GET['RFC'];
    $estado_civil=$_GET['Estado_civil'];
    $tel_emergencia=$_GET['tel_emergencia'];
    $dependencia=$_GET['dependencia'];

    if(isset($_GET['editar2'])){
        include("conexion.php");
        $getmysql=new mysqlconex();
        $getconex=$getmysql->conex();

        $query="UPDATE alta_empleados SET nombre=?,edad=?,curp=?,num_tel=?,nacionalidad=?,genero=?,dirreccion=?,profesion=?,ocupacion=?,tipo_de_sangre=?,rfc=?,estado_civil=?,tel_emergencia=?,dependencia=? WHERE no_empleado=?";
          $sentencia = mysqli_prepare($getconex,$query);
          mysqli_stmt_bind_param($sentencia,"ssssssssssssss",$nombre,$edad,$curp,$num_tel,$nacionalidad,$genero,$direccion,$profesion,$ocupacion,$tipo_de_sangre,$rfc,$estado_civil,$tel_emergencia,$dependencia,$no_empleado);
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
   
        <form  action="../eliminar.php" método="GET" class="needs-validation" novalidate>
            <input type="hidden" value="<?php echo $no_empleado ?>" name="no_empleado">

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre"  class="form-control" required  value="<?php echo $nombre ?>">
    
            <label for="edad">Edad</label>
            <input type="number" name="edad" id="edad" value="<?php echo $edad ?>" min="18" max="60" class="form-control" required style="color: black;" >

            <label for="CURP">CURP</label>
            <input type="text" name="CURP" id="CURP" maxlength="18" minlength="18" class="form-control" required  value="<?php echo $curp ?>">

            <label for="num_tel">NUMERO DE TELEFONÓ</label>
            <input type="number" name="num_tel" id="num_tel" max="9000000000" min="1000000000"  class="form-control" required style="color: black;"  value="<?php echo $num_tel ?>">

            <label>Nacionalidad:</label>
            <input type="radio"  value="<?php echo $nacionalidad ?>"  hidden selected><?php echo $nacionalidad ?>>
            <input type="radio"  name="nacionalidad" value="Mexicano">Mexicano
            <input type="radio" name="nacionalidad" value="Extranjero">Extranjero
            <br>

            <label>Genero:</label>
            <input type="radio"  value="<?php echo $genero ?>" hidden selected><?php echo $genero ?>>
            <input type="radio" name="Genero" value="Hombre">Hombre
            <input type="radio" name="Genero" value="Mujer">Mujer
            <input type="radio" name="Genero" value="Otro">Otro
            <br>

            <label for="direccion">Direccion:</label>
            <input type="textarea" name="dirreccion"  class="form-control" required  value="<?php echo $direccion ?>">

            <label for="Profesión">Profesión:</label>
            <input type="text" name="Profesión" id="Profesión" class="form-control" required  value="<?php echo $profesion ?>">

            <label for="Ocupación">Ocupación:</label>
            <input type="text" name="Ocupación" id="Ocupación" class="form-control" required  value="<?php echo $ocupacion ?>">

            <label for="Tipo_de_sangre">Tipo de sangre</label>
            <select name="Tipo_de_sangre" id="Tipo_de_sangre" >
                <option value="<?php echo $tipo_de_sangre ?>"> hidden selected><?php echo $tipo_de_sangre ?></option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>

            </select>

            <label for="RFC">RFC</label>
            <input type="RFC" name="RFC" id="RFC" maxlength="13" minlength="13" class="form-control" required  value="<?php echo $rfc ?>">
             
            <label>Estado civil</label>
            <input type="radio"  value="<?php echo $estado_civil ?>"  hidden selected><?php echo $estado_civil ?>>
            <input type="radio" name="Estado_civil" value="casado">casado
            <input type="radio" name="Estado_civil" value="soltero">soltero
            <input type="radio" name="Estado_civil" value="divorciado">divorciado
            <input type="radio" name="Estado_civil" value="viudo">viudo
            <input type="radio" name="Estado_civil" value="union libre">union libre
            <br>

            <label for="tel_emergencia">NUMERO Tel emergencia</label>
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
                <option value="Proteccion civil">Proteccion civil</option>
            </select>
        
   <br>
   <input type="submit" name="editar2" value="Editar">
        </form>
       
        
    </div>
    <script src="js/java.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>