<?php


namespace flowerphp;


use Klein\Klein;
use League\Flysystem\Exception;

class Assets
{
    public function __construct(App $app, Klein $router)
    {
        $router->get("/assets", function () use ($app) {
            return $app->getView()->get("assets-exists");
        });
        $router->get("/assets/[*:path]", function ($request) use ($app) {
            try {
                header_remove("content");
                header("Content-Type:;charset=UTF-8");
                return $app->getFileSystem()->read("resources/assets/" . $request->path);
            } catch (Exception $exception) {
                return $app->getView()->get("assets-exists");
            }
        });
    }
}