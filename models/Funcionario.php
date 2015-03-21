<?php
  class Funcionario extends ActiveRecord\Model {
    static $table_name = 'tb_funcionario';
    static $primary_key = 'id';

    static $validates_presence_of = array( array('cpf','cargo', 'nome'));
    static $validates_uniqueness_of = array( array('cpf'));

    function factory($params){
      self::create($params);
      echo "<script>alert('".$params['nome']." foi cadastro com Sucesso!');";
      echo "window.location='index.php';</script>";
    }
  }
?>