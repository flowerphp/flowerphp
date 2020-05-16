<?php

use flowerphp\App;
use flowerphp\Assets;
use Klein\Klein;
use League\Flysystem\Adapter\Local;

/*
 *
 * Иницилизируем приложение
 *
 * Вызываем авто-загрузчик классов от composer.
 *
 */


require_once __DIR__."/vendor/autoload.php";

$Adapter = new Local(__DIR__);

$App = new App($Adapter);

$Router = new Klein();

require_once __DIR__."/app/routes/web.php";

(new Assets($App,$Router));

$Router->onHttpError(function ($code, $router) use ($App) {
    $router->response()->body(
        $App->getView()->get("errors.$code")
    );
});

$Router->dispatch();