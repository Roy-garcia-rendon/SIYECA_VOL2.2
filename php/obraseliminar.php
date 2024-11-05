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
    $nacionalidad=$_GET['pago'];
    $genero=$_GET['banco'];
    $direccion=$_GET['dirreccion'];
    $profesion=$_GET['Profesión'];

   $query ="DELETE FROM  obras_publicas_nomina WHERE no_empleado=?";
   $sentencia = mysqli_prepare($getconex,$query);
   mysqli_stmt_bind_param($sentencia,"i",$no_empleado);
   mysqli_stmt_execute($sentencia);
   $afectado=mysqli_stmt_affected_rows($sentencia);
   if($afectado==1){
    echo"<script> alert('EL empleado [$no_empleado]  se elimino correctamente'); location.href='../obras.php'; </script>";
   }else{
    echo"<script> alert('EL empleado [$no_empleado] no se elimino correctamente'); location.href='../obras.php'; </script>";
   }
}
mysqli_stmt_close($sentencia);
mysqli_close($getconex);
?>

