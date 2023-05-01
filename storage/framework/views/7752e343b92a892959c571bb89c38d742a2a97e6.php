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
    <form class="formulario" action="/cambiarNombre/<?php echo e(Auth::user()->id); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <h1>Actualiza el nombre</h1>
        <div class="contenedor">
            <span>Dificultad: </span>
            <select class="dificultad" name="dificultad_id" id="inputDificultadId">
                <!--Foreach que sirve para mostrar todas las dificultades que hay en la lista
                desplegable-->
                
                <?php $__currentLoopData = $dificultad_juego; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dificultad_juego1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option id="id_dificultad" value="<?php echo e($dificultad_juego1->nombre_dificultad); ?>"><?php echo e($dificultad_juego1->nombre_dificultad); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
		    <input type="text" name="name" value="<?php echo e(Auth::user()->name); ?>" required/>
            
            </div>
               
            <input type="submit" value="Confirmar" class="button">
            <p><a class="link" href="/">CANCELAR</a></p>
        </div>
    </form>
</body>
</html><?php /**PATH C:\apache\htdocs\Mi-vialidad-main\resources\views/cambiarNombre.blade.php ENDPATH**/ ?>