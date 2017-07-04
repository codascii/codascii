<?php

namespace Codascii\TutoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use \Codascii\TutoBundle\Entity\Language;

/**
 * Tutoriel
 *
 * @ORM\Table(name="tutoriel")
 * @ORM\Entity(repositoryClass="Codascii\TutoBundle\Repository\TutorielRepository")
 */
class Tutoriel
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
     * @var int
     *
     * @ORM\Column(name="number", type="integer")
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="Codascii\TutoBundle\Entity\Language")
     * @ORM\JoinColumn(nullable=false)
     */
    private $language;


    public function __construct()
    {
        $this->date = new \Datetime();
    }

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
     * Set number
     *
     * @param integer $number
     *
     * @return Tutoriel
     */
    public function setNumber(int $number) : Tutoriel
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return int
     */
    public function getNumber() : int
    {
        return $this->number;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Tutoriel
     */
    public function setTitle(string $title) : Tutoriel
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }

    public function getSlug() : string
    {
        return \strtolower(\str_replace(" ", "-", $this->getTitle()));
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Tutoriel
     */
    public function setContent(string $content) : Tutoriel
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent() : string
    {
        return $this->content;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Tutoriel
     */
    public function setDate(\DateTime $date) : Tutoriel
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate() : \DateTime
    {
        return $this->date;
    }

    /**
     * Set language
     *
     * @param \Codascii\TutoBundle\Entity\Language $language
     *
     * @return Tutoriel
     */
    public function setLanguage(Language $language) : Tutoriel
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return \Codascii\TutoBundle\Entity\Language
     */
    public function getLanguage() : Language
    {
        return $this->language;
    }
}
