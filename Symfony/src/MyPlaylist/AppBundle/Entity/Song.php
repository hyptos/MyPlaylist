<?php

namespace MyPlaylist\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MyPlaylist\AppBundle\Entity\Song
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MyPlaylist\AppBundle\Entity\SongRepository")
 */
class Song
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
     * @var string $length
     *
     * @ORM\Column(name="length", type="string", length=255)
     */
    private $length;

    /**
     * @var \DateTime $date_record
     *
     * @ORM\Column(name="date_record", type="date")
     */
    private $date_record;

    /**
     * @var string $filename
     *
     * @ORM\Column(name="filename", type="string", length=255)
     */
    private $filename;

     /**
     * @ORM\ManyToMany(targetEntity="MyPlaylist\AppBundle\Entity\Tag", cascade={"persist"})
     */
    private $tags; //tags avec un "s" car il ya plusieurs tag pour une chanson


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
     * @return Song
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
     * Set length
     *
     * @param string $length
     * @return Song
     */
    public function setLength($length)
    {
        $this->length = $length;
    
        return $this;
    }

    /**
     * Get length
     *
     * @return string 
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set date_record
     *
     * @param \DateTime $dateRecord
     * @return Song
     */
    public function setDateRecord($dateRecord)
    {
        $this->date_record = $dateRecord;
    
        return $this;
    }

    /**
     * Get date_record
     *
     * @return \DateTime 
     */
    public function getDateRecord()
    {
        return $this->date_record;
    }

    /**
     * Set filename
     *
     * @param string $filename
     * @return Song
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
    
        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add tags
     *
     * @param MyPlaylist\AppBundle\Entity\Tag $tags
     * @return Song
     */
    public function addTag(\MyPlaylist\AppBundle\Entity\Tag $tags)
    {
        $this->tags[] = $tags;
    
        return $this;
    }

    /**
     * Remove tags
     *
     * @param MyPlaylist\AppBundle\Entity\Tag $tags
     */
    public function removeTag(\MyPlaylist\AppBundle\Entity\Tag $tags)
    {
        $this->tags->removeElement($tags);
    }

    /**
     * Get tags
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getTags()
    {
        return $this->tags;
    }
}