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


    public function viewPlaylistAction(Playlist $playlist)
    {
        // Récupérons le titre de la playlist.
        $playlist->getName();        
        return $this->render('MyPlaylistAppBundle:Playlist:viewPlaylist.html.twig', array('playlist' => $playlist));
    }

    public function viewEditPlaylistAction()
    {
        //Affiche toute les playlist disponible
        // On récupère toute la table Playlist
        $playlist = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('MyPlaylistAppBundle:Playlist')
                         ->findAll();

        // $playlist est donc une instance de de l'entité Playlist

        // Ou null si aucune playlist n'a été trouvé avec l'id $id
        if($playlist === null)
        {
            throw $this->createNotFoundException('Playlist[id='.$id.'] inexistant.');
        }
        
        return $this->render('MyPlaylistAppBundle:Playlist:viewEditPlaylist.html.twig', array('playlist' => $playlist));
    }

    public function viewDelPlaylistAction()
    {
         $playlist = new Playlist;

        // J'ai raccourci cette partie, car plus rapide à écrire !
        $form = $this->createFormBuilder($playlist)
            ->add('name','entity', array(
                                                'class'     => 'MyPlaylistAppBundle:Playlist',
                                                'property'  => 'name',
                                                'required'  => false))
            ->getForm();
            

        // On récupère la requête.
        $request = $this->get('request');

        // On vérifie qu'elle est de type « POST ».
        if( $request->getMethod() == 'POST' )
        {
            // On fait le lien Requête <-> Formulaire.
            $form->bind($request);

            // On vérifie que les valeurs rentrées sont correctes.
            // (Nous verrons la validation des objets en détail plus bas dans ce chapitre.)
            if( $form->isValid() )
            {
                // On l'enregistre notre objet $article dans la base de données.
                $em = $this->getDoctrine()->getEntityManager();
                $em->remove($playlist);
                $em->flush();

                // On redirige vers la page de visualisation de la playlist nouvellement créé
             return new Response("Affichage de la playlist d'id : ".$playlist->getId().", avec le nom : ".$playlist->getName());
            }
        }

        return $this->render('MyPlaylistAppBundle:Playlist:viewDelPlaylist.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function viewSlugAction($slug,$annee,$format)
    {
    	// Affiche le detail d'une playlist spécifique
        return new Response("On pourrait afficher la playlist correspondant au slug '".$slug."', créé en ".$annee." et au format ".$format.".");
    }


    public function viewAddAction()
    {
       $playlist = new Playlist;

        // J'ai raccourci cette partie, car plus rapide à écrire !
        $form = $this->createFormBuilder($playlist)
            ->add('name',       'text')
            ->getForm();

        // On récupère la requête.
        $request = $this->get('request');

        // On vérifie qu'elle est de type « POST ».
        if( $request->getMethod() == 'POST' )
        {
            // On fait le lien Requête <-> Formulaire.
            $form->bind($request);

            // On vérifie que les valeurs rentrées sont correctes.
            // (Nous verrons la validation des objets en détail plus bas dans ce chapitre.)
            if( $form->isValid() )
            {
                // On l'enregistre notre objet $article dans la base de données.
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($playlist);
                $em->flush();

                // On redirige vers la page de visualisation de la playlist nouvellement créé
            return $this->redirect($this->generateUrl('MyPlaylist_viewPlaylistId', array('id' => $playlist->getId())));
            }
        }

        return $this->render('MyPlaylistAppBundle:Playlist:viewAddPlaylist.html.twig', array(
            'form' => $form->createView(),
        ));
    }


    public function editAction(Playlist $playlist)
    {
    	//Permet de modifier une playlist
               
        // On récupère la playlist passer en parametre
        $playlist = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('MyPlaylistAppBundle:Playlist')
                         ->find($id);

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

    public function delAction(Playlist $playlist)
    {
    	//Permet de supprimer une chanson
               
        // On récupère la playlist passer en parametre
        $playlist = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('MyPlaylistAppBundle:Playlist')
                         ->find($id);

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