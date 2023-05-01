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
        
            @foreach ($recompensas as $recompensa)

            <form class="formulario" action="/canjear/{{$recompensa->id}}" method="POST">
                @csrf
                    
                    
                        <section>

                            <article>
                                <span>Número: </span><input type="text"  id="idrecompensa" name="idrecompensa"  value="{{$recompensa->id}}" readonly><br>

                                <button id="btn" type="button">
                                    <img id="Bloqueada" src="{{$recompensa->imagenRecompensa}}">
                                </button>

                                <h2>{{$recompensa->nombreRecompensa}}</h2>

                                <span>Costo: </span><input type="text"  id="Puntos" name="Puntos" class="Precio" value="{{$recompensa->costoRecompensa}}" readonly><span> Puntos</span>

                                <input  type="submit" value="COMPRAR" class="button comprar">
                                
                            </article>

                        </section><!--Termina una recomepensa -->

                    
            </form>
            @endforeach

        </div><!--Termina Grid de las recompensas -->
    
    </body>
</html>