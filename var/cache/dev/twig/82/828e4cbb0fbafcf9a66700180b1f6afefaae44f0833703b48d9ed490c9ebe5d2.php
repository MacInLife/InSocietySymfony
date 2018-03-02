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
        $__internal_08d89cca7b70afee6081f046f12414957f5cf5e86e0b1fabef6aca18a2185c6f = $this->env->getExtension("native_profiler");
        $__internal_08d89cca7b70afee6081f046f12414957f5cf5e86e0b1fabef6aca18a2185c6f->enter($__internal_08d89cca7b70afee6081f046f12414957f5cf5e86e0b1fabef6aca18a2185c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08d89cca7b70afee6081f046f12414957f5cf5e86e0b1fabef6aca18a2185c6f->leave($__internal_08d89cca7b70afee6081f046f12414957f5cf5e86e0b1fabef6aca18a2185c6f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_70924734481d7360b29271525371cec8c9bb644a9df6d0186d4fc82d716f6dfb = $this->env->getExtension("native_profiler");
        $__internal_70924734481d7360b29271525371cec8c9bb644a9df6d0186d4fc82d716f6dfb->enter($__internal_70924734481d7360b29271525371cec8c9bb644a9df6d0186d4fc82d716f6dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_70924734481d7360b29271525371cec8c9bb644a9df6d0186d4fc82d716f6dfb->leave($__internal_70924734481d7360b29271525371cec8c9bb644a9df6d0186d4fc82d716f6dfb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b78d7159181e359d8df8f4d240561f44db2c8b8c0e437904a6a78c9d22ed69a1 = $this->env->getExtension("native_profiler");
        $__internal_b78d7159181e359d8df8f4d240561f44db2c8b8c0e437904a6a78c9d22ed69a1->enter($__internal_b78d7159181e359d8df8f4d240561f44db2c8b8c0e437904a6a78c9d22ed69a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b78d7159181e359d8df8f4d240561f44db2c8b8c0e437904a6a78c9d22ed69a1->leave($__internal_b78d7159181e359d8df8f4d240561f44db2c8b8c0e437904a6a78c9d22ed69a1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a1f8a36578451328a1980634fa3b73f4be7b50d99b5a14ad4b8061837afb5a03 = $this->env->getExtension("native_profiler");
        $__internal_a1f8a36578451328a1980634fa3b73f4be7b50d99b5a14ad4b8061837afb5a03->enter($__internal_a1f8a36578451328a1980634fa3b73f4be7b50d99b5a14ad4b8061837afb5a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a1f8a36578451328a1980634fa3b73f4be7b50d99b5a14ad4b8061837afb5a03->leave($__internal_a1f8a36578451328a1980634fa3b73f4be7b50d99b5a14ad4b8061837afb5a03_prof);

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
