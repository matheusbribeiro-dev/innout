<?php
/*https://www.php.net/manual/pt_BR/function.dirname*/
require_once dirname(__FILE__, 2) . '/src/config/config.php';
// require_once VIEW_PATH . '/login.php';

require_once MODEL_PATH . '/login.php';

$login = new Login([
    'email' => 'admin@cod3r.com.br',
    'password' => 'a'
]);

try {
    $login->checkLogin();
    echo 'Logado';
}catch(Exception $e) {
    echo 'Problema no Login :P';
}