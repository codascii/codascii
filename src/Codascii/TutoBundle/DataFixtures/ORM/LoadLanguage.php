<?php
namespace Codascii\TutoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Codascii\TutoBundle\Entity\{Language, LanguageImage};

class LoadLanguage implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        //  Liste des noms de language à ajouter
        $names = array(
            array('l'=>'cpp', 'lm'=>'cpp.png', 'alt'=>'Image du C++',
                'shortDescr' => 'Le C++ est le language de programmation le plus performant qu\'il existe...'),
            array('l'=>'php', 'lm'=>'php.png', 'alt'=>'Image du PHP',
                'shortDescr' => 'Beaucoup de développeur apprènnent très vite le PHP pour leur développement web.'),
            array('l'=>'javascript', 'lm'=>'javascript.png', 'alt'=>'Image du JavaScript',
                'shortDescr' => 'Vous voulais créer des pages web intéractives ? Le javascript est la pour ça.'),
            array('l'=>'html-css', 'lm'=>'html-css.png', 'alt'=>'Image du HTML et du CSS',
                'shortDescr' => 'Le HTML est le language de base pour le développement web, il s\'occupe du fond tandis que le CSS s\'occupe de la forme'),
            array('l'=>'jquery', 'lm'=>'jquery.png', 'alt'=>'Image de jQuery',
                'shortDescr' => 'jQuery est une bibliothèque javascript qui permet de faire beaucoup de chose en peu de code. C\'est très pratique si vous connaissez le javascript.'));

        foreach ($names as $name) {
            //  On crée le language image
            $languageImage = new LanguageImage();
            $languageImage->setName($name['lm'])->setAlt($name['alt']);

            //  On crée le language
            $language = new Language();
            //  Ajout du nom de language ainsi que l'objet image associé
            $language->setName($name['l'])->setLanguageImage($languageImage)->setShortDescription($name['shortDescr']);

            //  On le persiste
            $manager->persist($language);
        }

        // On déclenche l'enregistrement de tout les languages
        $manager->flush();
    }
}