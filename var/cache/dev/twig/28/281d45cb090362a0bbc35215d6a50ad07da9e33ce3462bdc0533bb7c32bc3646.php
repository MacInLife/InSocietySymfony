<?php

/* default/events.html.twig */
class __TwigTemplate_a41bd5f9eb4eb70811f0a2bdd5a9787ee8e8bdfa27338871d2db7d95b5188b6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("menu.html.twig", "default/events.html.twig", 1);
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
        $__internal_fa182b1f2a076027c514f57be8d0294781e4700ac874d857048349ed92111cf5 = $this->env->getExtension("native_profiler");
        $__internal_fa182b1f2a076027c514f57be8d0294781e4700ac874d857048349ed92111cf5->enter($__internal_fa182b1f2a076027c514f57be8d0294781e4700ac874d857048349ed92111cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/events.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa182b1f2a076027c514f57be8d0294781e4700ac874d857048349ed92111cf5->leave($__internal_fa182b1f2a076027c514f57be8d0294781e4700ac874d857048349ed92111cf5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_25704886e6c0e6b5922104cc0ea63b79d1b8f24505b98a5d6ed3898e079edd88 = $this->env->getExtension("native_profiler");
        $__internal_25704886e6c0e6b5922104cc0ea63b79d1b8f24505b98a5d6ed3898e079edd88->enter($__internal_25704886e6c0e6b5922104cc0ea63b79d1b8f24505b98a5d6ed3898e079edd88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mon espace !";
        
        $__internal_25704886e6c0e6b5922104cc0ea63b79d1b8f24505b98a5d6ed3898e079edd88->leave($__internal_25704886e6c0e6b5922104cc0ea63b79d1b8f24505b98a5d6ed3898e079edd88_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_72875daae6e54b000880ae070482a33c173f65e8a09920bded110ab84271928e = $this->env->getExtension("native_profiler");
        $__internal_72875daae6e54b000880ae070482a33c173f65e8a09920bded110ab84271928e->enter($__internal_72875daae6e54b000880ae070482a33c173f65e8a09920bded110ab84271928e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "  

<style type=\"text/css\">

</style>

";
        
        $__internal_72875daae6e54b000880ae070482a33c173f65e8a09920bded110ab84271928e->leave($__internal_72875daae6e54b000880ae070482a33c173f65e8a09920bded110ab84271928e_prof);

    }

    public function getTemplateName()
    {
        return "default/events.html.twig";
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
