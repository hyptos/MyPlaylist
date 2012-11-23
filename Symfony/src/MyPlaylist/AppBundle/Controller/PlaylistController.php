<?php

namespace MyPlaylist\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use MyPlaylist\AppBundle\Entity\Playlist;

class PlaylistController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyPlaylistAppBundle:Playlist:index.html.twig');
    }


    public function viewPlaylistAction($id)
    {
        // On récupère le repository
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('MyPlaylistAppBundle:Playlist');

        // On récupère l'entité correspondant à l'id $id
        $playlist = $repository->find($id);

        // $playlist est donc une instance de de l'entité Playlist

        // Ou null si aucune playlist n'a été trouvé avec l'id $id
        if($playlist === null)
        {
            throw $this->createNotFoundException('Playlist[id='.$id.'] inexistant.');
        }
        
        return $this->render('MyPlaylistAppBundle:Playlist:viewPlaylist.html.twig', array('playlist' => $playlist));
    }

    public function viewSlugAction($slug,$annee,$format)
    {
    	// Affiche le detail d'une playlist spécifique

        return new Response("On pourrait afficher la playlist correspondant au slug '".$slug."', créé en ".$annee." et au format ".$format.".");
    }


    public function addAction()
    {
    	// Permet d'ajouter une playlist
        // Création de l'entité
        $playlist = new Playlist(); //crée un objet vide
        $playlist->setName("pl_des_Beatles"); // rempli l'objet 


        // On récupére l'EntityManager
        $em = $this->getDoctrine()->getManager();
        $em->persist($playlist);
        $em->flush();
        
        // On redirige vers la page de la nouvelle Playlist ( uniquement si on passe par un formulaire)
        if( $this->get('request')->getMethod() == 'POST' )
        {
            $this->get('session')->setFlash('notice', 'Playlist bien enregistré');
            return $this->render('MyPlaylistAppBundle:Playlist:viewPlaylist.html.twig', array('playlist' => $playlist));
        }
        
        return $this->render('MyPlaylistAppBundle:Playlist:add.html.twig', array('playlist' => $playlist));
        

        
    }

    public function editAction()
    {
    	//Permet de modifier une playlist
               
        // On récupère la playlist avec l'id 
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('MyPlaylistAppBundle:Playlist');


        // On récupère l'entité correspondant à l'id $id
        $playlist = $repository->find($id);

        // Ou null si aucune playlist n'a été trouvé avec l'id $id
        if($playlist === null)
        {
            throw $this->createNotFoundException('Playlist[id='.$id.'] inexistant.');
        }

        //Ici on doit modifier la playlist, exemple : changer son nom
        $playlist->setName("Truc");


        // On récupére l'EntityManager
        $em = $this->getDoctrine()->getManager();
        $em->refresh($playlist);
        $em->flush();

        return $this->render('MyPlaylistAppBundle:Playlist:edit.html.twig', array('playlist' => $playlist));
    }

    public function delAction()
    {
    	//Permet de supprimer une chanson
               
        // Création de l'entité
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('MyPlaylistAppBundle:Playlist');

        // On récupère l'entité correspondant à l'id $id
        $playlist = $repository->find($id);

        // Ou null si aucune playlist n'a été trouvé avec l'id $id
        if($playlist === null)
        {
            throw $this->createNotFoundException('Playlist[id='.$id.'] inexistant.');
        }


        // On récupére l'EntityManager
        $em = $this->getDoctrine()->getManager();
        $em->remove($playlist);
        $em->flush();

        return $this->render('MyPlaylistAppBundle:Playlist:del.html.twig', array('playlist' => $playlist));
    }
}

?>