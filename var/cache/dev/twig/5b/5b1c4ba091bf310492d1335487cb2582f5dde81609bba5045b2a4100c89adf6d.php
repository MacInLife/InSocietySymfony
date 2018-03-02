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
        $__internal_446b75471ce9dbb82a6de0350ca96aa2207494cff1d56dbc7cf80e87dd643927 = $this->env->getExtension("native_profiler");
        $__internal_446b75471ce9dbb82a6de0350ca96aa2207494cff1d56dbc7cf80e87dd643927->enter($__internal_446b75471ce9dbb82a6de0350ca96aa2207494cff1d56dbc7cf80e87dd643927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_446b75471ce9dbb82a6de0350ca96aa2207494cff1d56dbc7cf80e87dd643927->leave($__internal_446b75471ce9dbb82a6de0350ca96aa2207494cff1d56dbc7cf80e87dd643927_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c68db9d7af553ee8c8c7722269e89cda764b588cdf9ba9e9575836827f6fc928 = $this->env->getExtension("native_profiler");
        $__internal_c68db9d7af553ee8c8c7722269e89cda764b588cdf9ba9e9575836827f6fc928->enter($__internal_c68db9d7af553ee8c8c7722269e89cda764b588cdf9ba9e9575836827f6fc928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil !";
        
        $__internal_c68db9d7af553ee8c8c7722269e89cda764b588cdf9ba9e9575836827f6fc928->leave($__internal_c68db9d7af553ee8c8c7722269e89cda764b588cdf9ba9e9575836827f6fc928_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffdd8e3988affb179bdf5d54a3a4a19dc6ced1b03a60449010f8cea4bd24c5f6 = $this->env->getExtension("native_profiler");
        $__internal_ffdd8e3988affb179bdf5d54a3a4a19dc6ced1b03a60449010f8cea4bd24c5f6->enter($__internal_ffdd8e3988affb179bdf5d54a3a4a19dc6ced1b03a60449010f8cea4bd24c5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

            <p> Aujourd'hui : </p>
<script type=\"text/javascript\" src=\"http://vivget.com/viv/loader/nameday/pid/12921/locale/FR/rel/nofollow/loader.js/headercolortop/3DDFFF/headercolorbottom/FFFEF7/loader.js\"></script><noscript><a href=\"http://www.viversum.fr\" rel=\"nofollow\">Voyance viversum</a></noscript>
        </header>
        <hr>
        <nav>
            <p> Newsletters : </p>
            <section>
 <iframe width=\"400px\" height=\"160px\" src=\"https://www.20minutes.fr/actu-generale/\">
  <p>Your browser does not support iframes.</p>
</iframe>
      <iframe width=\"400px\" height=\"160px\" src=\"https://www.lemondeinformatique.fr/actualites/toute-l-actualite.html\">
  <p>Your browser does not support iframe</p>
</iframe>
</section>
<article>
 <iframe width=\"400px\" height=\"160px\" src=\"https://www.usinenouvelle.com/informatique/\">
  <p>Your browser does not support iframes.</p>
</iframe>
 <iframe width=\"400px\" height=\"160px\" src=\"https://www.generation-nt.com/logiciels.html\">
  <p>Your browser does not support iframes.</p>
</iframe>
</article>

        </nav>
         <hr>
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
  justify-content: center;
  display: flex;

 
}

header{  margin-left: 25px; margin-right: 25px; flex:1;}
nav{ margin-left : 25px; margin-right: 25px; }
section{ flex: 2; }
article { flex : 3; }
footer{  margin-left: 25px;
  flex:4; 
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
        
        $__internal_ffdd8e3988affb179bdf5d54a3a4a19dc6ced1b03a60449010f8cea4bd24c5f6->leave($__internal_ffdd8e3988affb179bdf5d54a3a4a19dc6ced1b03a60449010f8cea4bd24c5f6_prof);

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
/*             <p> Aujourd'hui : </p>*/
/* <script type="text/javascript" src="http://vivget.com/viv/loader/nameday/pid/12921/locale/FR/rel/nofollow/loader.js/headercolortop/3DDFFF/headercolorbottom/FFFEF7/loader.js"></script><noscript><a href="http://www.viversum.fr" rel="nofollow">Voyance viversum</a></noscript>*/
/*         </header>*/
/*         <hr>*/
/*         <nav>*/
/*             <p> Newsletters : </p>*/
/*             <section>*/
/*  <iframe width="400px" height="160px" src="https://www.20minutes.fr/actu-generale/">*/
/*   <p>Your browser does not support iframes.</p>*/
/* </iframe>*/
/*       <iframe width="400px" height="160px" src="https://www.lemondeinformatique.fr/actualites/toute-l-actualite.html">*/
/*   <p>Your browser does not support iframe</p>*/
/* </iframe>*/
/* </section>*/
/* <article>*/
/*  <iframe width="400px" height="160px" src="https://www.usinenouvelle.com/informatique/">*/
/*   <p>Your browser does not support iframes.</p>*/
/* </iframe>*/
/*  <iframe width="400px" height="160px" src="https://www.generation-nt.com/logiciels.html">*/
/*   <p>Your browser does not support iframes.</p>*/
/* </iframe>*/
/* </article>*/
/* */
/*         </nav>*/
/*          <hr>*/
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
/*   justify-content: center;*/
/*   display: flex;*/
/* */
/*  */
/* }*/
/* */
/* header{  margin-left: 25px; margin-right: 25px; flex:1;}*/
/* nav{ margin-left : 25px; margin-right: 25px; }*/
/* section{ flex: 2; }*/
/* article { flex : 3; }*/
/* footer{  margin-left: 25px;*/
/*   flex:4; */
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
