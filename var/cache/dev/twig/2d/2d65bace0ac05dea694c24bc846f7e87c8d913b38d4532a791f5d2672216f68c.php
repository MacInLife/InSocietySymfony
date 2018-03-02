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
        $__internal_1333a5a07b54b11028a07f1dfb96deca80fd9381eb1ecf3952a42d87e08c02aa = $this->env->getExtension("native_profiler");
        $__internal_1333a5a07b54b11028a07f1dfb96deca80fd9381eb1ecf3952a42d87e08c02aa->enter($__internal_1333a5a07b54b11028a07f1dfb96deca80fd9381eb1ecf3952a42d87e08c02aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1333a5a07b54b11028a07f1dfb96deca80fd9381eb1ecf3952a42d87e08c02aa->leave($__internal_1333a5a07b54b11028a07f1dfb96deca80fd9381eb1ecf3952a42d87e08c02aa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ad916aceb63e611d34e484a33f2096bf7e4cff754aebb67937f579abf12a29fc = $this->env->getExtension("native_profiler");
        $__internal_ad916aceb63e611d34e484a33f2096bf7e4cff754aebb67937f579abf12a29fc->enter($__internal_ad916aceb63e611d34e484a33f2096bf7e4cff754aebb67937f579abf12a29fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ad916aceb63e611d34e484a33f2096bf7e4cff754aebb67937f579abf12a29fc->leave($__internal_ad916aceb63e611d34e484a33f2096bf7e4cff754aebb67937f579abf12a29fc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8b2b3d018d89046b2c39cdba44a41f7c9190ae6f44f45706d7d4afd7e2b387c = $this->env->getExtension("native_profiler");
        $__internal_b8b2b3d018d89046b2c39cdba44a41f7c9190ae6f44f45706d7d4afd7e2b387c->enter($__internal_b8b2b3d018d89046b2c39cdba44a41f7c9190ae6f44f45706d7d4afd7e2b387c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b8b2b3d018d89046b2c39cdba44a41f7c9190ae6f44f45706d7d4afd7e2b387c->leave($__internal_b8b2b3d018d89046b2c39cdba44a41f7c9190ae6f44f45706d7d4afd7e2b387c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e61d8646d84d249cc7f1aa140ada2de3c37e12cb341716260bd2965a51293827 = $this->env->getExtension("native_profiler");
        $__internal_e61d8646d84d249cc7f1aa140ada2de3c37e12cb341716260bd2965a51293827->enter($__internal_e61d8646d84d249cc7f1aa140ada2de3c37e12cb341716260bd2965a51293827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e61d8646d84d249cc7f1aa140ada2de3c37e12cb341716260bd2965a51293827->leave($__internal_e61d8646d84d249cc7f1aa140ada2de3c37e12cb341716260bd2965a51293827_prof);

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
