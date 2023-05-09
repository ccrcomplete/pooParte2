<?php

include_once('Persona.php');

//creamos el objeto con los valores que se definen en el constructor
$persona = new Persona('juan', 'lopez', 18);

//Mostramos por pantalla loa valores
echo $persona->saludar();

//destruimos el objeto
unset($persona);