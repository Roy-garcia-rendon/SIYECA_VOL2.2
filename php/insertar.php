<?php
include("conexion.php");
$getmysql=new mysqlconex();
$getconex=$getmysql->conex();

if(isset($_GET["pro"])){
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

    $query="INSERT INTO alta_empleados (nombre,edad,curp,num_tel,nacionalidad,genero,dirreccion,profesion,ocupacion,tipo_de_sangre,rfc,estado_civil,tel_emergencia,dependencia) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $sentencia=mysqli_prepare($getconex,$query);
    mysqli_stmt_bind_param($sentencia,"ssssssssssssss",$nombre,$edad,$curp,$num_tel,$nacionalidad,$genero,$direccion,$profesion,$ocupacion,$tipo_de_sangre,$rfc,$estado_civil,$tel_emergencia,$dependencia);
    mysqli_stmt_execute($sentencia);
    $afectado=mysqli_stmt_affected_rows($sentencia);
    if($afectado==1){
        echo"<script> alert('EL empleado [$nombre] se agrago correctamente'); location.href='../alta.php'; </script>";
    }else{
      echo"<script> alert('EL empleado [$nombre] no se agrago correctamente'); location.href='../alta.php'; </script>";
    }
    mysqli_stmt_close($sentencia);
    mysqli_close($getconex);
}
?>