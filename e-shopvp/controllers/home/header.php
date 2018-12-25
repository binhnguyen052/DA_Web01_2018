<?php

include_once ("../../models/database/database.php");
$db = new Database();
$db->db_connect();

include_once ("../../views/page/header.php");

$data = array(
  'home' => 'home',
);

?>