<?php

namespace MyPlaylist\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MyPlaylist\AppBundle\Entity\Album
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MyPlaylist\AppBundle\Entity\AlbumRepository")
 */
class Album
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var \DateTime $date_production
     *
     * @ORM\Column(name="date_production", type="date")
     */
    private $date_production;

    /**
     * @var \DateTime $date_insert
     *
     * @ORM\Column(name="date_insert", type="date")
     */
    private $date_insert;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Album
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set date_production
     *
     * @param \DateTime $dateProduction
     * @return Album
     */
    public function setDateProduction($dateProduction)
    {
        $this->date_production = $dateProduction;
    
        return $this;
    }

    /**
     * Get date_production
     *
     * @return \DateTime 
     */
    public function getDateProduction()
    {
        return $this->date_production;
    }

    /**
     * Set date_insert
     *
     * @param \DateTime $dateInsert
     * @return Album
     */
    public function setDateInsert($dateInsert)
    {
        $this->date_insert = $dateInsert;
    
        return $this;
    }

    /**
     * Get date_insert
     *
     * @return \DateTime 
     */
    public function getDateInsert()
    {
        return $this->date_insert;
    }
}
