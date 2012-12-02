<?php

// src/Sdz/BlogBundle/Controller/BlogController.php

namespace MyPlaylist\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyPlaylistAppBundle:MyPlaylist:index.html.twig');
    }


    public function viewAboutAction()
    {
        // Affiche la page apropos

       return $this->render('MyPlaylistAppBundle:MyPlaylist:about.html.twig');
    }

    public function searchAction()
    {
        // Affiche la page apropos

       return $this->render('MyPlaylistAppBundle:MyPlaylist:search.html.twig');
    }
}

?>