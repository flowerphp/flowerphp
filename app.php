<?php

use flowerphp\App;
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

$Router->dispatch();