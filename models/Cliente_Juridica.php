<?php
  class Cliente_Juridica extends ActiveRecord\Model {
    static $table_name = 'tb_cliente';

    static $validates_presence_of = array( array('cpf_cnpj','nome_razao_social'));
    static $validates_uniqueness_of = array( array('cpf_cnpj'));

    function factory($params){
      $dados = array_merge($params, array('tipo' => 'Juridica'));
      self::create($dados);
      echo "<script>alert('".$params['nome_razao_social']." foi cadastro com Sucesso!');";
      echo "window.location='index.php';</script>";
    }
  }
?>