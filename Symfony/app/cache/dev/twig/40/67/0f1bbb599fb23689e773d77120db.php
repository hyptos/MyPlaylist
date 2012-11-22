<?php

/* MyPlaylistAppBundle:Song:index.html.twig */
class __TwigTemplate_40670f1bbb599fb23689e773d77120db extends Twig_Template
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
        <title>A propos !</title>
    </head>
    <body>
        <h3><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_addSong"), "html", null, true);
        echo "\">Ajouter musique</a></h3>
        <h3><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_editSong"), "html", null, true);
        echo "\">Editer musique</a></h3>
        <h3><a href=\"#\">Visualiser Liste musique</a></h3>
        <h3><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_home"), "html", null, true);
        echo "\">Retour à l'accueil</a></h3>

        <p>
           Il s'agit de la vue gérant les musiques
        </p>
       
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "MyPlaylistAppBundle:Song:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 10,  29 => 8,  25 => 7,  17 => 1,);
    }
}
