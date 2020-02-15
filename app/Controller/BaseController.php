<?php
namespace Step\Controller;

class BaseController {
    public function render($templateName, $params)
    {
        ob_start();
        extract($params);
        require __DIR__ . "/../View/$templateName.php";
        return  ob_get_clean();
    }
}