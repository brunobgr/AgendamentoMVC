 <?php

namespace App\Http;

class Response{


  /**
   * Codigo do status HTTP
   * @var integer
   */
  private $httpCode = 200;

  /**
   * Cabeçalho do Response
   * @var array
   */
  private $headers = [];

  /**
   * Tipo de conteudo que está sendo retornado
   * @var string
   */
  private $contentType = 'text/html';

  /**
   * Conteudo do Response
   * @var mixed
   */
  private $content;

  /**
   * Método responsavel por iniciar a classe e definir os valores
   * @param  integer $httpCode
   * @param  mixed   $content
   * @param  string  $contentType
   */
  public function __construct($httpCode,$content,$contentType = 'text/html'){
    $this->$httpCode = $httpCode;
    $this->$content = $content;
    $this->setContentType($contentType);
  }
  /**
   * Método responsavel por alterar o content type do response
   * @param  string  $contentType
   */
  public function setContentType($contentType){
    $this->contentType = $contentType;
    $this->addHeader('content-Type',$contentType);
  }
  /**
   * Método responsavel por iniciar a classe e definir os valores
   * @param  string  $key
   * @param  string  $value
   */
  public function addHeader($key,$value){
    $this->header[$key] = $value;
  }


}


  ?>
