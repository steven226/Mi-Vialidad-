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
    <form class="formulario" action="<?php echo e(route('register')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <h1>Registrate</h1>
        <div class="contenedor">
     
            <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
		        <input type="text" name="name" placeholder="Nombre de usuario" required />
            </div>

            <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i>
		        <input type="email" name="email" placeholder="Email" required/>
            </div>
         
            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" placeholder="Contraseña" name="password" required >
            </div>

            <div class="input-contenedor">
                <i class="fas fa-lock icon"></i>
                <input type="password" placeholder="Confirma la Contraseña" name="password_confirmation" required>
            </div>
         
            <input type="submit" value="Registrate" class="button">
            <p>¿Ya tienes una cuenta?<a class="link" href="<?php echo e(route('login')); ?>"> Iniciar Sesion</a></p>
        </div>
    </form>
</body>
</html><?php /**PATH C:\apache\htdocs\Mi-vialidad-main\resources\views/auth/register.blade.php ENDPATH**/ ?>