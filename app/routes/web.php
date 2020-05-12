<?php

$Router->respond('GET', '/', function () use ($App) {
    return $App->getView()->get("index");
});