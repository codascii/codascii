<?php

namespace Codascii\TutoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TutoController extends Controller
{
	public function indexAction()
	{
        //  Récupération de l'Entity Manager
        $em = $this->getDoctrine()->getManager();

        //  On récupère le repository
        $repositoryLanguage = $em->getRepository('CodasciiTutoBundle:Language');

        // On récupère l'entité correspondante à l'id $id
        $languages = $repositoryLanguage->findAll();

		return $this->render('CodasciiTutoBundle:Tuto:index.html.twig', array('languages'=>$languages));
	}

    public function allTutoAction()
    {
        return $this->render('CodasciiTutoBundle:Tuto:allTuto.html.twig');
    }

    public function tutoAction()
    {
        return $this->render('CodasciiTutoBundle:Tuto:tuto.html.twig');
    }
}
