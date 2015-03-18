<?php
  class Obra extends ActiveRecord\Model {
    static $table_name = 'tb_obra';

    static $validates_presence_of = array( array('descricao'));
    static $validates_uniqueness_of = array( array('descricao'));

    function factory($params){
      self::create($params);
      echo "<script>alert('".$params['desricao']." foi cadastro com Sucesso!');";
      echo "window.location='index.php';</script>";
    }
  }
?>