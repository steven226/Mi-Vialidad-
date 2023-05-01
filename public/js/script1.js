//Cada pregunta cuenta con 2 respuestas, cada una cuenta con un valor que puede ser: '1' o '2'
let correctas = [1,1,2,2,1,2,1]; //Valor de las respuestas correctas
let opcion_elegida=[]; //String que guarda el valor de las respuestas seleccionadas

let cantidad_correctas=0; //Para guardar la cantidad de preguntas acertadas

let dificultad = document.getElementById('id_dificultad');//Obtiene el valor de la dificultad
let maxPreguntas = 0; //Variable para guardar el maximo de preguntas a contestar

//Ciclo para variar el juego segun la dificultad
switch(dificultad.textContent){
    case 'Facil':
        maxPreguntas = 3;
        facil();
        break;
    case 'Normal':
        maxPreguntas = 5;
        normal();
        break;
    case 'Dificil':
        maxPreguntas = 7;
        break
}

//Funcion para guardar las respuestas seleccionadas
function respuesta(num_pregunta,seleccionada){

    opcion_elegida[num_pregunta]=seleccionada.value;

    id="p" + num_pregunta;

    labels = document.getElementById(id).childNodes;


    seleccionada.parentNode.style.backgroudColor="#cec0fc";

    if(opcion_elegida.length==maxPreguntas && !opcion_elegida.includes(undefined)){
        mostrarBoton();
    }

}

//Funcion para mostrar la dificultad facil
function facil(){
    let p3 = document.getElementById('p3');
    let p4 = document.getElementById('p4');
    let p5 = document.getElementById('p5');
    let p6 = document.getElementById('p6');

    if (dificultad.textContent == 'Facil'){
        p3.style.display = 'none';
        p4.style.display = 'none';
        p5.style.display = 'none';
        p6.style.display = 'none';
    }

}

//Funcion para mostrar la dificultad Normal
function normal(){
    let p5 = document.getElementById('p5');
    let p6 = document.getElementById('p6');

    if (dificultad.textContent == 'Normal'){
        p5.style.display = 'none';
        p6.style.display = 'none';
    }

}

//Funcion para mostrar el boton de terminar al seleccionar todas las respuestas
function mostrarBoton(){
    let btnTerminar = document.getElementById('btnTerminar');
    btnTerminar.style.display='block';
    console.log(dificultad);
}

//Funcion para corregir las respuestas seleccionadas
function Corregir(){
    cantidad_correctas=0;
    for(i=0; i<correctas.length;i++){
        if(correctas[i]==opcion_elegida[i]){
            cantidad_correctas++;
        }
    }
    document.getElementById("resultado").innerHTML=cantidad_correctas;
    document.getElementById("record").value = cantidad_correctas;

}
function close_tab() {
    if (confirm("Do you want to close this tab?")) {
      window.close();
    }
  }