<?php
  class Fase extends ActiveRecord\Model {
    static $table_name = 'tb_fase';

    static $validates_presence_of = array( array('nome'));
    static $validates_uniqueness_of = array( array('nome'));

    function factory($params){
      self::create($params);
      echo "<script>alert('".$params['nome']." foi cadastro com Sucesso!');";
      echo "window.location='index.php';</script>";
    }
  }
?>