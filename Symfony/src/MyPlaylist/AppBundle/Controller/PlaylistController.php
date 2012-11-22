<?php

namespace MyPlaylist\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PlaylistController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyPlaylistAppBundle:Playlist:index.html.twig');
    }

    public function viewAction($id)
    {
        // Affiche une playlist
        
        return new Response("Affichage de la playlist : ".$id.".");
    }

    public function viewSlugAction($slug,$annee,$format)
    {
    	// Affiche le detail d'une playlist spécifique

        return new Response("On pourrait afficher la playlist correspondant au slug '".$slug."', créé en ".$annee." et au format ".$format.".");
    }


    public function addAction()
    {
    	// Permet d'ajouter une playlist
        return $this->render('MyPlaylistAppBundle:Playlist:add.html.twig');
    }

    public function editAction()
    {
    	//Permet de modifier une playlist
        return $this->render('MyPlaylistAppBundle:Playlist:edit.html.twig');
    }

    public function delAction()
    {
    	//Permet de supprimer une chanson
        return $this->render('MyPlaylistAppBundle:Playlist:del.html.twig');
    }
}

?>