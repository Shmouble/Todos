<?php
require_once  './bootstrap.php';

use Step\Controller\IndexController;

$userId = 1;

//$user = User::find(1)->first();

$action = $_GET['action'];
$indexController = new IndexController();

switch($action) {
    case 'delete':
        if (isset($_GET['itemId'])) {
            $indexController->delete((int) $_GET['itemId'], $userId);
        }
        break;
    case 'add':
        if(isset($_POST))
        {
            $data = $_POST;
            $indexController->add($data);
        }
        break;
    default:
        $indexController->index($userId);
        break;
}
