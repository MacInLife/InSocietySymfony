<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_cc777fea32cb5db0884b9a7e4cd5a0fbbfa0b21e77c80cbbf08b5fc557c478c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13baff8327c7e7ee7ada8385ac3b49f8e6e02b37d2e0a8d5f7e0da6a6bdfe19c = $this->env->getExtension("native_profiler");
        $__internal_13baff8327c7e7ee7ada8385ac3b49f8e6e02b37d2e0a8d5f7e0da6a6bdfe19c->enter($__internal_13baff8327c7e7ee7ada8385ac3b49f8e6e02b37d2e0a8d5f7e0da6a6bdfe19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_13baff8327c7e7ee7ada8385ac3b49f8e6e02b37d2e0a8d5f7e0da6a6bdfe19c->leave($__internal_13baff8327c7e7ee7ada8385ac3b49f8e6e02b37d2e0a8d5f7e0da6a6bdfe19c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
