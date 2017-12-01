<?php

namespace SalaoMabhiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PrincipalController extends Controller
{

    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
        return $this->render('SalaoMabhiBundle:Principal:principal.html.twig');
    }

    /**
     * @Route("/agenda", name="agenda")
     */
    public function carregar_agendaAction()
    {
        return $this->render('SalaoMabhiBundle:Agenda:agenda.html.twig');
    }

    /**
     * @Route("/login", name="login")
     */
    public function carregar_loginAction()
    {
        return $this->render('SalaoMabhiBundle:Login:login.html.twig');
    }

    /**
     * @Route("/menu_principal", name="menu_principal")
     */
    public function carregar_menu_principalAction()
    {
        return $this->render('SalaoMabhiBundle:Menu_Principal:menu_principal.html.twig');
    }

    /**
     * @Route("/menu_principal/cadastro", name="cadastro")
     */
    public function carregar_contatosAction()
    {
        return $this->render('SalaoMabhiBundle:Contatos:cadastro.html.twig');
    }
}
