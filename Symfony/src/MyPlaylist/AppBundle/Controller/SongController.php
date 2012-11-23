<?php

// src/Sdz/BlogBundle/Controller/BlogController.php

namespace MyPlaylist\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SongController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyPlaylistAppBundle:Song:index.html.twig');
    }

    public function viewAction($id)
    {
        // Affiche le detail d'une chanson 
        
        return new Response("Affichage de la chanson d'id : ".$id.".");
    }

    public function viewSlugAction($slug,$annee,$format)
    {
    	// Affiche le detail d'une chanson spécifique

        return new Response("On pourrait afficher la chanson correspondant au slug '".$slug."', créé en ".$annee." et au format ".$format.".");
    }

    public function addAction()
    {
    	// Permet d'ajouter une chanson
        return $this->render('MyPlaylistAppBundle:Song:add.html.twig');
    }

    public function editAction()
    {
    	//Permet de modifier une chanson
        return $this->render('MyPlaylistAppBundle:Song:edit.html.twig');
    }

    public function delAction()
    {
    	//Permet de supprimer une chanson
        return $this->render('MyPlaylistAppBundle:Song:del.html.twig');
    }
  
}

?>