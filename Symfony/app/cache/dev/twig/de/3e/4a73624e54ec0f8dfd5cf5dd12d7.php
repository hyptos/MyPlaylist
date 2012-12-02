<?php

/* MyPlaylistAppBundle:MyPlaylist:about.html.twig */
class __TwigTemplate_de3e4a73624e54ec0f8dfd5cf5dd12d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyPlaylistAppBundle:MyPlaylist:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
        echo " - Index";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "        <p>
            Ce site a été realiser dans un but pédagogique et dans le cadre d'un projet en Licence de Math/Info.
        </p>
        <p>
            Ci-joint le MCD que nous avons utiliser : <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myplaylistapp/img/mcd.png"), "html", null, true);
        echo "\" alt=\"MCD\"/>
        </p>
        <p>
            Nous remercions machin, bidule et truc.
        </p>
";
    }

    public function getTemplateName()
    {
        return "MyPlaylistAppBundle:MyPlaylist:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  37 => 6,  34 => 5,  27 => 3,);
    }
}
