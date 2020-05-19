<?php

use flowerphp\App;
use flowerphp\Assets;
use Klein\Klein;
use League\Flysystem\Adapter\Local;

// Вызываем авто-загрузчик классов Composer
require_once __DIR__."/vendor/autoload.php";

// Создание адаптера для абстрактной файловой системы
$Adapter = new Local(__DIR__);

// Создание экземпляра приложения класса App
$App = new App($Adapter);

// Создание экземпляра роутера от https://github.com/klein/klein.php
$Router = new Klein();

// Вызов всех пользовательских роутов
require_once __DIR__."/app/routes/web.php";

// Создание анонимного класса Assets функцию construct который будет вызван
(new Assets($App,$Router));

// Обработчик ошибок
$Router->onHttpError(function ($code, $router) use ($App) {
    $router->response()->body(
        $App->getView()->get("errors.$code")
    );
});

// Запустить работу роутера
$Router->dispatch();