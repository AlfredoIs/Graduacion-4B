<?php
  
include("conexion.php");

$sentencia = 'SELECT Nombre, contrasena, email, lugares FROM usuarios';
$resultado = $conexionBD->query($sentencia);

//arreglo asociativo
$usuarios =array();
while($fila = mysqli_fetch_assoc($resultado)){
    $usuarios[]=$fila;
}
//
echo "<table>
    <tr>
        
        <th>Nombre</th>
        <th>Contraseña</th>
        <th>Email</th>
        <th>Lugares Reservados</th>
        
    </tr>";




foreach($usuarios as $usuario){
    $Nombre = $usuario["Nombre"];
    $contrasena = $usuario["contrasena"];
    $email = $usuario["email"];
    $lugares = $usuario["lugares"];

    echo "<tr>
        <td>$Nombre</td>
        <td>$contrasena</td>
        <td>$email</td>
        <td>$lugares</td>
    </tr>";
}



var_dump($resultado);





?>