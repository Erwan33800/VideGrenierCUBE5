<?php

namespace App\Controllers;

use App\Models\Articles;
use \Core\View;
use Exception;

/**
 * Home controller
 */
class Politics extends \Core\Controller
{

    /**
     * Affiche la page de cookies
     *
     * @return void
     * @throws \Exception
     */
    public function indexAction()
    {

        View::renderTemplate('Politics/politiqueCookies.html');
    }
}
