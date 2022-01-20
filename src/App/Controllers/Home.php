<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;

/**
 * Home controller
 */
class Home extends Controller
{
    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        View::renderTemplate('Home/index.html');
    }
}
