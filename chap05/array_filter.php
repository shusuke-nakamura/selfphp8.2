<?php
$data = ['フレンチブルドック', 'ヨークシャーテリア', 'ダックスフンド', 'ポメラニアン', 'コーギー'];
$result = array_filter($data, function ($v) {
    return mb_strlen($v) < 8;
});
print_r($result);
