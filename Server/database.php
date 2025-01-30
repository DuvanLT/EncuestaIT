<?php
function connect(){
    $servername = "myencuestait-encuesta.e.aivencloud.com";
    $username = "avnadmin";
    $password = "AVNS_ctJdyLz9TTmN4uLDstm";
    $database = "defaultdb";
    $port = "21267";
    
    // Ruta al archivo CA certificate (ca.pem)
    $ca_cert = '/ca.pem';  // Cambia la ruta al archivo 'ca.pem'

    // Crear la conexión a MySQL con SSL
    $connection = new mysqli($servername, $username, $password, $database, $port);

    // Verificar si se pudo conectar correctamente
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Establecer la conexión SSL
    if (!$connection->ssl_set(NULL, NULL, $ca_cert, NULL, NULL)) {
        die("SSL connection failed: " . $connection->error);
    }

    return $connection;
}
?>
