<?php


namespace flowerphp;


use Jenssegers\Blade\Blade;

class View
{
    private $App;
    private $Blade;

    public function __construct(App $app)
    {
        $this->Blade = $app->getBlade();
        $this->App = $app;
    }

    public function get(string $name,array $data=[])
    {
        $data["App"] = $this->App;

        if (!file_exists(__DIR__."/../resources/cache"))
        {mkdir(__DIR__."/../resources/cache");}

        return $this->Blade->make($name, $data)->render();
    }
}