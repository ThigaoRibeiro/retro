<?php


namespace Source\App;


use League\Plates\Engine;
use function Composer\Autoload\includeFile;

class Web
{

    public function __construct()
    {
        $this->view = Engine::create(__DIR__."/../../bistro","php");
    }

    public function home()
    {

        echo $this->view->render("home");
    }

    public function menu()
    {
        echo $this->view->render("menu");
    }

    public function about()
    {
        echo $this->view->render("about");
    }

    public function contact()
    {
        echo $this->view->render("contact");
    }

    public function cadastro()
    {
        echo $this->view->render("cadastro");
    }

    public function error(array $data): void
    {
        echo "<h1>Erro {$data["errcode"]}</h1>";
    }

}