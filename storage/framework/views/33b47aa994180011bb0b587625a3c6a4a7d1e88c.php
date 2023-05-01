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
                Inicio
            </a> 
            <a href="/recompensas" class="button">
                VOLVER
            </a>
        
        </div><br>
        
        <!--Gid de las recompensas canjeadas-->
        <div class="grid">
        
            <?php $__currentLoopData = $canjeadas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $canjeada): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <section>

                    <article>
                        
                            <button id="btn" type="button">
                                <img id="Bloqueada" src="<?php echo e($canjeada->imagenCanjeada); ?>">
                            </button>
                        
                        <h2><?php echo e($canjeada->nombreCanjeada); ?></h2>

                        <script>
                            function alerta1(descripcion){
                                alert(descripcion);
                            }
                        </script>

                        <footer>
                            <a class="alerta" onclick="alerta1('<?php echo e($canjeada->descripcionCanjeada); ?>')">Info</a>
                        </footer>
                        
                    </article>

                </section><!--Termina una recomepensa canjeada-->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div><!--Termina Grid de las recompensas canjeadas-->
    </body>
</html><?php /**PATH C:\apache\htdocs\Mi-vialidad-main\resources\views/canjeadas.blade.php ENDPATH**/ ?>