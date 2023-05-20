<?php

require_once 'modelo/persona.php';

$p = new Persona();
$p->Nombre = 'Mauricio';
$p->Apellido = 'Bianchi';
$p->Email = 'noposee@gmail.com';
$p->Edad = 27;
$p->MostrarPropieades();