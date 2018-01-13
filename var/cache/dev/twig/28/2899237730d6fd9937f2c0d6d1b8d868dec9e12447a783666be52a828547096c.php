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
        $__internal_4cbb22735dd9e739119528101f1faec9b26906bbfb7e5fc427be1c96d988fdab = $this->env->getExtension("native_profiler");
        $__internal_4cbb22735dd9e739119528101f1faec9b26906bbfb7e5fc427be1c96d988fdab->enter($__internal_4cbb22735dd9e739119528101f1faec9b26906bbfb7e5fc427be1c96d988fdab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_4cbb22735dd9e739119528101f1faec9b26906bbfb7e5fc427be1c96d988fdab->leave($__internal_4cbb22735dd9e739119528101f1faec9b26906bbfb7e5fc427be1c96d988fdab_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_47b873bd7af1869b1ff8da669bcd842fc1cf916139ea947350d9644397cb2aa3 = $this->env->getExtension("native_profiler");
        $__internal_47b873bd7af1869b1ff8da669bcd842fc1cf916139ea947350d9644397cb2aa3->enter($__internal_47b873bd7af1869b1ff8da669bcd842fc1cf916139ea947350d9644397cb2aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_47b873bd7af1869b1ff8da669bcd842fc1cf916139ea947350d9644397cb2aa3->leave($__internal_47b873bd7af1869b1ff8da669bcd842fc1cf916139ea947350d9644397cb2aa3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c0b867c704cea026ffa79bad0b7e9623a3a2362900ce47a2c70db40b2cca43e6 = $this->env->getExtension("native_profiler");
        $__internal_c0b867c704cea026ffa79bad0b7e9623a3a2362900ce47a2c70db40b2cca43e6->enter($__internal_c0b867c704cea026ffa79bad0b7e9623a3a2362900ce47a2c70db40b2cca43e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c0b867c704cea026ffa79bad0b7e9623a3a2362900ce47a2c70db40b2cca43e6->leave($__internal_c0b867c704cea026ffa79bad0b7e9623a3a2362900ce47a2c70db40b2cca43e6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7ca64154440464711dc6d7fa1c2d4498305b3567fa164948307254a6392c536 = $this->env->getExtension("native_profiler");
        $__internal_d7ca64154440464711dc6d7fa1c2d4498305b3567fa164948307254a6392c536->enter($__internal_d7ca64154440464711dc6d7fa1c2d4498305b3567fa164948307254a6392c536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d7ca64154440464711dc6d7fa1c2d4498305b3567fa164948307254a6392c536->leave($__internal_d7ca64154440464711dc6d7fa1c2d4498305b3567fa164948307254a6392c536_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_08c36ef2790aa06ff8064789c598fd8f63f6f29f66c646d72a756067e785c8ab = $this->env->getExtension("native_profiler");
        $__internal_08c36ef2790aa06ff8064789c598fd8f63f6f29f66c646d72a756067e785c8ab->enter($__internal_08c36ef2790aa06ff8064789c598fd8f63f6f29f66c646d72a756067e785c8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_08c36ef2790aa06ff8064789c598fd8f63f6f29f66c646d72a756067e785c8ab->leave($__internal_08c36ef2790aa06ff8064789c598fd8f63f6f29f66c646d72a756067e785c8ab_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
