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
            'script' => array($this, 'block_script'),
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
        // line 24
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
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_home"), "html", null, true);
        echo "\">Home</a></li>
                <li class=\"dropdown\"><a id=\"drop1\" href=\"#\" role=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Playlist <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a tabindex=\"-1\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_addPlaylist"), "html", null, true);
        echo "\">Ajouter</a></li>
                        <li><a tabindex=\"-1\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_editPlaylist"), "html", null, true);
        echo "\">Modifier</a></li>
                        <li><a tabindex=\"-1\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_delPlaylist"), "html", null, true);
        echo "\">Supprimer</a></li>
                    </ul>
                </li>                    
                <li><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_search"), "html", null, true);
        echo "\">Rechercher</a></li>
                <li><a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_song"), "html", null, true);
        echo "\">Musiques</a></li>
                <li><a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_about"), "html", null, true);
        echo "\">A Propos</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <hr><hr>

    <div class=\"container-fluid\">
      <div class=\"row-fluid\">
        <div class=\"span3\">
          <div class=\"well sidebar-nav\">
            <ul class=\"nav nav-list\">
              <li class=\"nav-header\">Musiques</li>
                <li><a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_addSong"), "html", null, true);
        echo "\">Ajouter une chanson</a></li>
                <li><a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_editSong"), "html", null, true);
        echo "\">Modifier une chanson</a></li>
                <li><a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_delSong"), "html", null, true);
        echo "\">Supprimer une chanson</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class=\"span9\">
          <div class=\"hero-unit\">
                    ";
        // line 81
        $this->displayBlock('body', $context, $blocks);
        // line 82
        echo "           
          </div>
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; MyPlaylist 2012</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    ";
        // line 98
        $this->displayBlock('script', $context, $blocks);
        // line 102
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
    ";
    }

    // line 81
    public function block_body($context, array $blocks = array())
    {
        // line 82
        echo "                    ";
    }

    // line 98
    public function block_script($context, array $blocks = array())
    {
        // line 99
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myplaylistapp/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myplaylistapp/js/bootstrap.js"), "html", null, true);
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
        return array (  203 => 100,  198 => 99,  195 => 98,  191 => 82,  188 => 81,  182 => 22,  178 => 21,  173 => 20,  170 => 19,  164 => 13,  157 => 102,  155 => 98,  137 => 82,  135 => 81,  126 => 75,  122 => 74,  118 => 73,  100 => 58,  96 => 57,  92 => 56,  86 => 53,  82 => 52,  78 => 51,  72 => 48,  46 => 24,  44 => 19,  35 => 13,  21 => 1,);
    }
}
