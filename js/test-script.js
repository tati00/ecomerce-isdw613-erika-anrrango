/** @format */

function suma(a, b) {
    return a + b;
}

console.log("Hola Mundo: " + suma(2, 3));

function inicializePage1(){
    console.log("Onload Completed")
    console.log(navigator.userAgent) //navegador en uso
    console.log(navigator.language) //lenguaje del navegador
    console.log(navigator.languages) //arreglo de lenguajes configurados

    //TAREA PARA LA PRÁCTICA
    //implementar la funcionalidad del teclado
    //    console.log(navigator.ap)
    //crear un input text con algun texto predefinido -> un botón "COPIAR" -> copie en el cliboard
    //pegar el texto en un notepad, en algun eleento visual que permita comprobar que se ha copiado
}