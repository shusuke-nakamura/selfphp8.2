<?php
$result = `ls -la`;
print mb_convert_encoding($result, 'UTF-8', 'SJIS');
