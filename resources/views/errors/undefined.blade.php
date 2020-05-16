<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FlowerPHP</title>
</head>
<body>

<div id="app" class="{{ $App->getConfiguration()->getConfig()['App']['Name'] }}">
    <h1>Неопределённая ошибка</h1>
    <nav>
        <a href="https://github.com/flowerphp/flowerphp" target="_blank">GitHub</a>
    </nav>
</div>

<style>
    body {
        display: flex;
        position: relative;
        justify-content: center;
        align-items: center;
    }
    .{{ $App->getConfiguration()->getConfig()['App']['Name'] }} {
        font-family: sans-serif;
    }
    h1 {
        color: #171717;
    }
    nav {
        display: flex;
        justify-content: center;
    }
</style>
</body>
</html>