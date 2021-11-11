<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Page{

 /**
 * Método responsavel por rendereizar o header.html topo da Pagina
 * @return
 */
  private static function getHeader(){
    return View::render('pages/header');
  }
  /**
  * Método responsavel por rendereizar o footer.html rodapé da Pagina
  * @return
  */
   private static function getFooter(){
     return View::render('pages/footer');
   }

  /**
  * Metodo responsavel por retornar a view da nossa página generica
  * @return string
  */
    public static function getPage($title,$content){
    return View::render('pages/page',[
   'title' => $title,
   'header' => self::getHeader(),
   'content' => $content,
   'footer' => self::getFooter()
   ]);

 }

}
 ?>
