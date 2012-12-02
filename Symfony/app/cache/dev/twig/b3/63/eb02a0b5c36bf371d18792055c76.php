<?php

/* MyPlaylistAppBundle:Playlist:viewEditPlaylist.html.twig */
class __TwigTemplate_b363eb02a0b5c36bf371d18792055c76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyPlaylistAppBundle:MyPlaylist:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyPlaylistAppBundle:MyPlaylist:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Modification de votre playlist";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        if (twig_test_empty($this->getContext($context, "playlist"))) {
            // line 7
            echo "\t\t<p>Veuillez creer des playlist. <a href=\"http://localhost/Symfony/web/app_dev.php/playlist/add\">\">Creation de Playlist</a></p>
\t";
        } else {
            // line 9
            echo "    Choix de la playlist à modifier :
    <ul>
  \t\t";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "playlist"));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 12
                echo "    \t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_editPlaylist", array("id" => $this->getAttribute($this->getContext($context, "value"), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "value"), "name"), "html", null, true);
                echo "</a></li>
  \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 14
            echo "  \t</ul>
  \t";
        }
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        // line 18
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myplaylistapp/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myplaylistapp/js/bootstrap.js"), "html", null, true);
        echo "\"></script> 
<script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myplaylistapp/js/alertify.js"), "html", null, true);
        echo "\"></script> 
<script type=\"text/javascript\">
\$(document).ready(function() {
    // lorsque je soumets le formulaire
    \$('#form').on('submit', function() {
 
        // je récupère les valeurs
        var name = \$('#form_name').val();
 
        // je vérifie une première fois pour ne pas lancer la requête HTTP
        // si je sais que mon PHP renverra une erreur
        if(name == '') {
            alertify.error('Les champs ne sont pas remplis');
        } else {
            // appel Ajax
            \$.ajax({
                url: \$(this).attr('action'), // le nom du fichier indiqué dans le formulaire
                type: \$(this).attr('method'), // la méthode indiquée dans le formulaire (get ou post)
                data: \$(this).serialize(), // je sérialise les données (voir plus loin), ici les \$_POST
                success: function(html) { // je récupère la réponse du fichier PHP
                    alertify.success('La chanson a été modifiée'); // j'affiche cette réponse
                }
            });
        }
        return false; // j'empêche le navigateur de soumettre lui-même le formulaire
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "MyPlaylistAppBundle:Playlist:viewEditPlaylist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 20,  78 => 19,  73 => 18,  70 => 17,  64 => 14,  53 => 12,  49 => 11,  45 => 9,  41 => 7,  38 => 6,  35 => 5,  28 => 3,);
    }
}
