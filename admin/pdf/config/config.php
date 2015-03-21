<?php
  # inclue the ActiveRecord library
  require_once '../../librarys/php-activerecord/ActiveRecord.php';

  $cfg = ActiveRecord\Config::instance();
  $cfg->set_model_directory('../../models');
  $cfg->set_connections(array('development' =>
    'mysql://root:usb30sata@localhost/new_obras'));

?>
