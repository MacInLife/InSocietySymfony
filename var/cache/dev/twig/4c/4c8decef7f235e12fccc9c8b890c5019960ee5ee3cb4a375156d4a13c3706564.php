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
        $__internal_1f3da5d4a35050f3087d40a90174995b547e2bd22e07e7b40e642b729c05594e = $this->env->getExtension("native_profiler");
        $__internal_1f3da5d4a35050f3087d40a90174995b547e2bd22e07e7b40e642b729c05594e->enter($__internal_1f3da5d4a35050f3087d40a90174995b547e2bd22e07e7b40e642b729c05594e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

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
          <li><a id=\"f\" href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">Contacter-nous</a></li>
          <li><a id=\"f\" href=\"#\"></a></li>

        <ul><u><bold>Besoin d'aide ?</bold></u></ul>
          <li><a id=\"f\" href=\"#\">Foire aux Questions</a></li>
      </footer>
        
    </body>

  
</html>";
        
        $__internal_1f3da5d4a35050f3087d40a90174995b547e2bd22e07e7b40e642b729c05594e->leave($__internal_1f3da5d4a35050f3087d40a90174995b547e2bd22e07e7b40e642b729c05594e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b957429347c23d34a9ada4a48672918fe0cf7dc1cd8c446a9d5db0341c9beb3 = $this->env->getExtension("native_profiler");
        $__internal_5b957429347c23d34a9ada4a48672918fe0cf7dc1cd8c446a9d5db0341c9beb3->enter($__internal_5b957429347c23d34a9ada4a48672918fe0cf7dc1cd8c446a9d5db0341c9beb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Menu !";
        
        $__internal_5b957429347c23d34a9ada4a48672918fe0cf7dc1cd8c446a9d5db0341c9beb3->leave($__internal_5b957429347c23d34a9ada4a48672918fe0cf7dc1cd8c446a9d5db0341c9beb3_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_38b1ce998bbbcf9e39c90e144f60c5850bedb766329badb5133652a129adc3f1 = $this->env->getExtension("native_profiler");
        $__internal_38b1ce998bbbcf9e39c90e144f60c5850bedb766329badb5133652a129adc3f1->enter($__internal_38b1ce998bbbcf9e39c90e144f60c5850bedb766329badb5133652a129adc3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\" type=\"text/css\"> ";
        
        $__internal_38b1ce998bbbcf9e39c90e144f60c5850bedb766329badb5133652a129adc3f1->leave($__internal_38b1ce998bbbcf9e39c90e144f60c5850bedb766329badb5133652a129adc3f1_prof);

    }

    // line 9
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_6ac920e9fc668e5f7449b77acd3ddfaadd5a3e63f4b14950150b81c65704599b = $this->env->getExtension("native_profiler");
        $__internal_6ac920e9fc668e5f7449b77acd3ddfaadd5a3e63f4b14950150b81c65704599b->enter($__internal_6ac920e9fc668e5f7449b77acd3ddfaadd5a3e63f4b14950150b81c65704599b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menu.js"), "html", null, true);
        echo "\"  ></script>";
        
        $__internal_6ac920e9fc668e5f7449b77acd3ddfaadd5a3e63f4b14950150b81c65704599b->leave($__internal_6ac920e9fc668e5f7449b77acd3ddfaadd5a3e63f4b14950150b81c65704599b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b80bf0e8ee3144932b384a048686c28368d7d959d3c2db98d65464e0f1c38812 = $this->env->getExtension("native_profiler");
        $__internal_b80bf0e8ee3144932b384a048686c28368d7d959d3c2db98d65464e0f1c38812->enter($__internal_b80bf0e8ee3144932b384a048686c28368d7d959d3c2db98d65464e0f1c38812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b80bf0e8ee3144932b384a048686c28368d7d959d3c2db98d65464e0f1c38812->leave($__internal_b80bf0e8ee3144932b384a048686c28368d7d959d3c2db98d65464e0f1c38812_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2068361d66ae06583c41aef5363ce45cb9ea9a259e739c51026abc833947c86c = $this->env->getExtension("native_profiler");
        $__internal_2068361d66ae06583c41aef5363ce45cb9ea9a259e739c51026abc833947c86c->enter($__internal_2068361d66ae06583c41aef5363ce45cb9ea9a259e739c51026abc833947c86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2068361d66ae06583c41aef5363ce45cb9ea9a259e739c51026abc833947c86c->leave($__internal_2068361d66ae06583c41aef5363ce45cb9ea9a259e739c51026abc833947c86c_prof);

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
        return array (  177 => 36,  166 => 33,  152 => 9,  138 => 8,  126 => 5,  108 => 45,  98 => 37,  96 => 36,  92 => 34,  90 => 33,  83 => 29,  77 => 26,  73 => 25,  69 => 24,  63 => 21,  59 => 20,  47 => 10,  44 => 9,  42 => 8,  38 => 7,  33 => 5,  27 => 1,);
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
/*           <li><a id="f" href="{{path('contact')}}">Contacter-nous</a></li>*/
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
