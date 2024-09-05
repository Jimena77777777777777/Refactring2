<?php  

require '../vendor/autoload.php';  

use App\HtmlElement;  

$element = new HtmlElement('p',[],'Este es el contenido');  

echo htmlentities($element->render(), ENT_QUOTES,'UTF-8');

$element = new HtmlElement('p',['id'=> 'my paragraph'],'Este es el contenido');  

echo htmlentities($element->render(), ENT_QUOTES,'UTF-8');