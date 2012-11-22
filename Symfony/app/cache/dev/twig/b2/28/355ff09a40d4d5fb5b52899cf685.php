<?php

/* MyPlaylistAppBundle:Song:add.html.twig */
class __TwigTemplate_b228355ff09a40d4d5fb5b52899cf685 extends Twig_Template
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
        <title>Ajout de musique dans la bibliothèque !</title>
    </head>
    <body>
       
        <h3><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_home"), "html", null, true);
        echo "\">Retour à l'accueil</a></h3>

        <p>
           Il s'agit de la vue gérant l'ajout de musiques
        </p>
       
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "MyPlaylistAppBundle:Song:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 8,  17 => 1,);
    }
}
