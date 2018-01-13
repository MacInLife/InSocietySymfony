<?php

/* default/accueil.html.twig */
class __TwigTemplate_5375af4b9af5c1ac9dac9d3a62ecd3456dab59fbae03223a96bfd100f38579b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("menu.html.twig", "default/accueil.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0da3c9990712005e29bcf09172f41b498e1842d074c2c0f826e4a088cb3dcb32 = $this->env->getExtension("native_profiler");
        $__internal_0da3c9990712005e29bcf09172f41b498e1842d074c2c0f826e4a088cb3dcb32->enter($__internal_0da3c9990712005e29bcf09172f41b498e1842d074c2c0f826e4a088cb3dcb32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0da3c9990712005e29bcf09172f41b498e1842d074c2c0f826e4a088cb3dcb32->leave($__internal_0da3c9990712005e29bcf09172f41b498e1842d074c2c0f826e4a088cb3dcb32_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3911dc98ebdc226ba9f0b9b0462978b35b786a255425963f07e1bf038818f676 = $this->env->getExtension("native_profiler");
        $__internal_3911dc98ebdc226ba9f0b9b0462978b35b786a255425963f07e1bf038818f676->enter($__internal_3911dc98ebdc226ba9f0b9b0462978b35b786a255425963f07e1bf038818f676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil !";
        
        $__internal_3911dc98ebdc226ba9f0b9b0462978b35b786a255425963f07e1bf038818f676->leave($__internal_3911dc98ebdc226ba9f0b9b0462978b35b786a255425963f07e1bf038818f676_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_353c2803f74c765b7160b59934d7ccdfcc4c92864580dd7a118537edeb00a2a0 = $this->env->getExtension("native_profiler");
        $__internal_353c2803f74c765b7160b59934d7ccdfcc4c92864580dd7a118537edeb00a2a0->enter($__internal_353c2803f74c765b7160b59934d7ccdfcc4c92864580dd7a118537edeb00a2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "  
     <div class=\"bloc\" id=\"acc\">
        <header>
            <p> Bienvenue : </p>
            <!--Récupère le Nom Prenom grâce à Session-->
           
              ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "prenom"), "method"), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "nom"), "method"), "html", null, true);
        echo "

            <p> Nouveautés : </p>

        </header>
        <nav>
            <p> Activité Récente : </p>

            <p> Newsletters : </p>
        </nav>
        <footer>
            <p> Compteur : 
             <!--Script comteur : http://compteur-visite.com -->
<script type=\"text/javascript\" id=\"servicewb_143549\">
(function() {
var cv = document.createElement(\"script\"); cv.type = \"text/javascript\"; cv.async = true;
cv.src = \"http://www.compteur-visite.com/service.php?v=1.1&id=143549&k=32dfe5034dbf580d16304452e826cd89&c=\"+document.cookie;
var s = document.getElementsByTagName(\"script\")[0]; s.parentNode.insertBefore(cv, s);
})();
</script>
<noscript><a href=\"http://www.compteur-visite.com/\">Services gratuits pour webmasters</a></noscript>
            </p>
            <p>Météo
            <!-- widget meteo http://www.widget-meteo.com -->
<div id=\"widget_74d4826d063633330a710fd3e5a4e318\">
<span id=\"l_74d4826d063633330a710fd3e5a4e318\"><a href=\"http://www.mymeteo.info/r/evry-91_h\">&Eacute;vry temp&eacute;ratures et pr&eacute;visions</a></span>
<script type=\"text/javascript\">
(function() {
    var my = document.createElement(\"script\"); my.type = \"text/javascript\"; my.async = true;
    my.src = \"https://services.my-meteo.com/widget/js_design?ville=32898&format=grand-rectangle&nb_jours=5&coins&ombre1=000000&c1=ffffff&c2=c9c9c9&c3=ffffff&c4=ffffff&c5=ffffff&police=2&t_icones=2&fond=1&masque=5&x=300&y=250&d=0&id=74d4826d063633330a710fd3e5a4e318\";
    var z = document.getElementsByTagName(\"script\")[0]; z.parentNode.insertBefore(my, z);
})();
</script>
</div>
</p>
<!-- widget meteo -->
            
        </footer>
      </div> 
    

<style>
div#acc{
    width: 98.9%;
    height : 450px;
    margin-top:10px;
  background-color : white; 
  position : absolute;
  display: flex;
 
}

header{  margin-left: 25px; flex:1;}
nav{   flex:2;}
footer{  
  flex:3; 
    }
p{
    font-family: 'BlackChancery';
    text-decoration: underline;
    text-decoration: bold;
    font-size : 18px;
}
a{  text-decoration: none;     color: white;  }
img{ width: 120px; }
</style>


";
        
        $__internal_353c2803f74c765b7160b59934d7ccdfcc4c92864580dd7a118537edeb00a2a0->leave($__internal_353c2803f74c765b7160b59934d7ccdfcc4c92864580dd7a118537edeb00a2a0_prof);

    }

    public function getTemplateName()
    {
        return "default/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'menu.html.twig' %}*/
/* */
/* {% block title %}Accueil !{% endblock %}*/
/* {% block body %}  */
/*      <div class="bloc" id="acc">*/
/*         <header>*/
/*             <p> Bienvenue : </p>*/
/*             <!--Récupère le Nom Prenom grâce à Session-->*/
/*            */
/*               {{app.session.get('prenom') }}&nbsp;{{app.session.get('nom') }}*/
/* */
/*             <p> Nouveautés : </p>*/
/* */
/*         </header>*/
/*         <nav>*/
/*             <p> Activité Récente : </p>*/
/* */
/*             <p> Newsletters : </p>*/
/*         </nav>*/
/*         <footer>*/
/*             <p> Compteur : */
/*              <!--Script comteur : http://compteur-visite.com -->*/
/* <script type="text/javascript" id="servicewb_143549">*/
/* (function() {*/
/* var cv = document.createElement("script"); cv.type = "text/javascript"; cv.async = true;*/
/* cv.src = "http://www.compteur-visite.com/service.php?v=1.1&id=143549&k=32dfe5034dbf580d16304452e826cd89&c="+document.cookie;*/
/* var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(cv, s);*/
/* })();*/
/* </script>*/
/* <noscript><a href="http://www.compteur-visite.com/">Services gratuits pour webmasters</a></noscript>*/
/*             </p>*/
/*             <p>Météo*/
/*             <!-- widget meteo http://www.widget-meteo.com -->*/
/* <div id="widget_74d4826d063633330a710fd3e5a4e318">*/
/* <span id="l_74d4826d063633330a710fd3e5a4e318"><a href="http://www.mymeteo.info/r/evry-91_h">&Eacute;vry temp&eacute;ratures et pr&eacute;visions</a></span>*/
/* <script type="text/javascript">*/
/* (function() {*/
/*     var my = document.createElement("script"); my.type = "text/javascript"; my.async = true;*/
/*     my.src = "https://services.my-meteo.com/widget/js_design?ville=32898&format=grand-rectangle&nb_jours=5&coins&ombre1=000000&c1=ffffff&c2=c9c9c9&c3=ffffff&c4=ffffff&c5=ffffff&police=2&t_icones=2&fond=1&masque=5&x=300&y=250&d=0&id=74d4826d063633330a710fd3e5a4e318";*/
/*     var z = document.getElementsByTagName("script")[0]; z.parentNode.insertBefore(my, z);*/
/* })();*/
/* </script>*/
/* </div>*/
/* </p>*/
/* <!-- widget meteo -->*/
/*             */
/*         </footer>*/
/*       </div> */
/*     */
/* */
/* <style>*/
/* div#acc{*/
/*     width: 98.9%;*/
/*     height : 450px;*/
/*     margin-top:10px;*/
/*   background-color : white; */
/*   position : absolute;*/
/*   display: flex;*/
/*  */
/* }*/
/* */
/* header{  margin-left: 25px; flex:1;}*/
/* nav{   flex:2;}*/
/* footer{  */
/*   flex:3; */
/*     }*/
/* p{*/
/*     font-family: 'BlackChancery';*/
/*     text-decoration: underline;*/
/*     text-decoration: bold;*/
/*     font-size : 18px;*/
/* }*/
/* a{  text-decoration: none;     color: white;  }*/
/* img{ width: 120px; }*/
/* </style>*/
/* */
/* */
/* {% endblock %}*/
/* */
