<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Config\Paths;
// this is example comment to see if git is working
class HomeController
{
    public function __construct(private TemplateEngine $view)
    {
    }
    public function home()
    {
        echo $this->view->render("index.php");
    }
}
