<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1,shrink-to-fit=no">
        <meta name="description" content="Jugar memorama en línea">
        <title>Memorama</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <form action="/sumaPuntos/<?php echo e(Auth::user()->id); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div>
            <?php $__currentLoopData = $dificultad_juego; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dificultad_juego): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option id="id_dificultad" value="<?php echo e($dificultad_juego->puntaje_otorgado); ?>" name="select"><?php echo e(Auth::user()->dificultadUser); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
         
            <main role="main" class="container-fluid" id="app">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center">Juego de memorama</h1>
                        
                    </div>
                </div>
                <div v-for="(fila, indiceFila) in memorama" :key="indiceFila"
                    class="row">
                    <div :key="indiceFila+''+indiceImagen" class="col-3"
                        v-for="(imagen, indiceImagen) in fila">
                        <div class="mb-3">
                            <img @click="voltear(indiceFila, indiceImagen)"
                                :class="{'girar': imagen.mostrar}"
                                :src="(imagen.mostrar ? imagen.ruta :
                                NOMBRE_IMAGEN_OCULTA)" class="card-img-top img-fluid
                                img-thumbnail">
                        </div>
                    </div>
                </div>
            </main>
            <div>
                <p><a class="link" href="/">VOLVER</a></p>
            </div>
            
            <button id="btnTerminar">Terminar</button>

        </form>
        
        
        <script src="./js/sweetalert2.all.min.js"></script>
        <script src="./js/vue.min.js"></script>
        <script src="./js/script.js"></script>
    </body>

</html><?php /**PATH C:\apache\htdocs\Mi-vialidad-main\resources\views/memo.blade.php ENDPATH**/ ?>