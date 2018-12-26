<?php
session_start();
include ("../../models/database/database.php");
$db = new Database();
$db->db_connect();

include ("../../views/page/header.php ");

?>