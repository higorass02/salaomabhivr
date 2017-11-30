<?php

namespace SalaoMabhiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PrincipalController extends Controller
{

    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('SalaoMabhiBundle:Principal:principal.html.twig');
    }
}
