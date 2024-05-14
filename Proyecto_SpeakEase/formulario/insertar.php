<?php
$conexion = mysqli_connect("localhost", "root", "", "asesorias_speakease");

    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $fecha = $_POST["fecha_nacimiento"];
    $correo = $_POST["correo"];

if(!$conexion){
    echo"Error en la conexion con el servidor";
}

    $insertarSQL = "INSERT INTO usuarios_inscritos(nombres, apellidos, fecha_nacimiento, correo) VALUES ('$nombres', '$apellidos',
    '$fecha', '$correo')";
    $resultado = mysqli_query($conexion, $insertarSQL);
    if($resultado){
        echo "<script>alert('Se ha enviado su informe'); window.location='index.html'</script>";
    }   else {
        printf("Errormessage: %s\n", mysqli_error($conexion));
    }
    


