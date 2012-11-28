<?php

// src/Sdz/BlogBundle/Controller/BlogController.php

namespace MyPlaylist\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use MyPlaylist\AppBundle\Entity\Song;

class SongController extends Controller
{
    public function indexAction()
    {
        //Affichage des sons disponibles
        // On récupère toute la table son
        $song = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('MyPlaylistAppBundle:Song')
                         ->findAll();

        return $this->render('MyPlaylistAppBundle:Song:index.html.twig', array('song' => $song ));
    }

     public function viewSongAction(Song $song)
    {

        return $this->render('MyPlaylistAppBundle:Song:viewSong.html.twig', array('song' => $song));
    }

     // Permet d'ajouter une chanson
    public function viewAddAction()
    {
        $song = new Song;

        $form = $this->createFormBuilder($song)
            ->add('title',       'text')
            ->add('length',       'text')
            ->add('date_record',       'date')
            ->add('filename',       'text')
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
                $em->persist($song);
                $em->flush();

                // On redirige vers la page de visualisation de la playlist nouvellement créé
                return $this->redirect($this->generateUrl('MyPlaylist_viewSongId', array('id' => $song->getId())));
            }
        }

        return $this->render('MyPlaylistAppBundle:Song:viewAddSong.html.twig', array(
         'form' => $form->createView(),
        ));
    }

     public function viewEditSongAction()
    {
        //Affiche toute les playlist disponible
        // On récupère toute la table Playlist
        $song = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('MyPlaylistAppBundle:Song')
                         ->findAll();

        // $playlist est donc une instance de de l'entité Playlist

        // Ou null si aucune playlist n'a été trouvé avec l'id $id
        if($song === null)
        {
            throw $this->createNotFoundException('Song[id='.$id.'] inexistant.');
        }
        
        return $this->render('MyPlaylistAppBundle:Song:viewEditSong.html.twig', array('song' => $song));
    }
    
     public function editSongAction(Song $song)
    {
        //Permet de modifier une playlist
               
    {
         $song = $this      ->getDoctrine()
                            ->getManager()
                            ->getRepository('MyPlaylistAppBundle:Song')
                            ->find($song->getId()); 

        // On crée le formulaire à partir de l'entité Playlist
        $form   = $this->createFormBuilder($song)
                ->add('title','text', array(
                                        'attr' => array(
                                        'placeholder' => $song->getTitle(),
                                        'value' => '',
                                            )))
                ->add('length',       'text')
                ->add('date_record',       'date')
                ->add('filename',       'text') 
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
                // On récupère les données de notre formulaire/
                $name = $form["title"]->getData();
                $song->setTitle($name);

                //On modifie notre objet en BDD
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($song);
                $em->flush();

                // On redirige vers l'affichage de la playlist
              return $this->redirect($this->generateUrl('MyPlaylist_viewSongId', array('id' => $song->getId())));
            }
        }

        return $this->render('MyPlaylistAppBundle:Song:viewEdit.html.twig', array(
            'form'      => $form->createView(),
            'song'  => $song,
        ));
    }
    }

    //Permet de supprimer une chanson
    public function viewDelSongAction()
    {
        
       $song = new Song;

        // On crée le formulaire à partir de l'entité Playlist
        $form = $this->createFormBuilder($song)
            ->add('title','entity', array(
                                                'class'     => 'MyPlaylistAppBundle:Song',
                                                'property'  => 'title',
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
                // On récupère les données de notre formulaire/
                $title = $form["title"]->getData();
                $song = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('MyPlaylistAppBundle:Song')
                         ->find($title->getId()); 

                //On supprime notre objet en BDD
                $em = $this->getDoctrine()->getEntityManager();
                $em->remove($song);
                $em->flush();

                // On redirige vers l'accueil
              return $this->render('MyPlaylistAppBundle:Song:del.html.twig');
            }
        }

        return $this->render('MyPlaylistAppBundle:Song:viewDelSong.html.twig', array(
            'form' => $form->createView(),
        ));
    }
  
}

?>