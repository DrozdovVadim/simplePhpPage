<?php 
namespace App\Controllers;

use App\Models\NewsModel;

class BaseController
{

    protected function GetModel()
    {
        return new NewsModel();
    }

    protected function render($template, $data = [])
    {
        extract($data);
        $templatePath = "view/" . $template . ".php";
        $layoutPath = "view/layouts/default.php";
        ob_start();
        require_once($templatePath);
        $content = ob_get_clean();
        require_once($layoutPath);
    }

    public function showMain()
    {
        $template = "base/main";
        $layout = "layouts/deafult";
        $this->render($template);
    }
    
    public function show404()
    {
        $template = "base/404";
        $layout = "layouts/deafult";
        http_response_code(404);
        $this->render($template);
    }


}
