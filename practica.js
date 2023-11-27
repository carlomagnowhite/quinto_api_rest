var cadena = '{"mensaje":"hola mundo"}';
var numero = 20;
var objeto = '{"nombre" : "marlon","apellido" : "masabanda", "edad" : 22}';
//var objeto = {"nombre" : "marlon","apellido" : "masabanda", "edad" : 22};
var arreglo = ["lunes", "martes", "miercoles", "jueves", "viernes"];
var bol = true;
console.log(cadena);
console.log(numero);
console.log(objeto);
console.log(arreglo);
console.log(bol);

//combinacion de tipos de datos

var persona =[{
    "nombre" : "marlon",
    "apellido" : "masabanda",
    "edad" : 22,
    "trabajo" : true,
    "coloresFavoritos" : ["azul","rojo"],
    "educacion" : {"primaria" : "San Leonardo Murialdo",
                   "secundaria" : "Mario Cobo Barona",
                   "superior" : "UTA"},
    "genero" : "m" 
}];
console.log(persona);
//console.log(persona.coloresFavoritos[1])
//console.log(persona.educacion.primaria)

//parse() sirve para String de Json a un objeto 
var objeto_Json = JSON.parse(cadena);
console.log(objeto_Json);

//stringify() Convertir un objeto de javascript a JSON

var JSON_objeto = JSON.stringify(objeto);
console.log(JSON_objeto); //los slash que salen le da la pauta a otros lenguajes para que sepan que es un objeto

//stringify() convertir un array a JSON

var array_JSON = JSON.stringify(arreglo);
console.log(array_JSON);

// de JSON a array

var JSON_array = JSON.parse(array_JSON);
console.log(JSON_array);

// de numero JSON

var num = 15;
var num_JSON = JSON.stringify(num);
console.log(num_JSON);

//de Json a numero

var JSON_num = JSON.parse(num_JSON);
console.log(JSON_num);

//objeto a JSON

var object_prueba = {
    "nombre" : "Marlon",
    "apellido" : "Masabanda",
    "edad" : 21
};

var objeto_JSON = JSON.stringify(object_prueba);
console.log(objeto_JSON);

//JSON a objeto

var JSON_OBJETO1 = '{"nombre":"Marlon","apellido":"Masabanda","edad":21}';
var OBJETO_JSON1 = JSON.parse(JSON_OBJETO1);
console.log(OBJETO_JSON1); 