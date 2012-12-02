<?php

/* MyPlaylistAppBundle:Song:viewAddSong.html.twig */
class __TwigTemplate_33d91bf44a0369e06e0f2f5b5c0f37dd extends Twig_Template
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
        echo " - Ajout";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        echo "    
<h3>Ajout d'une nouvelle musique o/</h3>
    <form id=\"form\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_viewAddSong"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
    \t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
    \t<input type=\"submit\" class=\"btn btn-primary\" />
    </form>
";
    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        // line 13
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\">
\$(document).ready(function() {
    // lorsque je soumets le formulaire
    \$('#form').on('submit', function() {
 
        // je récupère les valeurs
        var title = \$('#form_title').val();
        var length = \$('#form_length').val();
        var filename = \$('#form_filename').val();
 
        // je vérifie une première fois pour ne pas lancer la requête HTTP
        // si je sais que mon PHP renverra une erreur
        if(title == '' | length == '' | filename == '') {
            alertify.error('Les champs ne sont pas remplis');
        } else {
            // appel Ajax
            \$.ajax({
                url: \$(this).attr('action'), // le nom du fichier indiqué dans le formulaire
                type: \$(this).attr('method'), // la méthode indiquée dans le formulaire (get ou post)
                data: \$(this).serialize(), // je sérialise les données (voir plus loin), ici les \$_POST
                success: function(html) { // je récupère la réponse du fichier PHP
                    alertify.success('La chanson a été ajoutée'); // j'affiche cette réponse
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
        return "MyPlaylistAppBundle:Song:viewAddSong.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 13,  55 => 12,  47 => 8,  41 => 7,  35 => 5,  28 => 3,);
    }
}
