
<?php

class mysqlconex{
    public function conex(){
    $conexion=mysqli_connect("localhost","root","","siyeca");
    return $conexion;
 }
}

?>