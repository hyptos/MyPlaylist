<?php

namespace MyPlaylist\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MyPlaylist\AppBundle\Entity\Band
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MyPlaylist\AppBundle\Entity\BandRepository")
 */
class Band
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
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var \DateTime $dateFormation
     *
     * @ORM\Column(name="date_formation", type="date")
     */
    private $date_formation;

    /**
     * @var \DateTime $dateDisband
     *
     * @ORM\Column(name="date_disband", type="date")
     */
    private $date_disband;

    /**
     * @var \DateTime $dateInsert
     *
     * @ORM\Column(name="date_insert", type="date")
     */
    private $date_insert;

    /**
     * @ORM\ManyToMany(targetEntity="MyPlaylist\AppBundle\Entity\Album", cascade={"persist"})
     */
    private $albums; //albums avec un "s" car un groupe peut produire plusieurs albums


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
     * Set name
     *
     * @param string $name
     * @return Band
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set date_formation
     *
     * @param \DateTime $dateFormation
     * @return Band
     */
    public function setDateFormation($dateFormation)
    {
        $this->date_formation = $dateFormation;
    
        return $this;
    }

    /**
     * Get date_formation
     *
     * @return \DateTime 
     */
    public function getDateFormation()
    {
        return $this->date_formation;
    }

    /**
     * Set date_disband
     *
     * @param \DateTime $dateDisband
     * @return Band
     */
    public function setDateDisband($dateDisband)
    {
        $this->date_disband = $dateDisband;
    
        return $this;
    }

    /**
     * Get date_disband
     *
     * @return \DateTime 
     */
    public function getDateDisband()
    {
        return $this->date_disband;
    }

    /**
     * Set date_insert
     *
     * @param \DateTime $dateInsert
     * @return Band
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
        $this->albums = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add albums
     *
     * @param MyPlaylist\AppBundle\Entity\Album $albums
     * @return Band
     */
    public function addAlbum(\MyPlaylist\AppBundle\Entity\Album $albums)
    {
        $this->albums[] = $albums;
    
        return $this;
    }

    /**
     * Remove albums
     *
     * @param MyPlaylist\AppBundle\Entity\Album $albums
     */
    public function removeAlbum(\MyPlaylist\AppBundle\Entity\Album $albums)
    {
        $this->albums->removeElement($albums);
    }

    /**
     * Get albums
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getAlbums()
    {
        return $this->albums;
    }
}