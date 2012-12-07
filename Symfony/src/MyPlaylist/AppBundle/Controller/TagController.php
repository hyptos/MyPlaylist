<?php

namespace MyPlaylist\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use MyPlaylist\AppBundle\Entity\Tag;

class TagController extends Controller
{
    public function indexAction()
    {
        //Affichage des tags disponible
        // On récupère toute la table Tag
        $tag = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('MyPlaylistAppBundle:Tag')
                         ->findAll();

        return $this->render('MyPlaylistAppBundle:Tag:index.html.twig', array('tag'   => $tag ));
        
    }


    public function viewTagAction(Tag $tag)
    {    
        return $this->render('MyPlaylistAppBundle:Tag:viewTag.html.twig', array('tag' => $tag));
    }

    public function viewAddAction()
    {
       $tag = new Tag;

        // J'ai raccourci cette partie, car plus rapide à écrire !
        $form = $this->createFormBuilder($tag)
            ->add('designation','text',array('required' =>false))
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
                $em->persist($tag);
                $em->flush();

                // On redirige vers la page de visualisation de la tag nouvellement créé
                return new response('OK');
            }
        }

        return $this->render('MyPlaylistAppBundle:Tag:viewAdd.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function viewEditTagAction()
    {
        //Affiche toute les tag disponible
        // On récupère toute la table Tag
        $tag = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('MyPlaylistAppBundle:Tag')
                         ->findAll();

        // $tag est donc une instance de de l'entité Playlist

        // Ou null si aucune tag n'a été trouvé avec l'id $id
        if($tag === null)
        {
            throw $this->createNotFoundException('Tag[id='.$id.'] inexistant.');
        }
        
        return $this->render('MyPlaylistAppBundle:Tag:viewEditTag.html.twig', array('tag' => $tag));
    }

    public function editTagAction(Tag $tag)
    {
    	//Permet de modifier une tag
               
    {
         $tag = $this  ->getDoctrine()
                            ->getManager()
                            ->getRepository('MyPlaylistAppBundle:Tag')
                            ->find($tag->getId()); 

        // On crée le formulaire à partir de l'entité Tag
        $form   = $this->createFormBuilder($tag)
                ->add('designation','text', array(
                                        'attr' => array(
                                                        'placeholder' => $tag->getDesignation(),
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
                $designation = $form["designation"]->getData();
                $tag->setDesignation($designation);
                //On modifie notre objet en BDD
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($tag);
                $em->flush();

                // On redirige vers l'affichage de la tag
              return new response('OK');
            }
        }

        return $this->render('MyPlaylistAppBundle:Tag:viewEdit.html.twig', array(
            'form'      => $form->createView(),
            'tag'  => $tag,
        ));
    }
    }

    public function viewDelAction()
    {
         $tag = new Tag;

        // On crée le formulaire à partir de l'entité Tag
        $form = $this->createFormBuilder($tag)
            ->add('designation','entity', array(
                                                'class'     => 'MyPlaylistAppBundle:Tag',
                                                'property'  => 'designation',
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
                // On récupère les données de notre formulaire/
                $designation = $form["designation"]->getData();
                $tag = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('MyPlaylistAppBundle:Tag')
                         ->find($designation->getId()); 


                //On supprime notre objet en BDD
                $em = $this->getDoctrine()->getEntityManager();
                $em->remove($tag);
                $em->flush();

                // On redirige vers l'accueil
              return $this->render('MyPlaylistAppBundle:Tag:del.html.twig');
            }
        }

        return $this->render('MyPlaylistAppBundle:Tag:viewDel.html.twig', array(
            'form' => $form->createView(),
        ));
    }

      /******************** Permet d'ajouter un tag à une song ********************/
    public function addToSongAction($idSong,$idTag)
    {

         $tag      = $this ->getDoctrine()
                            ->getManager()
                            ->getRepository('MyPlaylistAppBundle:Tag')
                            ->find($idTag); 
                  
        $song   = $this ->getDoctrine()
                            ->getManager()
                            ->getRepository('MyPlaylistAppBundle:Song')
                            ->find($idSong);                    

        // On récupère la requête.
        $request = $this->get('request');

        // On vérifie qu'elle est de type « POST ».
        if( $request->getMethod() == 'GET' )
        {
            // On fait le lien chanson <-> Tag.
            $song->addTag($tag);


            // On l'enregistre dans la BDD
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($tag);
            $em->flush();

            // On redirige vers la page de visualisation de la song nouvellement créé
            return $this->redirect($this->generateUrl('MyPlaylist_viewSongId', array('id' => $song->getId())));
            }        

        return $this->render('MyPlaylistAppBundle:Tag:tag.html.twig');
    }

    public function delToSongAction($idSong,$idTag)
    {

         $tag   = $this ->getDoctrine()
                            ->getManager()
                            ->getRepository('MyPlaylistAppBundle:Tag')
                            ->find($idTag); 
                  
        $song   = $this ->getDoctrine()
                            ->getManager()
                            ->getRepository('MyPlaylistAppBundle:Song')
                            ->find($idSong);                    

        // On récupère la requête.
        $request = $this->get('request');

        // On vérifie qu'elle est de type « POST ».
        if( $request->getMethod() == 'GET' )
        {
            // On supprime le lien chanson <-> Tag.
            $song->removeTag($tag);

                // On l'enregistre dans la BDD
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($tag);
                $em->flush();

                // On redirige vers la page de visualisation de la song 
                return $this->redirect($this->generateUrl('MyPlaylist_viewSongId', array('id' => $song->getId())));
            }        

        return $this->render('MyPlaylistAppBundle:Tag:tag.html.twig');
    }
  

}

?>