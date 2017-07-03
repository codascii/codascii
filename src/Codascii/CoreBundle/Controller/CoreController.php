<?php

namespace Codascii\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CoreController extends Controller
{
    public function indexAction()
    {
        return $this->render('CodasciiCoreBundle:Core:index.html.twig');
    }

    public function loginAction()
    {
    	return $this->render('CodasciiCoreBundle:Core:login.html.twig');
    }

    public function registerAction()
    {
    	return $this->render('CodasciiCoreBundle:Core:register.html.twig');
    }

    public function contactAction()
    {
    	return $this->render('CodasciiCoreBundle:Core:contact.html.twig');
    }

    public function searchAction(Request $request)
    {
        $q = $request->query->get('q');
    	return $this->render('CodasciiCoreBundle:Core:search.html.twig', array('q'=>$q));
    }
}
