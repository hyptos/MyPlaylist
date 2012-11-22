<?php

/* MyPlaylistAppBundle:Song:edit.html.twig */
class __TwigTemplate_9d19150ff9fa84f3c4d15070051c2e2b extends Twig_Template
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
        <title>Edition des musiques existantes</title>
    </head>
    <body>
        <h3><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_home"), "html", null, true);
        echo "\">Retour à l'accueil</a></h3>

        <p>
           Il s'agit de la vue gérant l'édition des musiques
        </p>
       
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "MyPlaylistAppBundle:Song:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 7,  17 => 1,);
    }
}
