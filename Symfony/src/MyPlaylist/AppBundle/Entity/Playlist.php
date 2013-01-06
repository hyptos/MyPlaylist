<?php

namespace MyPlaylist\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MyPlaylist\AppBundle\Entity\Playlist
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MyPlaylist\AppBundle\Entity\PlaylistRepository")
 */
class Playlist
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
     * @ORM\ManyToMany(targetEntity="MyPlaylist\AppBundle\Entity\Song", cascade={"persist"})
     */
    private $songs; //songs avec un "s" car il ya plusieurs chanson pour une playlist

    public function __construct()
    {
        $this->name = "";
    }

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
     * @return Playlist
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
     * Add songs
     *
     * @param MyPlaylist\AppBundle\Entity\Song $songs
     * @return Playlist
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

    /**
     * Create Playlist.m3u
     *
     * @return void
     */
    public function createM3u(){

        $fichier = $this->getName().'.m3u';
        //On ouvre le fichier
        $fp = fopen($fichier ,"w");
        //On ecrit dedans
        foreach($this->getSongs() as $value){
            fputs($fp, $value->getFilename());
            fputs($fp, "\n"); 
        }
        //On ferme le fichier
        fclose($fp);
    }
}