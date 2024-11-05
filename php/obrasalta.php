<?php
include("conexion.php");
$getmysql=new mysqlconex();
$getconex=$getmysql->conex();

if(isset($_GET["pro"])){
  $nombre=$_GET['nombre'];
  $edad=$_GET['edad'];
  $curp=$_GET['CURP'];
  $num_tel=$_GET['num_tel'];
  $nacionalidad=$_GET['pago'];
  $genero=$_GET['banco'];
  $direccion=$_GET['dirreccion'];
  $profesion=$_GET['Profesión'];

    $query="INSERT INTO  obras_publicas_nomina (hora_entrada,hora_salida,sueldo_quincenal,fecha_pago,forma_pago,tipo_banco,	dias_laborales,fecha_ingreso) VALUES (?,?,?,?,?,?,?,?)";
    $sentencia=mysqli_prepare($getconex,$query);
    mysqli_stmt_bind_param($sentencia,"ssssssss",$nombre,$edad,$curp,$num_tel,$nacionalidad,$genero,$direccion,$profesion);
    mysqli_stmt_execute($sentencia);
    $afectado=mysqli_stmt_affected_rows($sentencia);
    if($afectado==1){
        echo"<script> alert('EL empleado [$nombre] se agrago correctamente'); location.href='../obras.php'; </script>";
    }else{
      echo"<script> alert('EL empleado [$nombre] no se agrago correctamente'); location.href='../obras.php'; </script>";
    }
    mysqli_stmt_close($sentencia);
    mysqli_close($getconex);
}
?>