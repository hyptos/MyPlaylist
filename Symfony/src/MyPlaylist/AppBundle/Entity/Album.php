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
     * @var \DateTime $dateProduction
     *
     * @ORM\Column(name="date_production", type="date")
     */
    private $date_production;

    /**
     * @var \DateTime $dateInsert
     *
     * @ORM\Column(name="date_insert", type="date")
     */
    private $date_insert;

     /**
     * @ORM\ManyToMany(targetEntity="MyPlaylist\AppBundle\Entity\Song", cascade={"persist"})
     */
    private $songs; //songs avec un "s" car il ya plusieurs chansons pour un album


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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->songs = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add songs
     *
     * @param MyPlaylist\AppBundle\Entity\Song $songs
     * @return Album
     */
    public function addSong(\MyPlaylist\AppBundle\Entity\Song $songs)
    {
        $this->songs[] = $songs;
    
        return $this;
    }

    /**
     * Remove songs
     *
     * @param MyPlaylist\AppBundle\Entity\Song $songs
     */
    public function removeSong(\MyPlaylist\AppBundle\Entity\Song $songs)
    {
        $this->songs->removeElement($songs);
    }

    /**
     * Get songs
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getSongs()
    {
        return $this->songs;
    }
}