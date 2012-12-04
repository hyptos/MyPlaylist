<?php

namespace MyPlaylist\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use MyPlaylist\AppBundle\Entity\Band;

class BandController extends Controller
{
    public function indexAction()
    {
        //Affichage des bands disponible
        // On récupère toute la table Band
        $band = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('MyPlaylistAppBundle:Band')
                         ->findAll();

        return $this->render('MyPlaylistAppBundle:Band:index.html.twig', array('band'   => $band ));
        
    }


    public function viewBandAction(Band $band)
    {    
        return $this->render('MyPlaylistAppBundle:Band:viewBand.html.twig', array('band' => $band));
    }

    public function viewAddAction()
    {
       $band = new Band;

        // J'ai raccourci cette partie, car plus rapide à écrire !
        $form = $this->createFormBuilder($band)
            ->add('name','text',array('required' =>false))
            ->add('dateFormation','date',array('required' =>false))
            ->add('dateDisband','date',array('required' =>false))
            ->add('dateInsert','date',array('required' =>false))
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
                $em->persist($band);
                $em->flush();

                // On redirige vers la page de visualisation de la band nouvellement créé
                return new response('OK');
            }
        }

        return $this->render('MyPlaylistAppBundle:Band:viewAdd.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function viewEditBandAction()
    {
        //Affiche toute les band disponible
        // On récupère toute la table Band
        $band = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('MyPlaylistAppBundle:Band')
                         ->findAll();

        // $band est donc une instance de de l'entité Band

        // Ou null si aucune band n'a été trouvé avec l'id $id
        if($band === null)
        {
            throw $this->createNotFoundException('Band[id='.$id.'] inexistant.');
        }
        
        return $this->render('MyPlaylistAppBundle:Band:viewEditBand.html.twig', array('band' => $band));
    }

    public function editBandAction(Band $band)
    {
    	//Permet de modifier une band
               
    {
         $band = $this  ->getDoctrine()
                            ->getManager()
                            ->getRepository('MyPlaylistAppBundle:Band')
                            ->find($band->getId()); 

        // On crée le formulaire à partir de l'entité Band
        $form   = $this->createFormBuilder($band)
                ->add('name','text', array(
                                        'attr' => array(
                                                        'placeholder' => $band->getName(),
                                                        'value' => ''),
                                        'required' =>   false))
            ->add('dateFormation','date',array('required' =>false))
            ->add('dateDisband','date',array('required' =>false))
            ->add('dateInsert','date',array('required' =>false))
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
                $dateForm = $form["dateFormation"]->getData();
                $dateDis = $form["dateDisband"]->getData();
                $dateIns = $form["dateInsert"]->getData();

                $band->setName($name);
                $band->setDateFormation($dateForm);
                $band->setDateDisband($dateDis);
                $band->setDateInsert($dateIns);
                //On modifie notre objet en BDD
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($band);
                $em->flush();

                // On redirige vers l'affichage de la band
              return new response('OK');
            }
        }

        return $this->render('MyPlaylistAppBundle:Band:viewEdit.html.twig', array(
            'form'      => $form->createView(),
            'band'  => $band,
        ));
    }
    }

    public function viewDelAction()
    {
         $band = new Band;

        // On crée le formulaire à partir de l'entité Band
        $form = $this->createFormBuilder($band)
            ->add('name','entity', array(
                                                'class'     => 'MyPlaylistAppBundle:Band',
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
            if( $form->isValid() )
            {
                // On récupère les données de notre formulaire/
                $name = $form["name"]->getData();
                $band = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('MyPlaylistAppBundle:Band')
                         ->find($name->getId()); 


                //On supprime notre objet en BDD
                $em = $this->getDoctrine()->getEntityManager();
                $em->remove($band);
                $em->flush();

                // On redirige vers l'accueil
              return $this->render('MyPlaylistAppBundle:Band:del.html.twig');
            }
        }

        return $this->render('MyPlaylistAppBundle:Band:viewDel.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}

?>