<?php
$str = "初めまして。\n宜しくお願いします。";
if (preg_match_all('/\A.+/s', $str, $data)) {
    foreach ($data[0] as $item) {
        print $item;
    }
}
