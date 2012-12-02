<?php

namespace MyPlaylist\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use MyPlaylist\AppBundle\Entity\Album;

class AlbumController extends Controller
{
    public function indexAction()
    {
        //Affichage des playlists disponible
        // On récupère toute la table Playlist
        $album = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('MyPlaylistAppBundle:Album')
                         ->findAll();

        return $this->render('MyPlaylistAppBundle:Album:index.html.twig', array('album'   => $album ));
        
    }


    public function viewAlbumAction(Album $album)
    {    
        return $this->render('MyPlaylistAppBundle:Album:viewAlbum.html.twig', array('album'   => $album ));
    }


    public function viewAddAction()
    {
       $album = new Album;

        $form   = $this->createFormBuilder($album)
                ->add('title','text')
                ->add('date_production','date')
                ->add('date_insert','date')
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
                $em->persist($album);
                $em->flush();

            // On redirige vers la page de visualisation de la playlist nouvellement créé
            return new Response('OK');
            }
        }

        return $this->render('MyPlaylistAppBundle:Album:viewAdd.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function viewEditAction()
    {
        //Affiche toute les playlist disponible
        // On récupère toute la table Playlist
        $album = $this  ->getDoctrine()
                        ->getManager()
                        ->getRepository('MyPlaylistAppBundle:Album')
                        ->findAll();

        if($album === null)
        {
            throw $this->createNotFoundException('Album[id='.$id.'] inexistant.');
        }
        
        return $this->render('MyPlaylistAppBundle:Album:viewEdit.html.twig', array('album' => $album));
    }

    public function editAlbumAction(Album $album)
    {
    	//Permet de modifier une playlist
               
    {
         $album = $this  ->getDoctrine()
                            ->getManager()
                            ->getRepository('MyPlaylistAppBundle:Album')
                            ->find($album->getId()); 

        // On crée le formulaire à partir de l'entité Playlist
        $form   = $this ->createFormBuilder($album)
                        ->add('title','text', array(
                                                    'attr' => array(
                                                    'placeholder' => $album->getTitle(),
                                                    'value' => '',
                                                    )))
                        ->add('date_production','date')
                        ->add('date_insert','date')
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
                $title          = $form["title"]->getData();
                $dateProduction = $form["date_production"]->getData();
                $dateInsertion  = $form["date_insert"]->getData();
                $album->setTitle($title);
                $album->setDateProduction($dateProduction);
                $album->setDateInsert($dateInsertion);

                //On modifie notre objet en BDD
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($album);
                $em->flush();

                // On redirige vers l'affichage de l'Album
                return new Response('OK');
            }
        }

        return $this->render('MyPlaylistAppBundle:Album:editAlbum.html.twig', array(
            'form'      => $form->createView(),
            'album'  => $album,
        ));
    }
    }

    public function viewDelAction()
    {
         $album = new Album;

        // On crée le formulaire à partir de l'entité Playlist
        $form = $this->createFormBuilder($album)
            ->add('title','entity', array(
                                                'class'     => 'MyPlaylistAppBundle:Album',
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
            if( $form->isValid() )
            {
                // On récupère les données de notre formulaire.
                $album = $form["title"]->getData();


                //On supprime notre objet en BDD
                $em = $this->getDoctrine()->getEntityManager();
                $em->remove($album);
                $em->flush();

                // On redirige vers l'accueil
              return $this->render('MyPlaylistAppBundle:Album:del.html.twig');
            }
        }

        return $this->render('MyPlaylistAppBundle:Album:viewDel.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}

?>