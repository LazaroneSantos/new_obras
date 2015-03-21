<?php
  class Etapa extends ActiveRecord\Model {
    static $table_name = 'tb_etapa';
    static $primary_key = 'id';

    static $validates_presence_of = array( array('nome'));

    function factory($params){
      self::create($params);
      echo "<script>alert('".$params['nome']." foi cadastro com Sucesso!');";
      echo "window.location='list_etapa.php';</script>";
    }
  }
?>