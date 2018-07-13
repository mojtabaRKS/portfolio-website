<?php
/**
 * Created by PhpStorm.
 * User: mojtabarks
 * Date: 7/7/18
 * Time: 1:26 AM
 */

namespace AppBundle\Controller\Front;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('front/home.html.twig');
    }
}