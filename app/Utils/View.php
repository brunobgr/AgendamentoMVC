<?php

namespace App\Utils;

class View{

  /**
  *Método responsavel por retornar o conteúdo de uma View
  * @param string $view
  * @return string
  */
private static function getContentView($view){
  $file = __DIR__.'/../../resources/view/'.$view.'.html';
  return file_exists($file) ? file_get_contents($file) : '';
}

/**
*Método responsavel por retornar o conteúdo renderizado de uma View
* @param string &View
* @param array $vars (string/numeric)
* @return string
*/
public static function render($view, $vars = []){
  //CONTEUDO DA View
  $contentView = self::getContentView($view);

  //CHAVES DO ARRAY DE VARIÀVES
   $keys = array_keys($vars);
   $keys = array_map(function($item){
     return '{{'.$item.'}}';
   },$keys);

  //RETORNAR O CONTEÚDO renderizado
  return str_replace($keys,array_values($vars),$contentView);


 }
}

 ?>
