<?php
function showMatch($ptn, $input)
{
    if (preg_match_all($ptn, $input, $data)) {
        foreach ($data as $items) {
            foreach ($items as $item) {
                print "{$item} <br />";
            }
        }
    } else {
        print "マッチしません。<br />";
    }
    print "<hr />";
}

$rel1 = '/いろ(?=はに)/';
$rel2 = '/いろ(?!はに)/';
$rel3 = '/(?<=。)いろ/';
$rel4 = '/(?<!。)いろ/';
$msg1 = 'いろはにほへと';
$msg2 = 'いろものですね。いろいろと';

showMatch($rel1, $msg1);
showMatch($rel1, $msg2);
showMatch($rel2, $msg1);
showMatch($rel2, $msg2);
showMatch($rel3, $msg1);
showMatch($rel3, $msg2);
showMatch($rel4, $msg1);
showMatch($rel4, $msg2);
