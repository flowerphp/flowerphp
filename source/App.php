<?php


namespace flowerphp;


use flowerphp\Config\Configuration;
use Jenssegers\Blade\Blade;
use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;
use PDO;

final class App
{
    const VERSION_APP = "1.0";

    private $Blade;
    private $View;
    private $FileSystem;
    private $Configuration;
    private $DataBase;

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
        $this->connectDB();

    }

    private function connectDB()
    {
        if ($this->getConfiguration()->getConfig()['DataBase']['Enabled'])
        {
            $this->DataBase = new PDO(
                'mysql:host=' . $this->getConfiguration()->getConfig()['DataBase']['Host'] . ';dbname='. $this->getConfiguration()->getConfig()['DataBase']['Name'],
                $this->getConfiguration()->getConfig()['DataBase']['UserName'],
                $this->getConfiguration()->getConfig()['DataBase']['Password']);
        } else {
            $this->DataBase = "Please enable connection to bd in config.json";
        }
    }

    /**
     * @return mixed
     */
    public function getDataBase() : PDO
    {
        return $this->DataBase;
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