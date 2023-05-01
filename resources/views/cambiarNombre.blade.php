<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="css/Formulario.css">
	

</head>  
<body>
    <form class="formulario" action="/cambiarNombre/{{Auth::user()->id}}" method="POST">
        @csrf
        <h1>Actualiza el nombre</h1>
        <div class="contenedor">
            <span>Dificultad: </span>
            <select class="dificultad" name="dificultad_id" id="inputDificultadId">
                <!--Foreach que sirve para mostrar todas las dificultades que hay en la lista
                desplegable-->
                
                @foreach ($dificultad_juego as $dificultad_juego1)
                <option id="id_dificultad" value="{{$dificultad_juego1->nombre_dificultad}}">{{$dificultad_juego1->nombre_dificultad}}</option>
                @endforeach
            </select>
            <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
		    <input type="text" name="name" value="{{Auth::user()->name}}" required/>
            
            </div>
               
            <input type="submit" value="Confirmar" class="button">
            <p><a class="link" href="/">CANCELAR</a></p>
        </div>
    </form>
</body>
</html>