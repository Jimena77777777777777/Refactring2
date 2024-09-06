<?php  

require '../vendor/autoload.php';  

use App\HtmlElement;  

$element = new HtmlElement('p',[],'Este es el contenido');  

echo htmlentities($element->render(), ENT_QUOTES,'UTF-8');

echo'<br><br>';

$element = new HtmlElement('p',['id'=> 'my paragraph'],'Este es el contenido');  

echo htmlentities($element->render(), ENT_QUOTES,'UTF-8');

echo'<br><br>';

$element = new HtmlElement('p',['id'=> 'my paragraph', 'class'=>'paragraph'],'Este es el contenido');  

echo htmlentities($element->render(), ENT_QUOTES,'UTF-8');

echo'<br><br>';

$element = new \App\HtmlElement('img',['src'=> 'img/styde.png']);
echo htmlentities($element->render(), ENT_QUOTES,'UTF-8');

echo'<br><br>';

$element = new \App\HtmlElement('input',[0=>'required']);
echo htmlentities($element->render(), ENT_QUOTES,'UTF-8');

echo'<br><br>';

$element = new \App\HtmlElement('img',['src'=> 'img/styde.png', 'title' => 'Curso de "Refactorizacionn" en Styde']);
echo htmlentities($element->render(), ENT_QUOTES,'UTF-8');
