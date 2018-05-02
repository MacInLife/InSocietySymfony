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
        $__internal_dea2a770748a6475c7d626858b9201e4cbbc388e11395cf55c1752c61e79dc48 = $this->env->getExtension("native_profiler");
        $__internal_dea2a770748a6475c7d626858b9201e4cbbc388e11395cf55c1752c61e79dc48->enter($__internal_dea2a770748a6475c7d626858b9201e4cbbc388e11395cf55c1752c61e79dc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dea2a770748a6475c7d626858b9201e4cbbc388e11395cf55c1752c61e79dc48->leave($__internal_dea2a770748a6475c7d626858b9201e4cbbc388e11395cf55c1752c61e79dc48_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_05e140ada6244a5ceae11907e3abcbf36d3d439175e983c2cba5edea8b084c39 = $this->env->getExtension("native_profiler");
        $__internal_05e140ada6244a5ceae11907e3abcbf36d3d439175e983c2cba5edea8b084c39->enter($__internal_05e140ada6244a5ceae11907e3abcbf36d3d439175e983c2cba5edea8b084c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_05e140ada6244a5ceae11907e3abcbf36d3d439175e983c2cba5edea8b084c39->leave($__internal_05e140ada6244a5ceae11907e3abcbf36d3d439175e983c2cba5edea8b084c39_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7522ce455d1310d073a8a432ab87d06d626d17bed2bce3476a4703c3f6fd7048 = $this->env->getExtension("native_profiler");
        $__internal_7522ce455d1310d073a8a432ab87d06d626d17bed2bce3476a4703c3f6fd7048->enter($__internal_7522ce455d1310d073a8a432ab87d06d626d17bed2bce3476a4703c3f6fd7048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7522ce455d1310d073a8a432ab87d06d626d17bed2bce3476a4703c3f6fd7048->leave($__internal_7522ce455d1310d073a8a432ab87d06d626d17bed2bce3476a4703c3f6fd7048_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_218694eae723379d8fd54d36a81e22df2f29d22280f9cbf48311189ae0686b47 = $this->env->getExtension("native_profiler");
        $__internal_218694eae723379d8fd54d36a81e22df2f29d22280f9cbf48311189ae0686b47->enter($__internal_218694eae723379d8fd54d36a81e22df2f29d22280f9cbf48311189ae0686b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_218694eae723379d8fd54d36a81e22df2f29d22280f9cbf48311189ae0686b47->leave($__internal_218694eae723379d8fd54d36a81e22df2f29d22280f9cbf48311189ae0686b47_prof);

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
