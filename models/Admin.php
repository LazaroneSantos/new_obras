<?php
  class Admin extends ActiveRecord\Model {
    static $table_name = 'tb_admin';

    static $validates_presence_of = array( array('login','senha', 'nome'));
    static $validates_uniqueness_of = array( array('login'));

    function factory($params){
      self::create($params);
      echo "<script>alert('".$params['nome']." foi cadastro com Sucesso!');";
      echo "window.location='list_admin.php';</script>";
    }
  }
?>