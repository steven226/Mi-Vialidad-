<!DOCTYPE html>
<html>

<head>
    <meta charset="utf8">
    <link rel="stylesheet" href="css/Juego1.css">
</head>
   
    <form action="/sumaPuntos/{{Auth::user()->id}}" method="POST">
         @csrf
         <div>
            @foreach ($dificultad_juego as $dificultad_juego)
            <option value="{{$dificultad_juego->puntaje_otorgado}}" name="select">{{Auth::user()->dificultadUser}}</option>
            @endforeach 
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

</html>