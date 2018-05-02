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
        $__internal_a9587201ae7c31657c844b55a6c46bb3afbfb7d839c8a6875f4c81775bd18d99 = $this->env->getExtension("native_profiler");
        $__internal_a9587201ae7c31657c844b55a6c46bb3afbfb7d839c8a6875f4c81775bd18d99->enter($__internal_a9587201ae7c31657c844b55a6c46bb3afbfb7d839c8a6875f4c81775bd18d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

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
        <ul><u><bold id=\"b\">Entreprise :</bold></u></ul>
          <li><a id=\"f\" href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("annuaire");
        echo "\">Annuaire</a></li>
          <li><a id=\"f\" href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("plan");
        echo "\">Plan du site</a></li>

        <ul><u><bold  id=\"b\">Liens Utiles :</bold></u></ul>
          <li><a id=\"f\" href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">Contacter-nous</a></li>
          <li><a id=\"f\" href=\"#\"></a></li>

        <ul><u><bold  id=\"b\">Besoin d'aide ?</bold></u></ul>
          <li><a id=\"f\" href=\"#\">Foire aux Questions</a></li>
      </footer>
        
    </body>

  
</html>";
        
        $__internal_a9587201ae7c31657c844b55a6c46bb3afbfb7d839c8a6875f4c81775bd18d99->leave($__internal_a9587201ae7c31657c844b55a6c46bb3afbfb7d839c8a6875f4c81775bd18d99_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_40a8f9b71fdf8c55d53f7eafcf5f44e298fa41eb038add00e8013542013066cc = $this->env->getExtension("native_profiler");
        $__internal_40a8f9b71fdf8c55d53f7eafcf5f44e298fa41eb038add00e8013542013066cc->enter($__internal_40a8f9b71fdf8c55d53f7eafcf5f44e298fa41eb038add00e8013542013066cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Menu !";
        
        $__internal_40a8f9b71fdf8c55d53f7eafcf5f44e298fa41eb038add00e8013542013066cc->leave($__internal_40a8f9b71fdf8c55d53f7eafcf5f44e298fa41eb038add00e8013542013066cc_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1c84687fab6a214638c5efd2e8cbea5befc1cd4b663aaf033dad6315e6606025 = $this->env->getExtension("native_profiler");
        $__internal_1c84687fab6a214638c5efd2e8cbea5befc1cd4b663aaf033dad6315e6606025->enter($__internal_1c84687fab6a214638c5efd2e8cbea5befc1cd4b663aaf033dad6315e6606025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\" type=\"text/css\"> ";
        
        $__internal_1c84687fab6a214638c5efd2e8cbea5befc1cd4b663aaf033dad6315e6606025->leave($__internal_1c84687fab6a214638c5efd2e8cbea5befc1cd4b663aaf033dad6315e6606025_prof);

    }

    // line 9
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_c3bad0b8af644bb32b5c4ac3fc07ebf04c5fd6f54ebd86cfb798588a5748aee4 = $this->env->getExtension("native_profiler");
        $__internal_c3bad0b8af644bb32b5c4ac3fc07ebf04c5fd6f54ebd86cfb798588a5748aee4->enter($__internal_c3bad0b8af644bb32b5c4ac3fc07ebf04c5fd6f54ebd86cfb798588a5748aee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menu.js"), "html", null, true);
        echo "\"  ></script>";
        
        $__internal_c3bad0b8af644bb32b5c4ac3fc07ebf04c5fd6f54ebd86cfb798588a5748aee4->leave($__internal_c3bad0b8af644bb32b5c4ac3fc07ebf04c5fd6f54ebd86cfb798588a5748aee4_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8776938700c856db8b4e5561d63806d3138a1871b3ed391907711efd3d08de80 = $this->env->getExtension("native_profiler");
        $__internal_8776938700c856db8b4e5561d63806d3138a1871b3ed391907711efd3d08de80->enter($__internal_8776938700c856db8b4e5561d63806d3138a1871b3ed391907711efd3d08de80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8776938700c856db8b4e5561d63806d3138a1871b3ed391907711efd3d08de80->leave($__internal_8776938700c856db8b4e5561d63806d3138a1871b3ed391907711efd3d08de80_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e24d0b1adf4970078c7a94287ea9e4c7f092a5d63fd4a955fe3d53b307cd0b3c = $this->env->getExtension("native_profiler");
        $__internal_e24d0b1adf4970078c7a94287ea9e4c7f092a5d63fd4a955fe3d53b307cd0b3c->enter($__internal_e24d0b1adf4970078c7a94287ea9e4c7f092a5d63fd4a955fe3d53b307cd0b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e24d0b1adf4970078c7a94287ea9e4c7f092a5d63fd4a955fe3d53b307cd0b3c->leave($__internal_e24d0b1adf4970078c7a94287ea9e4c7f092a5d63fd4a955fe3d53b307cd0b3c_prof);

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
        return array (  183 => 36,  172 => 33,  158 => 9,  144 => 8,  132 => 5,  114 => 45,  108 => 42,  104 => 41,  98 => 37,  96 => 36,  92 => 34,  90 => 33,  83 => 29,  77 => 26,  73 => 25,  69 => 24,  63 => 21,  59 => 20,  47 => 10,  44 => 9,  42 => 8,  38 => 7,  33 => 5,  27 => 1,);
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
/*         <ul><u><bold id="b">Entreprise :</bold></u></ul>*/
/*           <li><a id="f" href="{{path('annuaire')}}">Annuaire</a></li>*/
/*           <li><a id="f" href="{{path('plan')}}">Plan du site</a></li>*/
/* */
/*         <ul><u><bold  id="b">Liens Utiles :</bold></u></ul>*/
/*           <li><a id="f" href="{{path('contact')}}">Contacter-nous</a></li>*/
/*           <li><a id="f" href="#"></a></li>*/
/* */
/*         <ul><u><bold  id="b">Besoin d'aide ?</bold></u></ul>*/
/*           <li><a id="f" href="#">Foire aux Questions</a></li>*/
/*       </footer>*/
/*         */
/*     </body>*/
/* */
/*   */
/* </html>*/
