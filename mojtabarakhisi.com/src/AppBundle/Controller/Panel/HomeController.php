<?php
/**
 * Created by PhpStorm.
 * User: mojtabarks
 * Date: 7/8/18
 * Time: 10:15 PM
 */

namespace AppBundle\Controller\Panel;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class HomeController extends Controller
{

    public function indexAction()
    {
        return $this->render('panel/index.html.twig');
    }

}