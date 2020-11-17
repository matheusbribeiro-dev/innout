<?php
/*https://www.php.net/manual/pt_BR/function.dirname*/
require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User([]);
echo $user->getSelect(['id' => 1], 'name, email');
echo '<br>';
echo $user->getSelect(['name' => 'Chaves', 'email' => 'chaves@cod3r.com.br']);