

<?php

# Variables por valor

$numero = 8; // Número entero
$nombre ="Diego"; // Cadena de Texto
$altura = 1.72; // número decimal
$edad = 22;

echo $edad;
echo $nombre = "Diego";
echo $NOMBRE = "Alejandro";

# Variables por Referencia

$nombre = "Ana";
$name = &$nombre;

$nombre = "Andrea";

echo $nombre;
echo $name;

# Variables predefinidas
# Variable global
	// ámbito local

/*function prueba() {
	$x = 5;
	echo "variable: $x";
}
prueba ();
*/

# Variable global
	// ámbito global
/*
$edad = 41;

function prueba() {
	global $edad;
	$edad = 22;
}
prueba();

echo $edad;
*/

/*
$altura = 141;

function prueba()
{
	$GLOBALS ['altura'] =172;
}

prueba ();
echo $altura;
*/
// variables estáticas

function prueba() {

	static $x = 0;
	echo $x;
	$x++;
}

prueba ();
prueba ();
prueba ();

// Variables constantes
	# const
	# define

const ESTUDIANTE = "Alexis Santana";

echo ESTUDIANTE;

define ("PROFESOR", "Diego Alejandro Palacio Valencia");

echo PROFESOR;

?>



<?php

// Ejercicios con variables

$nombre = "Alexis Santana Rodriguez";
$correo = "alexis.santana.r@gmail.com";

//echo "$nombre $correo"
echo $nombre." ".$correo

?>