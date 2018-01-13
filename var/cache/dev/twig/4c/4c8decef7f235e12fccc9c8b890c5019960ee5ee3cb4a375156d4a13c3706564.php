<?php

/* menu.html.twig */
class __TwigTemplate_b54f3288090264904340b28f1c36eb74609b56a27ffa1896c250a59443db29bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e737c1b9bcad07fa2afb7083eef16e62cbddc27492e0896d6fcaa34f6da3d66 = $this->env->getExtension("native_profiler");
        $__internal_8e737c1b9bcad07fa2afb7083eef16e62cbddc27492e0896d6fcaa34f6da3d66->enter($__internal_8e737c1b9bcad07fa2afb7083eef16e62cbddc27492e0896d6fcaa34f6da3d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
          ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "          ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 10
        echo "    </head>

    <body>
      
        <h1>Bienvenue sur l'Intranet de InSociety</h1>
        <img id=\"imgmenu\" src=\"img/InSociety0.png\" width=\"160px\">


    <div class=\"exemple\" id=\"ex2\">
      <ul id=\"nav\"><!--
    --><li><a id=\"a\" href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\">Accueil</a></li><!--
    --><li><a id=\"a\" href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("myspace");
        echo "\">Mon Espace</a></li><!--
    --><li><a id=\"a\" href=\"#\">Ressources</a><!--
        --><ul><!--
            --><li><a id=\"ss\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("docs");
        echo "\">Gestion Document</a></li><!--
            --><li><a id=\"ss\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("events");
        echo "\">Gestion Evènement</a></li><!--
            --><li><a id=\"ss\" href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("salles");
        echo "\">Gestion Salle</a></li><!--
        --></ul><!--
      --></li><!--
    --><li><a id=\"a\" href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("connexion");
        echo "\">Déconnexion</a></li>
      </ul>
    </div>
    <div class=\"bloc\" id=\"contenu\">
   ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "    </div>
  
 ";
        // line 36
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "    
    <h4 id=\"real\">Webmaster - Réalisé par MAC, Portail Collaboratif </h4>
        <footer id=\"menu\">
        <ul><u><bold>Entreprise :</bold></u></ul>
          <li><a id=\"f\" href=\"#\">Annuaire</a></li>
          <li><a id=\"f\" href=\"#\">Plan du site</a></li>

        <ul><u><bold>Liens Utiles :</bold></u></ul>
          <li><a id=\"f\" href=\"#\">Contacter-nous</a></li>
          <li><a id=\"f\" href=\"#\"></a></li>

        <ul><u><bold>Besoin d'aide ?</bold></u></ul>
          <li><a id=\"f\" href=\"#\">Foire aux Questions</a></li>
      </footer>
        
    </body>

  
</html>";
        
        $__internal_8e737c1b9bcad07fa2afb7083eef16e62cbddc27492e0896d6fcaa34f6da3d66->leave($__internal_8e737c1b9bcad07fa2afb7083eef16e62cbddc27492e0896d6fcaa34f6da3d66_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_373eaafca3cf9c37eb6aade900c48845374fbbed4c7f0cc6001341bb8f374234 = $this->env->getExtension("native_profiler");
        $__internal_373eaafca3cf9c37eb6aade900c48845374fbbed4c7f0cc6001341bb8f374234->enter($__internal_373eaafca3cf9c37eb6aade900c48845374fbbed4c7f0cc6001341bb8f374234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Menu !";
        
        $__internal_373eaafca3cf9c37eb6aade900c48845374fbbed4c7f0cc6001341bb8f374234->leave($__internal_373eaafca3cf9c37eb6aade900c48845374fbbed4c7f0cc6001341bb8f374234_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8dc37256258e550517c4d777b121c9e270028a8e23da58fa83bfca51bd10bd18 = $this->env->getExtension("native_profiler");
        $__internal_8dc37256258e550517c4d777b121c9e270028a8e23da58fa83bfca51bd10bd18->enter($__internal_8dc37256258e550517c4d777b121c9e270028a8e23da58fa83bfca51bd10bd18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\" type=\"text/css\"> ";
        
        $__internal_8dc37256258e550517c4d777b121c9e270028a8e23da58fa83bfca51bd10bd18->leave($__internal_8dc37256258e550517c4d777b121c9e270028a8e23da58fa83bfca51bd10bd18_prof);

    }

    // line 9
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_b0f83b6de7b80e25a5b2c981f2f842e5c4c51023ac03c33e5c8f98c315909212 = $this->env->getExtension("native_profiler");
        $__internal_b0f83b6de7b80e25a5b2c981f2f842e5c4c51023ac03c33e5c8f98c315909212->enter($__internal_b0f83b6de7b80e25a5b2c981f2f842e5c4c51023ac03c33e5c8f98c315909212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menu.js"), "html", null, true);
        echo "\"  ></script>";
        
        $__internal_b0f83b6de7b80e25a5b2c981f2f842e5c4c51023ac03c33e5c8f98c315909212->leave($__internal_b0f83b6de7b80e25a5b2c981f2f842e5c4c51023ac03c33e5c8f98c315909212_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4d0dfeed29591ea92a4252d79dfad30558f2051abdda39d4417f3f0211f34bf = $this->env->getExtension("native_profiler");
        $__internal_f4d0dfeed29591ea92a4252d79dfad30558f2051abdda39d4417f3f0211f34bf->enter($__internal_f4d0dfeed29591ea92a4252d79dfad30558f2051abdda39d4417f3f0211f34bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f4d0dfeed29591ea92a4252d79dfad30558f2051abdda39d4417f3f0211f34bf->leave($__internal_f4d0dfeed29591ea92a4252d79dfad30558f2051abdda39d4417f3f0211f34bf_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e2bdce1e04ce659b49461bacdb6bacc50b0900eabd3a1dd8c00c7d79ee7a86d7 = $this->env->getExtension("native_profiler");
        $__internal_e2bdce1e04ce659b49461bacdb6bacc50b0900eabd3a1dd8c00c7d79ee7a86d7->enter($__internal_e2bdce1e04ce659b49461bacdb6bacc50b0900eabd3a1dd8c00c7d79ee7a86d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e2bdce1e04ce659b49461bacdb6bacc50b0900eabd3a1dd8c00c7d79ee7a86d7->leave($__internal_e2bdce1e04ce659b49461bacdb6bacc50b0900eabd3a1dd8c00c7d79ee7a86d7_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 36,  163 => 33,  149 => 9,  135 => 8,  123 => 5,  98 => 37,  96 => 36,  92 => 34,  90 => 33,  83 => 29,  77 => 26,  73 => 25,  69 => 24,  63 => 21,  59 => 20,  47 => 10,  44 => 9,  42 => 8,  38 => 7,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Menu !{% endblock %}</title>*/
/*         */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*           {% block stylesheets %}<link href="{{ asset('css/menu.css') }}" rel="stylesheet" media="all" type="text/css"> {% endblock %}*/
/*           {% block javascript %}<script type="text/javascript" src="{{ asset('js/menu.js') }}"  ></script>{% endblock %}*/
/*     </head>*/
/* */
/*     <body>*/
/*       */
/*         <h1>Bienvenue sur l'Intranet de InSociety</h1>*/
/*         <img id="imgmenu" src="img/InSociety0.png" width="160px">*/
/* */
/* */
/*     <div class="exemple" id="ex2">*/
/*       <ul id="nav"><!--*/
/*     --><li><a id="a" href="{{path('accueil')}}">Accueil</a></li><!--*/
/*     --><li><a id="a" href="{{path('myspace')}}">Mon Espace</a></li><!--*/
/*     --><li><a id="a" href="#">Ressources</a><!--*/
/*         --><ul><!--*/
/*             --><li><a id="ss" href="{{path('docs')}}">Gestion Document</a></li><!--*/
/*             --><li><a id="ss" href="{{path('events')}}">Gestion Evènement</a></li><!--*/
/*             --><li><a id="ss" href="{{path('salles')}}">Gestion Salle</a></li><!--*/
/*         --></ul><!--*/
/*       --></li><!--*/
/*     --><li><a id="a" href="{{ path('connexion') }}">Déconnexion</a></li>*/
/*       </ul>*/
/*     </div>*/
/*     <div class="bloc" id="contenu">*/
/*    {% block body %}{% endblock %}*/
/*     </div>*/
/*   */
/*  {% block javascripts %}{% endblock %}*/
/*     */
/*     <h4 id="real">Webmaster - Réalisé par MAC, Portail Collaboratif </h4>*/
/*         <footer id="menu">*/
/*         <ul><u><bold>Entreprise :</bold></u></ul>*/
/*           <li><a id="f" href="#">Annuaire</a></li>*/
/*           <li><a id="f" href="#">Plan du site</a></li>*/
/* */
/*         <ul><u><bold>Liens Utiles :</bold></u></ul>*/
/*           <li><a id="f" href="#">Contacter-nous</a></li>*/
/*           <li><a id="f" href="#"></a></li>*/
/* */
/*         <ul><u><bold>Besoin d'aide ?</bold></u></ul>*/
/*           <li><a id="f" href="#">Foire aux Questions</a></li>*/
/*       </footer>*/
/*         */
/*     </body>*/
/* */
/*   */
/* </html>*/
