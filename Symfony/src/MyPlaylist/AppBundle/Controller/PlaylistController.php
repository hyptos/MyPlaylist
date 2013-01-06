<?php

namespace MyPlaylist\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use MyPlaylist\AppBundle\Entity\Playlist;

class PlaylistController extends Controller
{
    public function indexAction()
    {
        //Affichage des playlists disponible
        // On récupère toute la table Playlist
        $playlist = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('MyPlaylistAppBundle:Playlist')
                         ->findAll();

        return $this->render('MyPlaylistAppBundle:Playlist:index.html.twig', array('playlist'   => $playlist ));
        
    }


    public function viewPlaylistAction(Playlist $playlist)
    {    
        return $this->render('MyPlaylistAppBundle:Playlist:viewPlaylist.html.twig', array('playlist' => $playlist));
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
            ->add('name','text',array('required' =>false))
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
                return new response('OK');
            }
        }

        return $this->render('MyPlaylistAppBundle:Playlist:viewAddPlaylist.html.twig', array(
            'form' => $form->createView(),
        ));
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

    public function editPlaylistAction(Playlist $playlist)
    {
    	//Permet de modifier une playlist
               
    {
         $playlist = $this  ->getDoctrine()
                            ->getManager()
                            ->getRepository('MyPlaylistAppBundle:Playlist')
                            ->find($playlist->getId()); 

        // On crée le formulaire à partir de l'entité Playlist
        $form   = $this->createFormBuilder($playlist)
                ->add('name','text', array(
                                        'attr' => array(
                                                        'placeholder' => $playlist->getName(),
                                                        'value' => ''),
                                        'required' =>   false))
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
                $name = $form["name"]->getData();
                $playlist->setName($name);

                //On modifie notre objet en BDD
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($playlist);
                $em->flush();

                // On redirige vers l'affichage de la playlist
              return new response('OK');
            }
        }

        return $this->render('MyPlaylistAppBundle:Playlist:viewEdit.html.twig', array(
            'form'      => $form->createView(),
            'playlist'  => $playlist,
        ));
    }
    }

    public function viewDelPlaylistAction()
    {
         $playlist = new Playlist;

        // On crée le formulaire à partir de l'entité Playlist
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
                // On récupère les données de notre formulaire/
                $name = $form["name"]->getData();
                $playlist = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('MyPlaylistAppBundle:Playlist')
                         ->find($name->getId()); 

                //On affecte l'objet recupéré à notre objet courant


                //On supprime notre objet en BDD
                $em = $this->getDoctrine()->getEntityManager();
                $em->remove($playlist);
                $em->flush();

                // On redirige vers l'accueil
              return $this->render('MyPlaylistAppBundle:Playlist:del.html.twig');
            }
        }

        return $this->render('MyPlaylistAppBundle:Playlist:viewDelPlaylist.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function craeteM3uAction(Playlist $playlist){
        $playlist->createM3u();
        return new response('Le fichier va être télécharger !');
    }

}

?>