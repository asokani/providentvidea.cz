<?php

require 'config.php';
require 'database.php';

$config = new Config("../providentvidea.cz.config");

$db = new Db($config->getConfig());

$result = $db->query("select * from videos order by `order`");


?>