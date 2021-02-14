<?php
/*Consantes es un contenedor que no puede modificar su información*/
define('nombre', 'Tomas Flores');
define('web','php@gmail.com');
echo '<h1>'.web.'</h1>';
/*Constantes predefinidas*/
/*Estencion de PHP*/
/*Muestra que sistema operativo estamos unasndo
en este caso es Windows*/
echo PHP_OS.'<BR>';
echo PHP_EXTENSION_DIR."<BR>";
/*Muestra donde se encuentra la linea de código*/
echo 'linea e codigo '.__LINE__.'<br>';
/*Muestra donde se guarda la ruta del archivo donde estamos trabajando el codigo*/
echo 'ruta de donde se guarda el archivo '.__File__.'<br>';
/*Dentro de la función muestra como se llama la función que se utiliza*/
function HolaMundo(){ 
echo __Function__;
}


HolaMundo();














?>