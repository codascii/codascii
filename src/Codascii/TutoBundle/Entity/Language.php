<?php

namespace Codascii\TutoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use \Codascii\TutoBundle\Entity\LanguageImage;

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
     * @ORM\Column(name="short_description", type="string", length=255, unique=true)
     */
    private $short_description;

    /**
     * @ORM\OneToOne(targetEntity="Codascii\TutoBundle\Entity\LanguageImage", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $language_image;


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
     * Set languageImage
     *
     * @param \Codascii\TutoBundle\Entity\LanguageImage $languageImage
     *
     * @return Language
     */
    public function setLanguageImage(LanguageImage $languageImage) : Language
    {
        $this->language_image = $languageImage;

        return $this;
    }

    /**
     * Get languageImage
     *
     * @return \Codascii\TutoBundle\Entity\LanguageImage
     */
    public function getLanguageImage() : LanguageImage
    {
        return $this->language_image;
    }
}
