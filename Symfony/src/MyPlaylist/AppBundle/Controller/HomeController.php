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


    public function mailAction() {
    	$contenu = $this->renderView('MyPlaylistAppBundle:MyPlaylist:email.txt.twig', array(
	    'var1' => $var1,
	    'var2' => $var2
		));

		// Puis on envoie l'e-mail, par exemple :
		mail('moi@siteduzero.com', 'Inscription OK', $contenu);

        // N'oublions pas de retourner une réponse, par exemple, une page qui afficherait « L'email a bien été envoyé ».
        return new Response('Email bien envoyé');
    }
}

?>