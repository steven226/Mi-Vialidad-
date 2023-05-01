<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="css/Formulario.css">
	

</head>  
<body>
    <form class="formulario" action="<?php echo e(route('login')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <h1>Iniciar sesión</h1>
     <div class="contenedor">
     
         <div class="input-contenedor">
             <i class="fas fa-envelope icon"></i>
             <input type="email" placeholder="Correo Electronico" name="email">
         </div>
         
         <div class="input-contenedor">
            <i class="fas fa-key icon"></i>
            <input type="password" placeholder="Contraseña" name="password">
         </div>

         <input type="checkbox" name="recuerda"><span>Recuérdame</span><br>
         <input type="submit" value="Login" class="button">
         <p>¿No tienes una cuenta? <a class="link" href="<?php echo e(route('register')); ?>">Registrate </a></p>
     </div>
    </form>
</body>
</html><?php /**PATH C:\apache\htdocs\Mi-vialidad-main\resources\views/auth/login.blade.php ENDPATH**/ ?>