<!DOCTYPE html>
<html>

<head>
    <meta charset="utf8">
    <link rel="stylesheet" href="css/Juego1.css">
</head>
   
    <form action="/sumaPuntos/<?php echo e(Auth::user()->id); ?>" method="POST">
         <?php echo csrf_field(); ?>
         <div>
            <?php $__currentLoopData = $dificultad_juego; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dificultad_juego): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($dificultad_juego->puntaje_otorgado); ?>" name="select"><?php echo e(Auth::user()->dificultadUser); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        </div>
        <div class="container-fluid" style="width: 100%;z-index:1 ">
            <div class="row">

                <section class="objetivos col-md-8" style="border:1px solid grey;margin-top:15px;margin-left:15px;">
                    <div class="row">
                        <article class="intro col-md-12">
                            <h2>Relacionar colummnas </h2>
                                   <p> <center>Relaciona la Señal con su descripcion . </center></p>
                            <<iframe src='https://es.educaplay.com/recursos-educativos/12169422-relaciona_las_senales.html' width='100%' height='690' frameborder='0'></iframe><a href='https://es.educaplay.com/recursos-educativos/12169422-relaciona_las_senales.html'>Seguridad peatonal </a>
                    </div>
                </section>
            </div>
        </div>

        <div>
            <a class="volver" href="/">VOLVER</a>
        </div>

        <input type="submit" value="Terminar" class="linkTer">


        <script src="js/script1.js"></script>
    </form>

    
</body>

</html><?php /**PATH C:\apache\htdocs\Mi-vialidad-main\resources\views/columnas.blade.php ENDPATH**/ ?>