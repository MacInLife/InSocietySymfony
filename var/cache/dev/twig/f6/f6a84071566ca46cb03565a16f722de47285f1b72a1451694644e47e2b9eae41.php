<?php

/* default/salles.html.twig */
class __TwigTemplate_59122d7d812009189b9ea2aef571b12e7d8095c3df39247b6ed611372876222f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("menu.html.twig", "default/salles.html.twig", 1);
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
        $__internal_001e2aadcfe20c303c66f4ad8c976620c42369e2016fcb363b9149acce77debb = $this->env->getExtension("native_profiler");
        $__internal_001e2aadcfe20c303c66f4ad8c976620c42369e2016fcb363b9149acce77debb->enter($__internal_001e2aadcfe20c303c66f4ad8c976620c42369e2016fcb363b9149acce77debb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/salles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_001e2aadcfe20c303c66f4ad8c976620c42369e2016fcb363b9149acce77debb->leave($__internal_001e2aadcfe20c303c66f4ad8c976620c42369e2016fcb363b9149acce77debb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6b3ea3c953e86e8294be736898a57bd4ccec5c94153e701fa2b3066dbd51f2a = $this->env->getExtension("native_profiler");
        $__internal_e6b3ea3c953e86e8294be736898a57bd4ccec5c94153e701fa2b3066dbd51f2a->enter($__internal_e6b3ea3c953e86e8294be736898a57bd4ccec5c94153e701fa2b3066dbd51f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mon espace !";
        
        $__internal_e6b3ea3c953e86e8294be736898a57bd4ccec5c94153e701fa2b3066dbd51f2a->leave($__internal_e6b3ea3c953e86e8294be736898a57bd4ccec5c94153e701fa2b3066dbd51f2a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_20ae299876decb1c95827ffaf550da1fa379c8d34a55d5f31a47c2752bb41072 = $this->env->getExtension("native_profiler");
        $__internal_20ae299876decb1c95827ffaf550da1fa379c8d34a55d5f31a47c2752bb41072->enter($__internal_20ae299876decb1c95827ffaf550da1fa379c8d34a55d5f31a47c2752bb41072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "  

<style type=\"text/css\">

</style>

";
        
        $__internal_20ae299876decb1c95827ffaf550da1fa379c8d34a55d5f31a47c2752bb41072->leave($__internal_20ae299876decb1c95827ffaf550da1fa379c8d34a55d5f31a47c2752bb41072_prof);

    }

    public function getTemplateName()
    {
        return "default/salles.html.twig";
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
