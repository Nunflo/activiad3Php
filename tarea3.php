<?php
//! Problema de Lista Invertida:
function invertirArray($array) {
    $nuevoArray = array(); 
    
    for ($i = count($array) - 1; $i >= 0; $i--) {
        
        $nuevoArray[] = $array[$i];
    }
    
    return $nuevoArray; 
}


$arrayOriginal = array(1, 2, 3, 4, 5);
$arrayInvertido = invertirArray($arrayOriginal);

echo "Array original:";
print_r($arrayOriginal);
echo "<br>";

echo "Array invertido:";
print_r($arrayInvertido);
echo "<br>";

//! Problema de Suma de Números Pares:
function sumarNumerosPares($array) {
    $suma = 0;
    foreach ($array as $numero) {
        
        if ($numero % 2 == 0) {
            $suma += $numero; 
        }
    }
    return $suma; 
}

$arrayNumeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

echo "La suma de los números pares en el array es: " . sumarNumerosPares($arrayNumeros);
echo "<br>";

//! Problema de Frecuencia de Caracteres.

function calcularFrecuenciaCaracteres($cadena) {
    $frecuencia = array();
    
    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = $cadena[$i];
        
        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++;
        } else {
            $frecuencia[$caracter] = 1;
        }
    }
    
    return $frecuencia;
}

$cadena = "Hola mundo";
$resultado = calcularFrecuenciaCaracteres($cadena);

foreach ($resultado as $caracter => $frecuencia) {
    echo "El carácter '$caracter' aparece $frecuencia veces.<br>";
}

//! Problema de Bucle Anidado

$altura = 5;

for ($i = 1; $i <= $altura; $i++) {

    for ($espacios = $altura - $i; $espacios > 0; $espacios--) {
        echo "&nbsp;"; // Utilizamos el código HTML para un espacio en blanco en la salida HTML
        // La entidad &nbsp; (del inglés Non Breaking Space que significa espacio sin ruptura) sirve para representar en HTML un espacio en blanco
    }

    for ($asteriscos = 1; $asteriscos <= 2 * $i - 1; $asteriscos++) {
        echo "*";
    }
  
    echo "<br>"; 
}

?>
