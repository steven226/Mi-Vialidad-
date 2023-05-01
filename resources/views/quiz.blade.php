

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
    <form action="/sumaPuntos/{{Auth::user()->id}}" method="POST">
        @csrf
        
        @foreach ($dificultad_juego as $dificultad_juego)
            <option id="id_dificultad" value="{{$dificultad_juego->puntaje_otorgado}}" name="select">{{Auth::user()->dificultadUser}}</option>
            @endforeach
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
            <h3>3- ¿Por qué parte de la via deben circular los peatones?</h3>
            <label>
                <input type="radio" value="1" name="p2" onclick="respuesta(2,this)"> Por la ciclovia 
            </label>
            <label>
                <input type="radio" value="2" name="p2" onclick="respuesta(2,this)"> Por la banqueta
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

        <section id="p5">
            <h3>3-¿Es correcto cruzar la calle cuando no estás en una esquina?</h3>
            <label>
                <input type="radio" value="1" name="p5" onclick="respuesta(5,this)"> Si 
            </label>
            <label>
                <input type="radio" value="2" name="p5" onclick="respuesta(5,this)"> No
            </label>
        </section>

        <section id="p6">
            <h3>7-Cuando te bajas del camión, ¿por donde debes cruzar la calle?</h3>
            <label>
                <input type="radio" value="1" name="p6" onclick="respuesta(6,this)"> Por el paso de peatón mas cercano
            </label>
            <label>
                <input type="radio" value="2" name="p6" onclick="respuesta(6,this)"> Adelante o Atrás del camión
            </label>
        </section>
        <input hidden type="number" id="record" name="record" method="post" >
        <input hidden type="text" id="nombre_juego" name="nombre_juego" method="post" value="Quiz" >
        <button id = "btnTerminar" onclick="Corregir()">Terminar</button>
        <h2>Cantidad acertadas: <span id="resultado" name="puntos" method="post"></span></h2>
    </div>

    <script src="js/script1.js"></script>

    <p><a class="link" href="/">VOLVER</a></p>


</form>

</body>
</html>