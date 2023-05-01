<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Juego serio Vial</title>
        <meta   name="description" content="Juego serio de educacion vial para niños de primaria"/>
        <meta   name="author" content="Steven"/>    
        <meta   name="keywords" content="Juego Vial"/>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/EstilosPrinc.css">
    </head>
    <body>
        
        <div class="botones">

                <a href="/cambiarNombre" class="button">
                   Cambiar nombre o dificultad
                </a> 
                <form action="<?php echo e(route('logout')); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                    <button class="salir">SALIR</button>
                </form>
            
        </div>
        
        <div class="datos">
            <p>!Hola otra vez 
                <?php echo e(Auth::user()->name); ?>¡
            </p>

            <p>Puntaje Total:
                <?php echo e(Auth::user()->puntaje_total); ?>

            </p>

            
            
        </div>

        <div class="datos">
            <p>Dificultad:
                <?php echo e(Auth::user()->dificultadUser); ?>

            </p>

            <div class=" recompensas">
                <a href="/recompensas" class="button">RECOMPENSAS</a>
            </div>
        </div>

        


        <header>
            <h1 class="TituloP">Aprende a identificar señales y a actuar como peatón</h1>
        </header>

        <div class="juegos">
    
            <section class="seccion">
    
                <article>
                    <a href="/adivinanza">  
                        <button type="button"><img src="https://img.freepik.com/vector-gratis/ninos-semaforo-senal-precaucion-normas-seguridad-vial-nino-escuela-dibujos-animados-cruzando-paso-peatones-calle-conjunto-vectores-educacion-pavimento_102902-5090.jpg"></button>
                    </a>

                    <h2>Adivina la señal</h2>
  
                    <script>
                        function alerta1(){
                            alert("En este juego se presentaran imagenes de señales viales y tendras que adividar el nombre de cada una");
                        }
                    </script>

                    <footer>
                        <button class="alerta" onclick="alerta1()">i</button>
                    </footer>
                    
                </article>
    
            </section>

            <section>

                <article>
                    <a href="/quiz">
                        <button type="button"><img src="https://www.autofacil.es/wp-content/uploads/2021/05/seguridadvialninos.jpg"></button>
                    </a>

                    <h2>¿Que harías tu?</h2>
                    
                    <script>
                        function alerta2(){
                            alert("En este juego se presentaran situaciones y deberas elegir que es lo que harias tu en esa situacion");
                        }
                    </script>

                    <footer>
                        <button class="alerta" onclick="alerta2()">i</button>
                    </footer>

                </article>

            </section>
            

            <section>

                <article>

                    <a href='/memo'>
                        <button type="button"><img src="https://az779572.vo.msecnd.net/screens-400/21a149b435194ad392aa785761e0a178"></button>
                    </a>

                    <h2>Memorama</h2>

                    <script>
                        function alerta3(){
                            alert("En este juego se mostraran pares de imagenes que tienes que memorizar y luego se ocultaran y al seleccionar una deberas encontrar donde está su par");
                        }
                    </script>

                    <footer>
                        <button class="alerta" onclick="alerta3()">i</button>
                    </footer>

                </article>

            </section>

            <section>

                <article>
                    <a href="/columnas">
                        <button type="button"><img src="https://www.techgames.com.mx/wp-content/uploads/2021/05/Educacion-Vial-ninos-Michelin-cuaderno.jpg"></button>
                    </a>

                    <h2>Relaciona las señales</h2>

                    <script>
                        function alerta4(){
                            alert("En este juego se mostraran nombres de señales viales e imagenes de las señales de manera desordenada, deberas de relacionar un nombre de una señal con la imagen de la señal");
                        }
                    </script>

                    <footer>
                        <button class="alerta" onclick="alerta4()">i</button>
                    </footer>

                </article>

            </section>

        </div>

        <footer class="pie">
            Derechos reservados 2022
        </footer>

    </body>
</html><?php /**PATH C:\apache\htdocs\Mi-vialidad-main\resources\views/inicio.blade.php ENDPATH**/ ?>