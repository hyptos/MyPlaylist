<?php

/* MyPlaylistAppBundle:MyPlaylist:layout.html.twig */
class __TwigTemplate_f9650fb5bf19bba0cbc2c98dc997c8d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />




<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"MyPlaylist est une application de gestion de Playlist\">
    <meta name=\"author\" content=\"Antoine Martin,Dorian Garcia\">

    <!-- Le styles -->
    ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

  </head>

  <body>

    <div class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"navbar-inner\">
        <div class=\"container-fluid\">
          <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </a>
          <a class=\"brand\" href=\"#\">MyPlaylist</a>
          <div class=\"nav-collapse collapse\">
            <p class=\"navbar-text pull-right\">
              <a href=\"#\" class=\"navbar-link\">Se connecter</a>
            </p>
            <ul class=\"nav\">
                <li class=\"active\"><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_home"), "html", null, true);
        echo "\">Home</a></li>
                <li class=\"dropdown\"><a id=\"drop1\" href=\"#\" role=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Playlist <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a tabindex=\"-1\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_viewPlaylist"), "html", null, true);
        echo "\">Mes Playlists</a></li>
                        <li><a tabindex=\"-1\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_viewAddPlaylist"), "html", null, true);
        echo "\">Ajouter</a></li>
                        <li><a tabindex=\"-1\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_viewEditPlaylist"), "html", null, true);
        echo "\">Modifier</a></li>
                        <li><a tabindex=\"-1\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_viewDelPlaylist"), "html", null, true);
        echo "\">Supprimer</a></li>
                    </ul>
                </li>                
                <li class=\"dropdown\"><a id=\"drop1\" href=\"#\" role=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Musiques <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a tabindex=\"-1\" href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_viewSong"), "html", null, true);
        echo "\">Musiques</a></li>
                        <li><a tabindex=\"-1\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_viewAddSong"), "html", null, true);
        echo "\">Ajouter</a></li>
                        <li><a tabindex=\"-1\" href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_viewEditSong"), "html", null, true);
        echo "\">Modifier</a></li>
                        <li><a tabindex=\"-1\" href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_viewDelSong"), "html", null, true);
        echo "\">Supprimer</a></li>
                    </ul>
                </li>        
                <li class=\"dropdown\"><a id=\"drop1\" href=\"#\" role=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Albums <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a tabindex=\"-1\" href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_viewAlbum"), "html", null, true);
        echo "\">Albums</a></li>
                        <li><a tabindex=\"-1\" href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_viewAddAlbum"), "html", null, true);
        echo "\">Ajouter</a></li>
                        <li><a tabindex=\"-1\" href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_viewEditAlbum"), "html", null, true);
        echo "\">Modifier</a></li>
                        <li><a tabindex=\"-1\" href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_viewDelAlbum"), "html", null, true);
        echo "\">Supprimer</a></li>
                    </ul>
                </li>    
                <li><a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_search"), "html", null, true);
        echo "\">Rechercher</a></li>
                <li><a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_about"), "html", null, true);
        echo "\">A Propos</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

<hr><hr>
        <div class=\"span12\">
          <div class=\"hero-unit\">
                    ";
        // line 86
        $this->displayBlock('body', $context, $blocks);
        // line 87
        echo "           
          </div>
        </div><!--/span-->
      </div><!--/row-->


      <footer class=\"span12\">
          ";
        // line 94
        $this->displayBlock('footer', $context, $blocks);
        // line 96
        echo "        
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    ";
        // line 104
        $this->displayBlock('javascripts', $context, $blocks);
        // line 109
        echo "
  </body>
</html>
";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        echo "MyPlaylist";
    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 20
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myplaylistapp/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myplaylistapp/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myplaylistapp/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myplaylistapp/css/alertify-core.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myplaylistapp/css/alertify.default.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
    }

    // line 86
    public function block_body($context, array $blocks = array())
    {
        // line 87
        echo "                    ";
    }

    // line 94
    public function block_footer($context, array $blocks = array())
    {
        // line 95
        echo "                &copy; Copyright 2012 Dorian Garcia & Antoine Martin.
            ";
    }

    // line 104
    public function block_javascripts($context, array $blocks = array())
    {
        // line 105
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myplaylistapp/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myplaylistapp/js/bootstrap.js"), "html", null, true);
        echo "\"></script> 
        <script type=\"text/javascript\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myplaylistapp/js/alertify.js"), "html", null, true);
        echo "\"></script> 
    ";
    }

    public function getTemplateName()
    {
        return "MyPlaylistAppBundle:MyPlaylist:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 107,  241 => 106,  236 => 105,  233 => 104,  228 => 95,  225 => 94,  221 => 87,  218 => 86,  212 => 24,  208 => 23,  204 => 22,  200 => 21,  195 => 20,  192 => 19,  186 => 13,  179 => 109,  177 => 104,  167 => 96,  165 => 94,  156 => 87,  154 => 86,  141 => 76,  137 => 75,  131 => 72,  127 => 71,  123 => 70,  119 => 69,  111 => 64,  107 => 63,  103 => 62,  99 => 61,  91 => 56,  87 => 55,  83 => 54,  79 => 53,  73 => 50,  47 => 26,  45 => 19,  36 => 13,  22 => 1,);
    }
}
