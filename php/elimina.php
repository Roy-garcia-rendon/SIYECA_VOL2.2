<?php 
include("conexion.php");
$getmysql=new mysqlconex();
$getconex=$getmysql->conex();

if(isset($_GET["eliminar"])){
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

   $query ="DELETE FROM alta_empleados WHERE no_empleado=?";
   $sentencia = mysqli_prepare($getconex,$query);
   mysqli_stmt_bind_param($sentencia,"i",$no_empleado);
   mysqli_stmt_execute($sentencia);
   $afectado=mysqli_stmt_affected_rows($sentencia);
   if($afectado==1){
    echo"<script> alert('EL empleado [$no_empleado]  se elimino correctamente'); location.href='../eliminar.php'; </script>";
   }else{
    echo"<script> alert('EL empleado [$no_empleado] no se elimino correctamente'); location.href='../alta.php'; </script>";
   }
}
mysqli_stmt_close($sentencia);
mysqli_close($getconex);
?>