<!--Forma Valida-->
<? echo "<br><p>Hola Mundo</p>"; ?>

<!--Forma Ideal-->
<?php
echo "<h2>Hola Mundo</h2>";
print("<h2>Hello World</h2>");
echo print "<h2>Hello Suiza</h2>";
echo "<br>";
echo print "<b>Hola</b>", " ", "<i>Suiza</i>";
echo "<br>";

// Esto es un comentario

// Esta Tambien es un comentario

/*
Esto es un comentario
de varias Lineas
*/
echo "<hr>";

// VARIABLES
$numero = 9;
$nombre = "Miranda";
$nombre_completo = "Miranda Leyva";
$edad = 23;

echo "<br>";

echo $numero, $nombre, $nombre_completo;
echo '
<style>
  body{
    background-color: blueviolet;
    color: white;
    margin: 50px;
    justify-content: center;
    text-align: left;
  }
    .bg-black {
      background-color: black;
    } 

    .text-white {
      color: white;
    }
</style>

    <p class="text-white bg-black">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus incidunt sed eveniet nihil distinctio odio qui error rem. Quae sit asperiores recusandae. Quisquam distinctio fuga eaque. Nihil quia velit nisi.
      </p>
      <script>console.log("Hola Mundo en PHP");</script>
';
echo "<hr>";

// Estas son las distintas variantes de INTERPOLAR VARIABLES

echo "<p>Hola, mi nombre es $nombre y tengo $edad años</p><br>";
echo "<p>Hola, mi nombre es {$nombre} y tengo {$edad} años</p><br>";


// CONCATENACION DE VARIABLES
echo '<p>Hola, mi nombre es $nombre y tengo $edad años</p><br>';
echo '<p>Hola, mi nombre es ' . $nombre . ' y tengo ' . $edad . ' años</p><br>';

$nombre_completo = "Miranda Leyva Delgado";
echo "<p>{$nombre_completo}</p>";


// CONSTANTES
// Primera Variante
define("SUPER_PASSWORD", "qwerty");
echo "<p>" . SUPER_PASSWORD . "</p>";

// Segunda Variante desde PHP 7.1
const SUPER_USER = "MimiLaMejor123!";
echo "<p>" . SUPER_USER . "</p>";
echo "<hr>";

// VARIABLES GLOBALES
// https://www.php.net/manual/es/language.variables.superglobals.php
echo $_SERVER["DOCUMENT_ROOT"];
echo "<br>";
echo $_SERVER["DOCUMENT_ROOT"];
echo "<br>", "<hr>";

// CONSTANTES MAGICAS
// https://www.php.net/manual/es/language.constants.magic.php
echo __FILE__;
echo "<br>", "<hr>";

// TIPOS DE DATOS EN PHP
// PRIMITIVOS
// Integer
$numeros_positivos = 19;
$numeros_negativos = -19;
$cero = 0;

echo "<br>";

echo $numeros_positivos, "<br>", $numeros_negativos, "<br>", $cero, "<br>";

echo gettype($numeros_positivos);
echo "<br>";
echo gettype($numeros_negativos);
echo "<br>";
echo gettype($cero);
echo "<br>", "<hr>";

// FLOATS
$precio = 34.65;
$temperatura = -5.5;
$valor_cientifico = 1.23e4;

echo $precio, "<br>", $temperatura, "<br>", $valor_cientifico, "<br>";
echo gettype($precio), "<br>", gettype($temperatura), "<br>", gettype($valor_cientifico), "<br>";
echo "<hr>";

// STRINGS
$saludo = "HOLA MUNDO";
$nombre = 'Miranda Leyva';

echo $saludo, "<br>", gettype($saludo), "<br>", $nombre, "<br>", gettype($nombre);
echo "<hr>";

// BOOLEANS
$es_verdadero = true;
$es_falso = false;

echo $es_verdadero . "<br>" . $es_falso . "<br>", gettype($es_verdadero), "<br>", gettype($es_falso), "<br>";

var_dump($es_verdadero);
echo "<br>";
var_dump($es_falso);
echo "<br>";
var_dump($saludo);
echo "<br>", "<hr>";

// TIPOS COMPUESTOS / COMPLEJOS
// ARRAY
$arreglo_posicional = array("Hola", false, 90, "Adios");
var_dump($arreglo_posicional);
echo $arreglo_posicional;
echo "<br>";
echo $arreglo_posicional[0], "<br>", $arreglo_posicional[3], "<br>";
echo count($arreglo_posicional), "<br>";

$colores = ["Rojo", "Verde", "Azul"];

var_dump($colores);

echo "<br>", gettype($arreglo_posicional), "<br>", gettype($colores), "<br>";
echo "<hr>";

// ARRAY ASOCIATIVO
$arreglo_asociativo = [
  "nombre" => "Mimi",
  "edad" => 23,
  "pais" => "España"
];

var_dump($arreglo_asociativo);
echo "<br>", $arreglo_asociativo["nombre"], "<br>", $arreglo_asociativo["edad"], "<br>", $arreglo_asociativo["pais"];
echo count($arreglo_asociativo), "<br>";

$arreglo_asociativo_2 = array(
  "nombre" => "Pedro",
  "edad" => 35,
  "pais" => "Argentina"
);
var_dump($arreglo_asociativo_2);
echo "<hr>";

// Documentos de los Arrays https://www.php.net/manual/es/ref.array.php

// OBJETOS
// Este tema queda pendiente hasta ver el tema de las funciones y el paradigma de la Programacion Orinetada a Objetos

// RECURSOS
/***
  El tipo de dato recurso es un puntero a un recurso externo, como una conexion a una base de datos o un archivo abierto. 
  No se puede manipular directamente y se utiliza para interactuar con recursos externos.
 ***/
// Ejemplo: https://www.php.net/manual/es/function.mysqli-connect.php


// NULL
$sin_valor;
echo "<br>", $sin_valor, "<br>";
var_dump($sin_valor);
echo "<hr>";

$nula = null;
echo "<br>", $nula, "<br>";
var_dump($nula);

// Conversion de Tipo de Datos
// Conversion Implicita
$entero = 5;
$flotante = 7.36;
$resultado = $entero + $flotante;
echo "<br>";
var_dump($resultado);
echo "<br>";

// Conversion Explicita
$venta_cadena = "1099";
$venta_entero = intval($venta_cadena);
echo "<br>";
var_dump($venta_cadena);
echo "<br>";
var_dump($venta_entero);
echo "<br>";


// Type Casting
$calificacion_decimal = 9.75;
$calificacion_entero = (int)$calificacion_decimal;
var_dump($calificacion_decimal);
echo "<br>";
var_dump($calificacion_entero);
echo "<br>", "<hr>";

// Tipos de Operadores
$a = 10;
$b = 5;
// Operadores Aritmeticos: +, -, *, /, %, **
echo $a + $b, "<br>";
echo $a - $b, "<br>";
echo $a * $b, "<br>";
echo $a / $b, "<br>";
echo $a % $b, "<br>";
echo $a ** $b, "<br>", "<hr>";

// Operadores de Asignacion: =, +=, -=, *=, /=, %=, **=
echo $a += 10, "<br>";
echo $a -= 10, "<br>";
echo $a *= 10, "<br>";
echo $a /= 10, "<br>";
echo $a %= 10, "<br>";
echo $a **= 10, "<br>";
echo "<hr>";

// Operadores de Concatenacion: ., .=
$texto_1 = "Hola";
$texto_2 = "Mundo";

echo $texto_1 . $texto_2, "<br>";
$texto_1 .= " Mundo desde PHP";
echo $texto_1, "<br>", "<br>";

// Operadores de Comparacion: ==, ===, !=, <>, !==, <, >, <=, >=, <=>
var_dump(5 == 5);     // Igual,	Compara si los valores son iguales (sin importar el tipo).
var_dump("5" == 5);
var_dump("5" === 5);
var_dump(5 === 5);    // Idéntico:	Compara si valores y tipos son iguales.
var_dump(5 != 5);     // Diferente:	Compara si los valores son distintos.
var_dump(5 != 4);
var_dump(5 <> 4);     // Diferente:	Igual que !=, solo otra forma de escribirlo.
var_dump(5 <> 5);
var_dump(5 !== 4);    // No idéntico:	Compara si valores o tipos son diferentes.
var_dump(5 < 4);      // 	Menor que:	Verifica si el valor de la izquierda es menor que el de la derecha.
var_dump(5 > 4);      // Mayor que:	Verifica si el valor de la izquierda es mayor que el de la derecha.
var_dump(5 <= 4);     // Menor o igual:	Verifica si es menor o igual.
var_dump(5 >= 4);     // 	Mayor o igual:	Verifica si es mayor o igual.
var_dump(5 <=> 4);    // Nave espacial:	Devuelve -1, 0 o 1 si el valor izquierdo es menor, igual o mayor que el derecho. Ideal para ordenar.
echo "<br>", "<hr>";

// Operadores de Incremento y Decremento
$d = 5;
++$d;
echo "<br>";
echo $d;
echo "<br>";
$d++;
echo "<br>";
echo $d;
echo "<br>";

$e = 10;
--$e;
echo "<br>";
echo $e;
$e--;
echo "<br>";
echo $e;
echo "<hr>";

// Operadores Logicos: and, &&, or, ||, not, !, xor
// and, todas las expresiones tienen que ser verdaderas
var_dump(4 < 5 && 5 < 6 and 5 > 3);
// or, con que una expresion sea verdadera valida el or
var_dump(14 < 5 || 5 < 6 or 5 > 3);
// xor, (eXclusive or) valida cuando solo una expresion sea verdadera
var_dump(14 < 5 xor 5 < 6 xor 5 > 3);
// var_dump(!true);
// var_dump(!false);
echo "<br>", "<br>";

// Operador Ternario  ?: y de Fusion Nulo (Nul Coalescing)??
$age = 25;
$tipo_persona = ($age >= 18) ? "Eres mayor de Edad" : "Eres menor de Edad";
echo $tipo_persona;
echo "<br>";

$name = "Miranda";
$user = $name ?? "invited";
echo $user;
echo "<br>";

// Operador de Control de Errores: @
$archivo = @file("hola.txt");

// Operadores de Bit a Bit: &, |, ^, ~, <<, >>
$f = 10; // 1010 en binario
$g = 34; // 100010 en binario
$h = $f & $g; // 00010 en binario
echo "<hr>";
echo $h;
echo "<br>";

$i = 4; // 100 en binario
$desplazamiento = 2;
$j = $i << $desplazamiento;
echo "<br>";
echo $j; // 10000
echo "<hr>";

// ESTRUCTURAS DE CONTROL

// ESTRUCTURAS CONDICIONALES

// if - else
$age = 32;

if ($age >= 18) {
  echo "Tu edad es {$age} años,";
  echo "<br>";
  echo " por lo tanto eres Mayor de Edad";
} else {
  echo "Tu edad es {$age} años,";
  echo "<br>";
  echo " por lo tanto eres Menor de Edad";
}
echo "<br>", "<hr>";

/*
  Dejame Dormir 0hrs - 5hrs
  Buenos dias 6hrs - 11hrs
  Buenas tardes 12hrs - 18hrs
  Buenas noches 19hrs - 23hrs
*/

// if - else if - else
$hora = 21;

if ($hora <= 5) {
  echo "Dejame Dormir";
} else if ($hora >= 6 && $hora <= 11) {
  echo "Buenos dias";
} else if ($hora >= 12 && $hora <= 18) {
  echo "Buenas tardes";
} else if ($hora >= 19 && $hora <= 23) {
  echo "Buenas noches";
} else {
  echo "Error la hora es incorrecta";
}



// ESTRUCTURAS REPETITIVAS








?><!--La Etiqueta de cierre solo se usa, si en el codigo vamos a integrar HTML o algo por el estilo.
De otro modo es mejor no cerrar la etiqueta-->