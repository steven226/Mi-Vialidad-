

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego</title>
    <link rel="stylesheet" href="css/Juego1.css">
</head>
<body>
    <header>
        <h1>Juego de adivinanza</h1>
        <p>¿Qué harias tu?</p>
    </header>

    <div class="container">
    <form action="/sumaPuntos/<?php echo e(Auth::user()->id); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <select name="dificultad_id" id="inputDificultadId">
            <?php $__currentLoopData = $hola; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dificultad_juego): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($dificultad_juego->puntaje_otorgado); ?>" name="select"><?php echo e($dificultad_juego->nombre_dificultad); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <section id="p0">
            <h3>1-¿Pondrías atencion cuando vas en la calle?</h3>
            <label>
                <input type="radio" value="1" name="p0" onclick="respuesta(0,this)"> Si
            </label>
            <label>
                <input type="radio" value="2" name="p0" onclick="respuesta(0,this)"> No
            </label>
        </section>

        <section id="p1">
            <h3>2-¿Hacia que lados debes voltaer cuando cruzas la calle?</h3>
            <label>
                <input type="radio" value="1" name="p1" onclick="respuesta(1,this)"> Derecha e Izquierda
            </label>
            <label>
                <input type="radio" value="2" name="p1" onclick="respuesta(1,this)"> Adelante y Atrás
            </label>
        </section>

        <section id="p2">
            <h3>3-¿Es correcto cruzar la calle cuando no estas en una esquina?</h3>
            <label>
                <input type="radio" value="1" name="p2" onclick="respuesta(2,this)"> Si 
            </label>
            <label>
                <input type="radio" value="2" name="p2" onclick="respuesta(2,this)"> No
            </label>
        </section>

        <section id="p3">
            <h3>4-Si la luz del semaforo es de color verde tu debes...</h3>
            <label>
                <input type="radio" value="1" name="p3" onclick="respuesta(3,this)"> Cruzar la calle
            </label>
            <label>
                <input type="radio" value="2" name="p3" onclick="respuesta(3,this)"> Esperar a que sea de color rojo
            </label>
        </section>

        <section id="p4">
            <h3>5-¿Es importante ir por la banqueta?</h3>
            <label>
                <input type="radio" value="1" name="p4" onclick="respuesta(4,this)"> Si porque la carretera es para los carros
            </label>
            <label>
                <input type="radio" value="2" name="p4" onclick="respuesta(4,this)"> No porque no me atropellan
            </label>
        </section>

        <button id = "btnTerminar" onclick="Corregir()">Terminar</button>
        <h2>Cantidad acertadas: <span id="resultado" name="puntos" method="post"></span></h2>
    </div>

    <script src="js/script1.js"></script>

    <p><a class="link" href="/">VOLVER</a></p>


</form>

</body>
</html><?php /**PATH C:\apache\htdocs\Mi-vialidad-main\resources\views/queharias.blade.php ENDPATH**/ ?>