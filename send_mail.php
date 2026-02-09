<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Limpiar y validar los datos
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    
    $to = "cipher.node.9@proton.me";
    $subject = "Nuevo mensaje desde tu portafolio";
    $body = "Nombre: $name\nEmail: $email\n\nMensaje:\n$message";

    // Cabeceras del correo
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Enviar correo
    if(mail($to, $subject, $body, $headers)) {
        header("Location: index.html?success=1");
        exit;
    } else {
        header("Location: index.html?success=0");
        exit;
    }
} else {
    // Si alguien accede directamente al PHP sin enviar el formulario
    header("Location: index.html");
    exit;
}
?>
