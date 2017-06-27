<?php

namespace Codascii\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CodasciiCoreBundle:Default:index.html.twig');
    }
}
