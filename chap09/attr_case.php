<?php
require_once '../DbManager.php';

$db = getDb();
$db->setAttribute(PDO::ATTR_CASE, PDO::CASE_UPPER);
print_r($db->query('SELECT * FrOM book')->fetchAll(PDO::FETCH_ASSOC));
