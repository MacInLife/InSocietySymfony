<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ffa5b52e8c7d94e9283e926a960376217987d38e69f983bafe076bd4f674053e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c528bd4799b2340a35dc5cdd24528ee113098f9edebae405ae66abbb9cd8dc17 = $this->env->getExtension("native_profiler");
        $__internal_c528bd4799b2340a35dc5cdd24528ee113098f9edebae405ae66abbb9cd8dc17->enter($__internal_c528bd4799b2340a35dc5cdd24528ee113098f9edebae405ae66abbb9cd8dc17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c528bd4799b2340a35dc5cdd24528ee113098f9edebae405ae66abbb9cd8dc17->leave($__internal_c528bd4799b2340a35dc5cdd24528ee113098f9edebae405ae66abbb9cd8dc17_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a53cfdd08d65557ad6787eea13e43843cab5a6627e7006fd052aaf594b099e31 = $this->env->getExtension("native_profiler");
        $__internal_a53cfdd08d65557ad6787eea13e43843cab5a6627e7006fd052aaf594b099e31->enter($__internal_a53cfdd08d65557ad6787eea13e43843cab5a6627e7006fd052aaf594b099e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a53cfdd08d65557ad6787eea13e43843cab5a6627e7006fd052aaf594b099e31->leave($__internal_a53cfdd08d65557ad6787eea13e43843cab5a6627e7006fd052aaf594b099e31_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_780e0ef205d01b0b807e6b4e3466c7fb6586ec85c39f8b67954cbc0912de9bb2 = $this->env->getExtension("native_profiler");
        $__internal_780e0ef205d01b0b807e6b4e3466c7fb6586ec85c39f8b67954cbc0912de9bb2->enter($__internal_780e0ef205d01b0b807e6b4e3466c7fb6586ec85c39f8b67954cbc0912de9bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_780e0ef205d01b0b807e6b4e3466c7fb6586ec85c39f8b67954cbc0912de9bb2->leave($__internal_780e0ef205d01b0b807e6b4e3466c7fb6586ec85c39f8b67954cbc0912de9bb2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_423be0c9af38867ad24d2633b03770f0b14f1d54ce271ecba78e12b926c7b244 = $this->env->getExtension("native_profiler");
        $__internal_423be0c9af38867ad24d2633b03770f0b14f1d54ce271ecba78e12b926c7b244->enter($__internal_423be0c9af38867ad24d2633b03770f0b14f1d54ce271ecba78e12b926c7b244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_423be0c9af38867ad24d2633b03770f0b14f1d54ce271ecba78e12b926c7b244->leave($__internal_423be0c9af38867ad24d2633b03770f0b14f1d54ce271ecba78e12b926c7b244_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
