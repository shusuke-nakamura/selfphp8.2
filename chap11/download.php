<?php
$fl = $_GET['path'] ?? 'default.jpg';
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename = "' . $fl . '"');
print file_get_contents("./doc/{$fl}");
