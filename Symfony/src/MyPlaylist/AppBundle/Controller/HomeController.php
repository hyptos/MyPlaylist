<?php

// src/Sdz/BlogBundle/Controller/BlogController.php

namespace MyPlaylist\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use MyPlaylist\AppBundle\Entity\Song;
use MyPlaylist\AppBundle\Entity\Band;
use MyPlaylist\AppBundle\Entity\Album;


class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyPlaylistAppBundle:MyPlaylist:index.html.twig');
    }

    public function clementineAction()
    {

        //get connection
        $conn = $this->get('database_connection');
        //run a query
        $tables = $conn->fetchAll('show databases');


       // var_dump($tables);
        for($i=0;$i<sizeof($tables);$i++){ 
            $test[] =  $tables[$i]['Database'];
        } 
        $defaultData = array('message' => 'Type your message here');
        $form = $this->createFormBuilder($defaultData)
        ->add('bdd', 'choice', array(
            'choices'   => array(' ' =>$test)
        ))->getForm();



         // On récupère la requête.
        $request = $this->get('request');

        // On vérifie qu'elle est de type « POST ».
        if( $request->getMethod() == 'POST' )
        {
            // On fait le lien Requête <-> Formulaire.
            $form->bind($request);

            // On charge en dans notre BDD la BDD choisie
            if( $form->isValid() )
            {
              $bdd =   $form["bdd"]->getData();
                

            // On redirige vers la page de visualisation de la playlist nouvellement créé
            return new Response($test[$bdd]);
            }
        }

        //var_dump($tables);
        //break;

        return $this->render('MyPlaylistAppBundle:MyPlaylist:clementine.html.twig', array(
            'tables'      => $tables,
            'form'      => $form->createView(),
        ));
    }


    public function viewAboutAction()
    {
        // Affiche la page apropos

       return $this->render('MyPlaylistAppBundle:MyPlaylist:about.html.twig');
    }

    public function searchAction()
    {
        $songs   = new Song;
        $albums  = new Album;
        $bands   = new Band;
        $defaultData    = array('message' => 'Formulaire de recherche');
        $form           = $this->createFormBuilder($defaultData)
                        ->add('recherche', 'text')
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
                //On cherche dans la BDD 

                //On stocke les résultats
                $data = $form->getData();

                //Recherche dans les titres de chansons
                $repository = $this->getDoctrine()->getRepository('MyPlaylistAppBundle:Song');

                $query = $repository->createQueryBuilder('p')
                        ->where('p.title like :title')
                        ->setParameter('title', $data['recherche'])
                        ->getQuery();

                $songs = $query->getResult();

                 //Recherche dans les titres des albums
                $repository = $this->getDoctrine()->getRepository('MyPlaylistAppBundle:Album');

                $query = $repository->createQueryBuilder('p')
                        ->where('p.title like :title')
                        ->setParameter('title', $data['recherche'])
                        ->getQuery();

                $albums = $query->getResult(); 

                //Recherche dans les noms de groupe
                $repository = $this->getDoctrine()->getRepository('MyPlaylistAppBundle:Band');

                $query = $repository->createQueryBuilder('p')
                        ->where('p.name like :name')
                        ->setParameter('name', $data['recherche'])
                        ->getQuery();

                $bands = $query->getResult(); 

                

            }
        }

        return $this->render('MyPlaylistAppBundle:MyPlaylist:search.html.twig', array(
            'form'      => $form->createView(),
            'songs'      => $songs,
            'albums'     => $albums,
            'bands'      => $bands,
        ));
    }
}

?>