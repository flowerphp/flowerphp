<?php

use flowerphp\App;

/*
 *
 * Иницилизируем приложение
 *
 * Вызываем авто-загрузчик классов от composer.
 *
 */


require_once __DIR__.
    DIRECTORY_SEPARATOR.
    "vendor".
    DIRECTORY_SEPARATOR.
    "autoload.php";

$App = new App();

require_once __DIR__.
    DIRECTORY_SEPARATOR.
    "app".
    DIRECTORY_SEPARATOR.
    "routes".
    DIRECTORY_SEPARATOR.
    "web.php";