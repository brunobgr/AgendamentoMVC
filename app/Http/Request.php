<?php

namespace App\Http;

class Request{

 /**
  * Método HTTP da Requisição
  * @var string
  */
  private $httpMethod;

  /**
   * URI da Página
   * @var string
   */
  private $uri;

  /**
   * Parametros de URL ($_GET)
   * @var array
   */
  private $queryParams = [];

  /**
   * Váriaveis recebidas no POST da Pagina (&_POST)
   * @var array
   */
  private $postVars = [];

  /**
   * Cabeçalo da Requisição
   * @var array
   */
  private $headers = [];


  /**
   * Construtor da classe de Requisição
   */
  public function __construct(){
   $this->queryParams = $_GET ?? [];
   $this->postVars = $_POST ?? [];
   $this->headers = getallheaders();
   $this->httpMethod = $_SERVER['REQUEST_METHOD'] ?? '';
   $this->uri = $_SERVER['REQUEST_URI'] ?? '';
  }

  /**
   * Metodo responsavel por retornar o metodo HTTP da requisição
   * @var string
   */
  public function getHttpMethod(){
    return $this->httpMethod;
  }
  /**
   * Metodo responsavel por retornar a URI da requisição
   * @var string
   */
  public function getUri(){
    return $this->Uri;
  }
  /**
   * Metodo responsavel por retornar as headers da requisição
   * @var array
   */
  public function getHeaders(){
    return $this->headers;
  }
  /**
   * Metodo responsavel por retornar o parametro da URL da rquisicao
   * @var array
   */
  public function getQueryParams(){
    return $this->queryParams;
  }
  /**
   * Metodo responsavel por retornar as váriavesi POST da requisição
   * @var array
   */
  public function getPostVars(){
    return $this->postVars;
  }

}
