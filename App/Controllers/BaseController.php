<?php 
namespace App\Controllers;

class BaseController
{
    private function showContent($name, $data = [])
    {
        extract($data);
        return require_once("view/base/" . $name . ".php");
    }
    public function showMain()
    {
        $name = "view/base/main.php";
        ob_start();
        $this->showContent($name);
        $content = ob_get_clean();
        require_once("view/templates/layout.php");
    }
    
    public function show404()
    {
        $name = "view/base/404.php";
        http_response_code(404);
        ob_start();
        $this->showContent($name);
        $content = ob_get_clean();
        require_once("view/templates/layout.php");
    }

}
