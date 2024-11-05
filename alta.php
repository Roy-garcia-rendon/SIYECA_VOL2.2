<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/www.png" type="image/x-icon">
    <link rel="stylesheet" href="css/c.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="icon" type="image/x-icon" href="mediaa/icons8-favicon-16 (1).png">
    
    <title>SIYECA</title>
</head>
<script>
    function confirmacion(){
        var respuesta = confirm("¿Deseas enviar la informacion?");
        if(respuesta == true){
            return true;

        }else{
            return false;
        }

    }
</script>
<body>
    <style>body{background-image: url(mediaa/maxresdefault.jpg);
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
            <li><a href="menu.html">Menu</a></li>
            <li><a href="empleados.php">Empleados</a></li>
            <li><a href="eliminar.php">Modificaciones</a> </li>
            <li><a href="index.php">Salir</a></li>
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
        <form  action="php/insertar.php" método="GET" class="needs-validation" novalidate>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre"  class="form-control" required>
    
            <label for="edad">Edad</label>
            <input type="number" name="edad" id="edad" value="18" min="18" max="60" class="form-control" required style="color: black;" >

            <label for="CURP">CURP</label>
            <input type="text" name="CURP" id="CURP" maxlength="18" minlength="18" class="form-control" required>

            <label for="num_tel">NUMERO DE TELEFONÓ</label>
            <input type="number" name="num_tel" id="num_tel" max="9000000000" min="1000000000"  class="form-control" required style="color: black;">

            <label>Nacionalidad:</label>
            <input type="radio"  name="nacionalidad" value="Mexicano">Mexicano
            <input type="radio" name="nacionalidad" value="Extranjero">Extranjero
            <br>

            <label>Genero:</label>
            <input type="radio" name="Genero" value="Hombre">Hombre
            <input type="radio" name="Genero" value="Mujer">Mujer
            <input type="radio" name="Genero" value="Otro">Otro
            <br>

            <label for="direccion">Direccion:</label>
            <input type="textarea" name="dirreccion"  class="form-control" required>

            <label for="Profesión">Profesión:</label>
            <input type="text" name="Profesión" id="Profesión" class="form-control" required>

            <label for="Ocupación">Ocupación:</label>
            <input type="text" name="Ocupación" id="Ocupación" class="form-control" required>

            <label for="Tipo_de_sangre">Tipo de sangre</label>
            <select name="Tipo_de_sangre" id="Tipo_de_sangre" >
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
            <input type="RFC" name="RFC" id="RFC" maxlength="13" minlength="13" class="form-control" required >
             
            <label>Estado civil</label>
            <input type="radio" name="Estado_civil" value="casado">casado
            <input type="radio" name="Estado_civil" value="soltero">soltero
            <input type="radio" name="Estado_civil" value="divorciado">divorciado
            <input type="radio" name="Estado_civil" value="viudo">viudo
            <input type="radio" name="Estado_civil" value="union libre">union libre
            <br>

            <label for="tel_emergencia">NUMERO DE EMERGENCIA</label>
            <input type="number" name="tel_emergencia" id="tel_emergencia" max="9000000000" min="1000000000" class="form-control" required style="color: black;">

            <label for="dependencia">Area o dependencia a trabajar</label>
            <select name="dependencia" id="dependencia">
                <option value="Obras publicas">Obras publicas</option>
                <option value="Registro civil">Registro civil</option>
                <option value="Seguridad">Seguridad</option>
                <option value="Trancito">Trancito</option>
                <option value="Juridico">Juridico</option>
                <option value="Proteccion civil">Proteccion civil</option>
                <option value="Desarrollo social">Desarrollo social</option>
            </select>
        
   <br>
   <input class="btn" type="submit" value="Registrar">
   <input type="hidden" name="pro" value="pro" onclick="return confirmacion()">


       
        </form>
       
        
    </div>
    <script src="js/java.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>