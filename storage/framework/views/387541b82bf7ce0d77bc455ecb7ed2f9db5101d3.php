<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/EstilosPrinc.css">
    <title>Recompensas</title>
</head>
    <body>
        <div class="botones">

            <a href="/" class="button">
            Volver
            </a> 

            <a href="/canjeadas" class="button">
                Mis Recompensas
            </a> 
        
        </div><br>
        
        <!--Gid de las recompensas-->
        <div class="grid">
        
            <?php $__currentLoopData = $recompensas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recompensa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <form class="formulario" action="/canjear/<?php echo e($recompensa->id); ?>" method="POST">
                <?php echo csrf_field(); ?>
                    
                    
                        <section>

                            <article>
                                <span>Número: </span><input type="text"  id="idrecompensa" name="idrecompensa"  value="<?php echo e($recompensa->id); ?>" readonly><br>

                                <button id="btn" type="button">
                                    <img id="Bloqueada" src="<?php echo e($recompensa->imagenRecompensa); ?>">
                                </button>

                                <h2><?php echo e($recompensa->nombreRecompensa); ?></h2>

                                <span>Costo: </span><input type="text"  id="Puntos" name="Puntos" class="Precio" value="<?php echo e($recompensa->costoRecompensa); ?>" readonly><span> Puntos</span>

                                <input  type="submit" value="COMPRAR" class="button comprar">
                                
                            </article>

                        </section><!--Termina una recomepensa -->

                    
            </form>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div><!--Termina Grid de las recompensas -->
    
    </body>
</html><?php /**PATH C:\apache\htdocs\Mi-vialidad-main\resources\views/recompensas.blade.php ENDPATH**/ ?>