<?php
$data = ['高江' => '男', '掛谷' => '女', '日尾' => '男'];

array_walk($data, function ($value, $key, $suffix) {
    print "{$key}: {$value}{$suffix}";
}, "<br />");
