<?php

namespace Codascii\TutoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Language
 *
 * @ORM\Table(name="language")
 * @ORM\Entity(repositoryClass="Codascii\TutoBundle\Repository\LanguageRepository")
 */
class Language
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="image_language_name", type="string", length=255, unique=true)
     */
    private $image_language_name;

    /**
     * @var string
     *
     * @ORM\Column(name="short_description", type="string", length=255, unique=true)
     */
    private $short_description;


    /**
     * Get id
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Language
     */
    public function setName(string $name) : Language
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * Set shortDescription
     *
     * @param string $shortDescription
     *
     * @return Language
     */
    public function setShortDescription(string $shortDescription) : Language
    {
        $this->short_description = $shortDescription;

        return $this;
    }

    /**
     * Get shortDescription
     *
     * @return string
     */
    public function getShortDescription() : string
    {
        return $this->short_description;
    }

    /**
     * Set imageLanguageName
     *
     * @param string $imageLanguageName
     *
     * @return Language
     */
    public function setImageLanguageName(string $imageLanguageName) : Language
    {
        $this->image_language_name = $imageLanguageName;

        return $this;
    }

    /**
     * Get imageLanguageName
     *
     * @return string
     */
    public function getImageLanguageName() : string
    {
        return $this->image_language_name;
    }
}
