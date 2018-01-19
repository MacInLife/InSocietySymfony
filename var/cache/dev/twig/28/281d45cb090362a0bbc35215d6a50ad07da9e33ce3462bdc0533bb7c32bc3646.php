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
        $__internal_a1b8c8449ab6ea31cafd9fbdc4625f1f4a0fb546e68917bb9ae7d7528e6063d2 = $this->env->getExtension("native_profiler");
        $__internal_a1b8c8449ab6ea31cafd9fbdc4625f1f4a0fb546e68917bb9ae7d7528e6063d2->enter($__internal_a1b8c8449ab6ea31cafd9fbdc4625f1f4a0fb546e68917bb9ae7d7528e6063d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/events.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1b8c8449ab6ea31cafd9fbdc4625f1f4a0fb546e68917bb9ae7d7528e6063d2->leave($__internal_a1b8c8449ab6ea31cafd9fbdc4625f1f4a0fb546e68917bb9ae7d7528e6063d2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_03e62844b769e665355cafa6920dd34e3b13bacecf2176a5e894b6ffdfa3e9ad = $this->env->getExtension("native_profiler");
        $__internal_03e62844b769e665355cafa6920dd34e3b13bacecf2176a5e894b6ffdfa3e9ad->enter($__internal_03e62844b769e665355cafa6920dd34e3b13bacecf2176a5e894b6ffdfa3e9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Evènement !";
        
        $__internal_03e62844b769e665355cafa6920dd34e3b13bacecf2176a5e894b6ffdfa3e9ad->leave($__internal_03e62844b769e665355cafa6920dd34e3b13bacecf2176a5e894b6ffdfa3e9ad_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a90a4c49055c91fd6aa143905972f1bef93b1a742e2de66172250ac3e5c2df9 = $this->env->getExtension("native_profiler");
        $__internal_7a90a4c49055c91fd6aa143905972f1bef93b1a742e2de66172250ac3e5c2df9->enter($__internal_7a90a4c49055c91fd6aa143905972f1bef93b1a742e2de66172250ac3e5c2df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

 \t<script type=\"text/javascript\" src=\"";
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
        
        $__internal_7a90a4c49055c91fd6aa143905972f1bef93b1a742e2de66172250ac3e5c2df9->leave($__internal_7a90a4c49055c91fd6aa143905972f1bef93b1a742e2de66172250ac3e5c2df9_prof);

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
/*  	<script type="text/javascript" src="{{ asset('bundles/fullcalendar/js/fullcalendar/lib/jquery.min.js') }}"></script>*/
/*   	<script type="text/javascript" src="{{ asset('bundles/fullcalendar/js/fullcalendar/lib/moment.min.js') }}"></script>*/
/*   	<script type="text/javascript" src="{{ asset('bundles/fullcalendar/js/fullcalendar/fullcalendar.min.js') }}"></script>*/
/*  	<script type="text/javascript" src="{{ asset('bundles/fullcalendar/js/fullcalendar/fullcalendar.default-settings.js') }}"></script>*/
/*  {% endblock %}*/
/* */
/*   */
/* */
/* */
