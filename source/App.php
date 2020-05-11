<?php


namespace flowerphp;


final class App
{
    const VERSION_APP = "1.0";

    /*
     * Иницилизация класса App
     */
    public function __construct()
    {

    }

    public function __toString()
    {
        return "Версия приложения: ".self::VERSION_APP;
    }
}