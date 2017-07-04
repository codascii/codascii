<?php

namespace Codascii\TutoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="language_image")
 * @ORM\Entity(repositoryClass="Codascii\TutoBundle\Repository\LanguageImageRepository")
 */
class LanguageImage
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(name="name", type="string", length=255)
   */
  private $name;

  /**
   * @ORM\Column(name="alt", type="string", length=255)
   */
  private $alt;

    /**
     * Get id
     *
     * @return integer
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
     * @return LanguageImage
     */
    public function setName(string $name) : LanguageImage
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
     * Set alt
     *
     * @param string $alt
     *
     * @return LanguageImage
     */
    public function setAlt(string $alt) : LanguageImage
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt() : string
    {
        return $this->alt;
    }
}
