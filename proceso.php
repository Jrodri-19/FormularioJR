<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir y procesar los datos del formulario
    $nombre = $_POST['Nombre'];
    $apellidos = $_POST['Apellido'];
    $nacimiento = $_POST['Nacimiento'];
    $ocupacion = $_POST['Ocupacion'];
    $celular = $_POST['Celular'];
    $email = $_POST['Email'];
    $nacionalidad = $_POST['Nacionalidad'];
    $nivel_ingles = $_POST['Nivel_de_ingles'];
    $lenguajes = isset($_POST['Lenguaje']) ? implode(", ", $_POST['Lenguaje']) : '';
    $aptitudes = $_POST['Aptitud'];
    $habilidades = isset($_POST['habilidades']) ? implode(", ", $_POST['habilidades']) : '';
    $perfil = $_POST['perfil'];

    // Insertar los datos en la base de datos
    $query = "INSERT INTO tabla_cv(nombre, apellidos, fecha_nacimiento, ocupacion, celular, email, nacionalidad, nivel_ingles, lenguajes, aptitudes, habilidades, perfil) VALUES ('$nombre', '$apellidos', '$nacimiento', '$ocupacion', '$celular', '$email', '$nacionalidad', '$nivel_ingles', '$lenguajes', '$aptitudes', '$habilidades', '$perfil')";
    
    if (mysqli_query($conn, $query)) {
        echo "Datos insertados correctamente.";
    } else {
        echo "Error al insertar datos: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Error al procesar el formulario.";
}
?>
