<?php

namespace Codascii\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CodasciiCoreBundle:Default:index.html.twig');
    }

    public function loginAction()
    {
    	return $this->render('CodasciiCoreBundle:Default:login.html.twig');
    }

    public function registerAction()
    {
    	return $this->render('CodasciiCoreBundle:Default:register.html.twig');
    }

    public function contactAction()
    {
    	return $this->render('CodasciiCoreBundle:Default:contact.html.twig');
    }

    public function searchAction()
    {
    	return $this->render('CodasciiCoreBundle:Default:search.html.twig');
    }
}
