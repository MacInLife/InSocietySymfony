<?php

/* base.html.twig */
class __TwigTemplate_eb8b97e2f4f434041532b8a2722b5fe3301203b436b98c7f4d5f46987f93aea4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da9ac78068804df948aa55edc68e6dfd263073a28e5722a797157d86844ea909 = $this->env->getExtension("native_profiler");
        $__internal_da9ac78068804df948aa55edc68e6dfd263073a28e5722a797157d86844ea909->enter($__internal_da9ac78068804df948aa55edc68e6dfd263073a28e5722a797157d86844ea909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_da9ac78068804df948aa55edc68e6dfd263073a28e5722a797157d86844ea909->leave($__internal_da9ac78068804df948aa55edc68e6dfd263073a28e5722a797157d86844ea909_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bfcaa20b4fbca3a9416576a5d29ca6ad8f529a8302aa0f2f569d7dfcfefc7e0f = $this->env->getExtension("native_profiler");
        $__internal_bfcaa20b4fbca3a9416576a5d29ca6ad8f529a8302aa0f2f569d7dfcfefc7e0f->enter($__internal_bfcaa20b4fbca3a9416576a5d29ca6ad8f529a8302aa0f2f569d7dfcfefc7e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bfcaa20b4fbca3a9416576a5d29ca6ad8f529a8302aa0f2f569d7dfcfefc7e0f->leave($__internal_bfcaa20b4fbca3a9416576a5d29ca6ad8f529a8302aa0f2f569d7dfcfefc7e0f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9fb9b218109dbf366d9b069bf2df4e61626fc6e154700409628e7e3899012ba1 = $this->env->getExtension("native_profiler");
        $__internal_9fb9b218109dbf366d9b069bf2df4e61626fc6e154700409628e7e3899012ba1->enter($__internal_9fb9b218109dbf366d9b069bf2df4e61626fc6e154700409628e7e3899012ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "  ";
        
        $__internal_9fb9b218109dbf366d9b069bf2df4e61626fc6e154700409628e7e3899012ba1->leave($__internal_9fb9b218109dbf366d9b069bf2df4e61626fc6e154700409628e7e3899012ba1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_079cb0a06a4002aeca52b8845f8a8f1d12d125f660e714800d0428246b859994 = $this->env->getExtension("native_profiler");
        $__internal_079cb0a06a4002aeca52b8845f8a8f1d12d125f660e714800d0428246b859994->enter($__internal_079cb0a06a4002aeca52b8845f8a8f1d12d125f660e714800d0428246b859994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_079cb0a06a4002aeca52b8845f8a8f1d12d125f660e714800d0428246b859994->leave($__internal_079cb0a06a4002aeca52b8845f8a8f1d12d125f660e714800d0428246b859994_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d11ad7b94944851c85e627b9d068d04215d34a8ae33dd4c78f0c830b1ae4e4cd = $this->env->getExtension("native_profiler");
        $__internal_d11ad7b94944851c85e627b9d068d04215d34a8ae33dd4c78f0c830b1ae4e4cd->enter($__internal_d11ad7b94944851c85e627b9d068d04215d34a8ae33dd4c78f0c830b1ae4e4cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d11ad7b94944851c85e627b9d068d04215d34a8ae33dd4c78f0c830b1ae4e4cd->leave($__internal_d11ad7b94944851c85e627b9d068d04215d34a8ae33dd4c78f0c830b1ae4e4cd_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 11,  83 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}  {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
