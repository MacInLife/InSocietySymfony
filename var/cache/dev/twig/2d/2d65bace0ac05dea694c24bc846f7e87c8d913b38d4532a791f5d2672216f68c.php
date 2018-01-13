<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4f4d7a460e2d720b63c369d34ef7a7b4f2073f6857a61124837256d31aed72d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_371c0d1d3a37dbecd1d0f6b6c2d2587df10863ff55e0795ca3e5e6747963c89b = $this->env->getExtension("native_profiler");
        $__internal_371c0d1d3a37dbecd1d0f6b6c2d2587df10863ff55e0795ca3e5e6747963c89b->enter($__internal_371c0d1d3a37dbecd1d0f6b6c2d2587df10863ff55e0795ca3e5e6747963c89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_371c0d1d3a37dbecd1d0f6b6c2d2587df10863ff55e0795ca3e5e6747963c89b->leave($__internal_371c0d1d3a37dbecd1d0f6b6c2d2587df10863ff55e0795ca3e5e6747963c89b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ba45e1204e67afbbb0738dd6c31e227ac7b761975a686a4d3672b969518c9818 = $this->env->getExtension("native_profiler");
        $__internal_ba45e1204e67afbbb0738dd6c31e227ac7b761975a686a4d3672b969518c9818->enter($__internal_ba45e1204e67afbbb0738dd6c31e227ac7b761975a686a4d3672b969518c9818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ba45e1204e67afbbb0738dd6c31e227ac7b761975a686a4d3672b969518c9818->leave($__internal_ba45e1204e67afbbb0738dd6c31e227ac7b761975a686a4d3672b969518c9818_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf3f8b1e3a64af94e80566bb1df987e8b65b1bfe797f5a0498f016291a92bb9b = $this->env->getExtension("native_profiler");
        $__internal_bf3f8b1e3a64af94e80566bb1df987e8b65b1bfe797f5a0498f016291a92bb9b->enter($__internal_bf3f8b1e3a64af94e80566bb1df987e8b65b1bfe797f5a0498f016291a92bb9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bf3f8b1e3a64af94e80566bb1df987e8b65b1bfe797f5a0498f016291a92bb9b->leave($__internal_bf3f8b1e3a64af94e80566bb1df987e8b65b1bfe797f5a0498f016291a92bb9b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2037cf447dbaf633a1287876253d6179c09e35c481bc561be2e8845b2446e2f4 = $this->env->getExtension("native_profiler");
        $__internal_2037cf447dbaf633a1287876253d6179c09e35c481bc561be2e8845b2446e2f4->enter($__internal_2037cf447dbaf633a1287876253d6179c09e35c481bc561be2e8845b2446e2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2037cf447dbaf633a1287876253d6179c09e35c481bc561be2e8845b2446e2f4->leave($__internal_2037cf447dbaf633a1287876253d6179c09e35c481bc561be2e8845b2446e2f4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
