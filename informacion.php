<?php
$identificacion = $_POST['Identificacion'];
$nomApellidos   = $_POST['NomApellidos'];
$cargo          = $_POST['cargo'];
$salario        = $_POST['salario'];

echo "La identificación del empleado es: " . $identificacion . "<br>";
echo "Los nombres y apellidos del empleado son: " . $nomApellidos . "<br>";
echo "El cargo del empleado es: " . $cargo . "<br>";
echo "El salario del empleado es: " . $salario . "<br>";
?>
