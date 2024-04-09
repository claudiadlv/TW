<?php
// Verificar si se han enviado los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Comprobar si el nombre de usuario y la contraseña son válidos
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validar credenciales
    if ($username === "admin" && $password === "admin123") {
        // Redirigir al usuario a la página de administrador
        header("Location: https://void.ugr.es/~claudiavieja2324/PracticaHTML/Ejercicios/ej9-recep.html");
        exit;
    } else {
        // Mostrar un mensaje de error si las credenciales son incorrectas
        echo "Nombre de usuario o contraseña incorrectos. Por favor, inténtalo de nuevo.";
    }
}
?>