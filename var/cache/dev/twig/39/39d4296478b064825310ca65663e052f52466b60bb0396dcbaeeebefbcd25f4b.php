<?php

/* default/docs.html.twig */
class __TwigTemplate_f4526546a27c9c8281d367f89c5b46d11d6d9b4401375b766e1779be7051045f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("menu.html.twig", "default/docs.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a270f181fa26ed848ec384daa65aeb3dcb3b8df1f0b3cd4a3ab7b562d0719ec = $this->env->getExtension("native_profiler");
        $__internal_4a270f181fa26ed848ec384daa65aeb3dcb3b8df1f0b3cd4a3ab7b562d0719ec->enter($__internal_4a270f181fa26ed848ec384daa65aeb3dcb3b8df1f0b3cd4a3ab7b562d0719ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/docs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a270f181fa26ed848ec384daa65aeb3dcb3b8df1f0b3cd4a3ab7b562d0719ec->leave($__internal_4a270f181fa26ed848ec384daa65aeb3dcb3b8df1f0b3cd4a3ab7b562d0719ec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_81f2490b4b97f58a059d6715e0394b17f611943b9571bbc4e0cb2d6537fac802 = $this->env->getExtension("native_profiler");
        $__internal_81f2490b4b97f58a059d6715e0394b17f611943b9571bbc4e0cb2d6537fac802->enter($__internal_81f2490b4b97f58a059d6715e0394b17f611943b9571bbc4e0cb2d6537fac802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mon espace !";
        
        $__internal_81f2490b4b97f58a059d6715e0394b17f611943b9571bbc4e0cb2d6537fac802->leave($__internal_81f2490b4b97f58a059d6715e0394b17f611943b9571bbc4e0cb2d6537fac802_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f70a0e09321ede9b8011ebef79e5e8e01db693891394898c1289d202a0bb3be6 = $this->env->getExtension("native_profiler");
        $__internal_f70a0e09321ede9b8011ebef79e5e8e01db693891394898c1289d202a0bb3be6->enter($__internal_f70a0e09321ede9b8011ebef79e5e8e01db693891394898c1289d202a0bb3be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "  

<style type=\"text/css\">

</style>

";
        
        $__internal_f70a0e09321ede9b8011ebef79e5e8e01db693891394898c1289d202a0bb3be6->leave($__internal_f70a0e09321ede9b8011ebef79e5e8e01db693891394898c1289d202a0bb3be6_prof);

    }

    public function getTemplateName()
    {
        return "default/docs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'menu.html.twig' %}*/
/* */
/* {% block title %}Mon espace !{% endblock %}*/
/* {% block body %}  */
/* */
/* <style type="text/css">*/
/* */
/* </style>*/
/* */
/* {% endblock %}*/
