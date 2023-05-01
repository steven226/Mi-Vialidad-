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
        
            @foreach ($canjeadas as $canjeada)
                <section>

                    <article>
                        
                            <button id="btn" type="button">
                                <img id="Bloqueada" src="{{$canjeada->imagenCanjeada}}">
                            </button>
                        
                        <h2>{{$canjeada->nombreCanjeada}}</h2>

                        <script>
                            function alerta1(descripcion){
                                alert(descripcion);
                            }
                        </script>

                        <footer>
                            <a class="alerta" onclick="alerta1('{{$canjeada->descripcionCanjeada}}')">Info</a>
                        </footer>
                        
                    </article>

                </section><!--Termina una recomepensa canjeada-->
            @endforeach
        </div><!--Termina Grid de las recompensas canjeadas-->
    </body>
</html>