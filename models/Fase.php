<?php
  class Fase extends ActiveRecord\Model {
    static $table_name = 'tb_fase';

    static $validates_presence_of = array(
      array('nome', 'message' => '- Nome não pode ser em branco!', 'on' => 'save')
    );
    static $validates_uniqueness_of = array( array('nome', 'message' => '- Nome já foi utilizado!'));

  }
?>