<?php 
namespace App\Controllers;


class BaseController
{

    protected function render($template, $layout, $data = [])
    {
        extract($data);
        $templatePath = "view/" . $template . ".php";
        $layoutPath = "view/" . $layout . ".php";
        ob_start();
        require_once($templatePath);
        $content = ob_get_clean();
        require_once($layoutPath);
    }

    public function showMain()
    {
        $template = "base/main";
        $layout = "layouts/deafult";
        $this->render($template, $layout);
    }
    
    public function show404()
    {
        $template = "base/404";
        $layout = "layouts/deafult";
        http_response_code(404);
        $this->render($template, $layout);
    }
    public function pagination($parent, $total)
    {   
        return null;
    }

}
