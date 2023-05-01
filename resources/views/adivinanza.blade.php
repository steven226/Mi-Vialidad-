

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego</title>
    <link rel="stylesheet" href="css/Juego1.css">
    <link rel="stylesheet" href="css/normalize.css">
</head>
<body>
    <header>
        <span>Adivinanza</span>
        <p>¿Puedes saber el nombre de la señal?</p>
    </header>

    

    <div class="container">
        <form action="/sumaPuntos/{{Auth::user()->id}}" method="POST">
            @csrf
            @foreach ($dificultad_juego as $dificultad_juego)
            <option id="id_dificultad" value="{{$dificultad_juego->puntaje_otorgado}}" name="select">{{Auth::user()->dificultadUser}}</option>
            @endforeach
            <section id="p0">
                <img class="señales" src=img/crucepeaton.png>      
                <label>
                    <input type="radio" value="1" name="p0" onclick="respuesta(0,this)"> Cruce de peaton
                </label>
                <label>
                    <input type="radio" value="2" name="p0" onclick="respuesta(0,this)"> Cruce de carros
                </label>
            </section>

            <section id="p1">
                <img class="señales" src=img/Semaforo.png>
                <label>
                    <input type="radio" value="1" name="p1" onclick="respuesta(1,this)"> Semaforo delante
                </label>
                <label>
                    <input type="radio" value="2" name="p1" onclick="respuesta(1,this)"> Alto   
                </label>
            </section>

            <section id="p2">
                <img class="señales" src=img/escolar.png>
                <label>
                    <input type="radio" value="1" name="p2" onclick="respuesta(2,this)"> Gente trabajando 
                </label>
                <label>
                    <input type="radio" value="2" name="p2" onclick="respuesta(2,this)"> Zona escolar
                </label>
            </section>

            <section id="p3">
                <img class="señales" src=img/stop.jpg>
                <label>
                    <input type="radio" value="1" name="p3" onclick="respuesta(3,this)"> Señal de cuidado
                </label>
                <label>
                    <input type="radio" value="2" name="p3" onclick="respuesta(3,this)"> Señal para detenerse
                </label>
            </section>

            <section id="p4">
                <img class="señales" src=img/bici.jpg>
                <label>
                    <input type="radio" value="1" name="p4" onclick="respuesta(4,this)"> Camino de bicis
                </label>
                <label>
                    <input type="radio" value="2" name="p4" onclick="respuesta(4,this)"> Se puede andar en bici
                </label>
            </section>

            <section id="p5">
                <img class="señales" src=img/estacionarse.jpg>
                <label>
                    <input type="radio" value="1" name="p5" onclick="respuesta(5,this)"> Se usará Grua
                </label>
                <label>
                    <input type="radio" value="2" name="p5" onclick="respuesta(5,this)"> Prohibido estacionarse
                </label>
            </section>

            <section id="p6">
                <img class="señales" src=img/vuelta.png>
                <label>
                    <input type="radio" value="1" name="p6" onclick="respuesta(6,this)"> Vuelta no permitida
                </label>
                <label>
                    <input type="radio" value="2" name="p6" onclick="respuesta(6,this)"> Prohibido girar en direccion opuesta
                </label>
            </section>
            <input hidden type="number" id="record" name="record" method="post" >
            <input hidden type="text" id="nombre_juego" name="nombre_juego" method="post" value="Adivinanza" >
            <button id="btnTerminar" onclick="Corregir()">Terminar</button>
            <h2>Cantidad acertadas: <span id="resultado" name="puntos" method="post"></span></h2>
            
        </div>

    <script src="js/script1.js"></script>

    <p><a class="link" href="/">VOLVER</a></p>


</form>

</body>
</html>