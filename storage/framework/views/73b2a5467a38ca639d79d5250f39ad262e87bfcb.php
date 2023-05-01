<!doctype html>
<!--
    Programado por Luis Cabrera Benito 

  ____          _____               _ _           _       
 |  _ \        |  __ \             (_) |         | |      
 | |_) |_   _  | |__) |_ _ _ __ _____| |__  _   _| |_ ___ 
 |  _ <| | | | |  ___/ _` | '__|_  / | '_ \| | | | __/ _ \
 | |_) | |_| | | |  | (_| | |   / /| | |_) | |_| | ||  __/
 |____/ \__, | |_|   \__,_|_|  /___|_|_.__/ \__, |\__\___|
         __/ |                               __/ |        
        |___/                               |___/         
    
    
    Blog:       https://parzibyte.me/blog
    Ayuda:      https://parzibyte.me/blog/contrataciones-ayuda/
    Contacto:   https://parzibyte.me/blog/contacto/
-->
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1,shrink-to-fit=no">
        <meta name="description" content="Jugar memorama en línea">
        <title>Memorama</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body style="background-color:#BC1631;">
        <form action="../updPuntos.php" method="POST">

            <main role="main" class="container-fluid" id="app">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center">Juego de memorama</h1>
                        <p>
                            <span class="h5">Intentos: </span>
                            <script>
                                var intentos = 1;
                                var MAXIMOS_INTENTOS = 8;
                                var aciertos = 0;
                            </script>
                            <?php echo e(intentos); ?>/<?php echo e(MAXIMOS_INTENTOS); ?>&nbsp;<span class="h5">Aciertos:
                            </span> <?php echo e(aciertos); ?>

                        </p>
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
                <p><a class="link" href="/modular/index.php">VOLVER</a></p>
            </div>
            
            <button id="btnTerminar">Terminar</button>

        </form>
        
        <script src="/js/script.js"></script>
        <script src="/js/sweetalert2.all.min.js"></script>
        <script src="/js/vue.min.js"></script>
        
    </body>

</html><?php /**PATH C:\apache\htdocs\Mi-vialidad-main\resources\views/memorama.blade.php ENDPATH**/ ?>