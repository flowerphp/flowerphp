<?php


namespace flowerphp;


use flowerphp\Config\Configuration;
use Jenssegers\Blade\Blade;
use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;

final class App
{
    const VERSION_APP = "1.0";

    private $Blade;
    private $View;
    private $FileSystem;
    private $Configuration;

    /*
     * Иницилизация класса App
     */
    public function __construct(Local $adapter)
    {
        /*
         * Создание экземпляров
         */

        $this->FileSystem = new Filesystem($adapter);
        $this->Configuration = new Configuration($this->FileSystem);
        $this->Blade = new Blade(__DIR__."/../resources/views",__DIR__."/../resources/cache");
        $this->View = new View($this);

    }

    /**
     * @return Configuration
     */
    public function getConfiguration(): Configuration
    {
        return $this->Configuration;
    }

    /**
     * @return Filesystem
     */
    public function getFileSystem(): Filesystem
    {
        return $this->FileSystem;
    }

    /**
     * @return View
     */
    public function getView(): View
    {
        return $this->View;
    }

    /**
     * @return Blade
     */
    public function getBlade(): Blade
    {
        return $this->Blade;
    }

    public function __toString()
    {
        return "Версия приложения: ".self::VERSION_APP;
    }
}