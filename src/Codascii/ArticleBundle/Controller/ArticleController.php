<?php

namespace Codascii\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Codascii\ArticleBundle\Entity\Article;

class ArticleController extends Controller
{
    public function viewAction($id)
    {
    	// On récupère le repository
	    $repository = $this->getDoctrine()->getManager()->getRepository('CodasciiArticleBundle:Article');

	    // On récupère l'entité correspondante à l'id $id
	    $article = $repository->find($id);

        return $this->render('CodasciiArticleBundle:Article:view.html.twig', array('article' => $article));
    }

    public function addAction()
    {
    	//	Création de l'article
    	$article = new Article(new \DateTime());
    	$article->setTitle("Symfony : live samedi soir");
    	$article->setContent("Salut à tous, je vais faire un live samedi soir à propos de Symfony. Vous pouvez partagez l'article pour qu'on soit nombreux le jour J. Je vous remercie pour votre fidélité.");
    	$article->setAuthor("Codascii");

    	//	Récupération du service doctrine : EntityManager
    	$em = $this->getDoctrine()->getManager();
    	$em->persist($article);
    	$em->flush();
        return $this->render('CodasciiArticleBundle:Article:add.html.twig');
    }

    public function editAction()
    {
        return $this->render('CodasciiArticleBundle:Article:edit.html.twig');
    }

    public function deleteAction()
    {
        return $this->render('CodasciiArticleBundle:Article:delete.html.twig');
    }
}
