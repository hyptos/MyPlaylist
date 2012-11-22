<?php

/* MyPlaylistAppBundle:MyPlaylist:index.html.twig */
class __TwigTemplate_88e4f8966c15a97536010ae2ac290b90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenue sur l'application MyPlaylist!</title>
    </head>
    <body>
        <h3><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_home"), "html", null, true);
        echo "\">Home</a></h3>
        <h3><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_addPlaylist"), "html", null, true);
        echo "\">Ajouter</a></h3>
        <h3><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_editPlaylist"), "html", null, true);
        echo "\">Modifier</a></h3>
        <h3><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_delPlaylist"), "html", null, true);
        echo "\">Supprimer</a></h3>
        <h3><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_search"), "html", null, true);
        echo "\">Rechercher</a></h3>
        <h3><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_song"), "html", null, true);
        echo "\">Liste de Chansons</a></h3>
        <h3><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_about"), "html", null, true);
        echo "\">A Propos</a></h3>
        <p>
            Le Hello World est un grand classique en programmation.
            Il signifie énormément, car cela veut dire que vous avez
            réussi à exécuter le programme pour accomplir une tâche simple :
            afficher ce hello world !
        </p>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "MyPlaylistAppBundle:MyPlaylist:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  45 => 12,  41 => 11,  37 => 10,  33 => 9,  29 => 8,  25 => 7,  17 => 1,);
    }
}
