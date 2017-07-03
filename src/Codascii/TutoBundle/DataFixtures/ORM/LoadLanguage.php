<?php
namespace Codascii\TutoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Codascii\TutoBundle\Entity\Language;

class LoadLanguage implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        //  Liste des noms de language à ajouter
        $names = array(
            'cpp',
            'php',
            'javascript',
            'html-css',
            'jquery');

        foreach ($names as $name) {
            //  On crée le language
            $language = new Language();
            $language->setName($name);

            //  On le persiste
            $manager->persist($language);
        }

        // On déclenche l'enregistrement de tout les languages
        $manager->flush();
    }
}