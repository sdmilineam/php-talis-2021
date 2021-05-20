<?php

namespace App\src;

use App\src\controller\FrontController;
use Exception;

class Router
{
    private $frontController;

    public function __construct()
    {
        $this->frontController = new FrontController();
    }

    public function run()
    {
        try {
            if (isset($_GET['path'])) {
                var_dum($_GET['path']);
                $ctrlFunction = $_GET['path'];
            }

            if (isset($_Get['url'])) {
                $url = explode('/', filter_var(
                    $_SERVER['REQUEST_URI'],
                    FILTER_SANITIZE_URL
                ));

                if (!empty($url[3])) {
                    $ctrlFunction = $url[3];
                }
            } else {
                $this->frontController->comment();
            }
        } catch (Exception $e) {
            echo 'Erreur : '.$e->getMessage();
        }
    }
}
