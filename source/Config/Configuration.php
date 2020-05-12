<?php


namespace flowerphp\Config;


use League\Flysystem\Filesystem;

class Configuration
{
    const FILE_CONFIG_NAME = "config";

    private $config;

    public function __construct(Filesystem $filesystem)
    {
        $this->config = json_decode($filesystem->read("app/config/".self::FILE_CONFIG_NAME.".json"), true);
    }

    public function __toString()
    {
        return json_encode($this->config);
    }
}