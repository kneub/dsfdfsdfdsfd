<?php
require  '../vendor/autoload.php';

use App\Service\RouterService;

$router = new AltoRouter();

require_once '../src/configs/routesDanseuses.php';

$match = $router->match();

if (false !== $match && is_array($match)) {
    $routerService = new RouterService($match);
    $routerService->render();
} else {
    require_once '../layouts/error/404.php';
}