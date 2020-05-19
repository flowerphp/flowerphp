<?php

use App\Controllers\BaseController;

$Router->respond('GET', '/ajax', function () use ($App) {
    // Example anonymous object
    return (new BaseController())->request($App);
});