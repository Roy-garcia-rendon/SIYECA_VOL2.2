<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/www.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/c.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="icon" type="image/x-icon" href="mediaa/icons8-favicon-16 (1).png">
    
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
            <li><a href="../obras.php">Empleados</a></li>
            <li><a href="modobras.php">Modificaciones</a> </li>
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
        <form  action="../php/obrasalta.php" método="GET" class="needs-validation" novalidate>
            <label for="hora_entrada">Hora de entrada</label>
            <input type="time" name="nombre" id="nombre"  class="form-control" required>
    
            <label for="hora_salida">Hora de salida</label>
            <input type="time" name="edad" id="edad"  class="form-control" required style="color: black;" >

            <label for="sueldo_quincenal">Sueldo quincenal</label>
            <input type="number" name="CURP" id="CURP"  class="form-control" required>

            <label for="num_tel">Fecha pago</label>
            <input type="date" name="num_tel" id="num_tel" max="9000000000" min="1000000000"  class="form-control" required style="color: black;">

            <label>Forma pago:</label>
            <input type="radio"  name="pago" value="Transferencia">Transferencia
            <input type="radio" name="pago" value="Efectivo">Efectivo
            <br>

            <label>Tipo banco:</label>
            <input type="text" name="banco" id="banco" class="form-control" required>
            <br>

            <label for="direccion">Dias laborales:</label>
            <input type="text" name="dirreccion"  class="form-control" required>

            <label for="Profesión">Fecha ingreso:</label>
            <input type="date" name="Profesión" id="Profesión" class="form-control" required>

        
   <br>
   <input class="btn" type="submit" value="Registrar">
   <input type="hidden" name="pro" value="pro">


       
        </form>
       
        
    </div>
    <script src="js/java.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>