<?php

/* MyPlaylistAppBundle:MyPlaylist:search.html.twig */
class __TwigTemplate_935d13412787442e559d42d921d02dfd extends Twig_Template
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
        <title>Bienvenue sur la recherche</title>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_about"), "html", null, true);
        echo "\">A Propos</a></h3>
        <p>
            RECHERCHE
        </p>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "MyPlaylistAppBundle:MyPlaylist:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  41 => 11,  37 => 10,  33 => 9,  29 => 8,  25 => 7,  17 => 1,);
    }
}
