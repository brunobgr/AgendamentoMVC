<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class Home extends Page{

 /**
* Metodo responsavel por retornar o conteudo (view) da nossa *home
* @return string
*/
public static function getHome(){
  //ORGANIZAÇÃO
  $obOrganization = new Organization;

  //VIEW DA HOME
  $content = View::render('pages/home',[
  'name' => $obOrganization->name,
  'description' => $obOrganization->description,
  'site' => $obOrganization->site
   ]);

   //RETORNA A VIEW DA PÀGINA
  return parent::getPage('BRUNO BGR92 Dev', $content);
 }
}
 ?>
