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
        $__internal_c03cc5c84334c153a5863277dd45fed44c0edb439a36ecf3aac4915f61a6275c = $this->env->getExtension("native_profiler");
        $__internal_c03cc5c84334c153a5863277dd45fed44c0edb439a36ecf3aac4915f61a6275c->enter($__internal_c03cc5c84334c153a5863277dd45fed44c0edb439a36ecf3aac4915f61a6275c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/events.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c03cc5c84334c153a5863277dd45fed44c0edb439a36ecf3aac4915f61a6275c->leave($__internal_c03cc5c84334c153a5863277dd45fed44c0edb439a36ecf3aac4915f61a6275c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1dd867bc70b06ab7bd090920c7ad35921f4736e03d107519bbf51de051087ad8 = $this->env->getExtension("native_profiler");
        $__internal_1dd867bc70b06ab7bd090920c7ad35921f4736e03d107519bbf51de051087ad8->enter($__internal_1dd867bc70b06ab7bd090920c7ad35921f4736e03d107519bbf51de051087ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Evènement !";
        
        $__internal_1dd867bc70b06ab7bd090920c7ad35921f4736e03d107519bbf51de051087ad8->leave($__internal_1dd867bc70b06ab7bd090920c7ad35921f4736e03d107519bbf51de051087ad8_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e42fdec79a12ac8bbd80fdf6399f1a03a3bb7ad36a357cdd87a51b6722b25f31 = $this->env->getExtension("native_profiler");
        $__internal_e42fdec79a12ac8bbd80fdf6399f1a03a3bb7ad36a357cdd87a51b6722b25f31->enter($__internal_e42fdec79a12ac8bbd80fdf6399f1a03a3bb7ad36a357cdd87a51b6722b25f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "  

<style type=\"text/css\">

</style>

 ";
        // line 10
        $this->loadTemplate("@FullCalendar/Calendar/calendar.html.twig", "default/events.html.twig", 10)->display($context);
        // line 11
        echo " <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fullcalendar/css/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\" />

 \t<<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/lib/jquery.min.js"), "html", null, true);
        echo "\"></script>
  \t<script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/lib/moment.min.js"), "html", null, true);
        echo "\"></script>
  \t<script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
 \t<script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/fullcalendar.default-settings.js"), "html", null, true);
        echo "\"></script>
 ";
        
        $__internal_e42fdec79a12ac8bbd80fdf6399f1a03a3bb7ad36a357cdd87a51b6722b25f31->leave($__internal_e42fdec79a12ac8bbd80fdf6399f1a03a3bb7ad36a357cdd87a51b6722b25f31_prof);

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
        return array (  80 => 16,  76 => 15,  72 => 14,  68 => 13,  62 => 11,  60 => 10,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'menu.html.twig' %}*/
/* */
/* {% block title %}Evènement !{% endblock %}*/
/* {% block body %}  */
/* */
/* <style type="text/css">*/
/* */
/* </style>*/
/* */
/*  {% include '@FullCalendar/Calendar/calendar.html.twig' %}*/
/*  <link rel="stylesheet" href="{{ asset('bundles/fullcalendar/css/fullcalendar/fullcalendar.min.css') }}" />*/
/* */
/*  	<<script type="text/javascript" src="{{ asset('bundles/fullcalendar/js/fullcalendar/lib/jquery.min.js') }}"></script>*/
/*   	<script type="text/javascript" src="{{ asset('bundles/fullcalendar/js/fullcalendar/lib/moment.min.js') }}"></script>*/
/*   	<script type="text/javascript" src="{{ asset('bundles/fullcalendar/js/fullcalendar/fullcalendar.min.js') }}"></script>*/
/*  	<script type="text/javascript" src="{{ asset('bundles/fullcalendar/js/fullcalendar/fullcalendar.default-settings.js') }}"></script>*/
/*  {% endblock %}*/
/* */
/*   */
/* */
/* */
