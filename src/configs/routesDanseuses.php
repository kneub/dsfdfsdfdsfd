<?php

use App\Repository\DanseuseRepository;


// map homepage using callable
$router->map('GET', '/danseuses', 'DanseuseController#index');
$router->map('GET', '/danseuses/[i:id]', 'DanseuseController#detail');
// danseuses
$router->map('GET', '/', 'HomeController#index');

?>