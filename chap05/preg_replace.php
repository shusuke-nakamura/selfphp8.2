<?php
$msg = <<<EOD
サンプルは、「サーバサイド技術の学びの舎(http://www.wings.msn.to/)」から入手できます。執筆のノウハウ集「WINGS Knowledge」
(http://www31.atwiki.jp/wingsproject)もどうぞ。
EOD;
print preg_replace('|http(s)?://([\w-]+\.)+[\w-]+(/[\w ./?%&=-]*)?|', '<a href="$0">$0</a>', $msg);