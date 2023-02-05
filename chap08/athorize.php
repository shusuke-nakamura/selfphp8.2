<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="Selfphp"');
    print('この画面へのアクセスは認められませんでした。');
    die();
} else {
    if ($_SERVER['PHP_AUTH_USER'] === 'admin_usr' && $_SERVER['PHP_AUTH_PW'] === 'admin_pass') {
        print '正しい認証が行われました。';
    } else {
        print 'ユーザー名、またはパスワードが間違っています。';
    }
}
