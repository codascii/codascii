<?php

namespace Codascii\TutoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Codascii\TutoBundle\Entity\Tutoriel;

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

    public function allTutoAction(string $language)
    {
        //  Récupération de l'entity manager
        $em = $this->getDoctrine()->getManager();

        // On récupère le language grâce à son nom
        $languageEntiy = $em->getRepository('CodasciiTutoBundle:Language')->findBy(array('name'=>$language));

        // On récupère la liste des tutoriels de ce language
        $tutoriels = $em->getRepository('CodasciiTutoBundle:Tutoriel')->findBy(
            array('language' => $languageEntiy[0]));

        return $this->render('CodasciiTutoBundle:Tuto:allTuto.html.twig', array('language'=>$language,
            'tutoriels'=>$tutoriels));
    }

    public function tutoAction(string $language, int $number, string $slug)
    {
        $title = ucfirst(str_replace("-", " ", $slug));
        return $this->render('CodasciiTutoBundle:Tuto:tuto.html.twig', 
            array('language'=>$language, 'numero'=>$number, 'title'=>$title, 'slug'=>$slug));
    }

    public function addAction()
    {
        $tuto1 = new Tutoriel();
        $tuto1->setNumber(1)->setTitle("Les variables")->setContent("Ceci est le contenu de mon tutoriel sur les variables");

        $tuto2 = new Tutoriel();
        $tuto2->setNumber(2)->setTitle("Les alternatives")->setContent("Ceci est le contenu de mon tutoriel sur les alternatives");

        // find(2) = php
        $em = $this->getDoctrine()->getManager();
        $language = $em->getRepository('CodasciiTutoBundle:Language')->find(2);

        $tuto1->setLanguage($language);
        $tuto2->setLanguage($language);

        $em->persist($tuto1);
        $em->persist($tuto2);

        $em->flush();
    }
}
