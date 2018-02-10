<?php

/* default/docs.html.twig */
class __TwigTemplate_f4526546a27c9c8281d367f89c5b46d11d6d9b4401375b766e1779be7051045f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("menu.html.twig", "default/docs.html.twig", 1);
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
        $__internal_8ec11d75718fc83269cf88006a8942b6762bc7b16029ed69ed1fdd2f4f8c1bd5 = $this->env->getExtension("native_profiler");
        $__internal_8ec11d75718fc83269cf88006a8942b6762bc7b16029ed69ed1fdd2f4f8c1bd5->enter($__internal_8ec11d75718fc83269cf88006a8942b6762bc7b16029ed69ed1fdd2f4f8c1bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/docs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ec11d75718fc83269cf88006a8942b6762bc7b16029ed69ed1fdd2f4f8c1bd5->leave($__internal_8ec11d75718fc83269cf88006a8942b6762bc7b16029ed69ed1fdd2f4f8c1bd5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_681bde62d3872b43c6694dd91121677ee085567ecf9bc26587cb954d8e8683d8 = $this->env->getExtension("native_profiler");
        $__internal_681bde62d3872b43c6694dd91121677ee085567ecf9bc26587cb954d8e8683d8->enter($__internal_681bde62d3872b43c6694dd91121677ee085567ecf9bc26587cb954d8e8683d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Document !";
        
        $__internal_681bde62d3872b43c6694dd91121677ee085567ecf9bc26587cb954d8e8683d8->leave($__internal_681bde62d3872b43c6694dd91121677ee085567ecf9bc26587cb954d8e8683d8_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6b2a958d96ee446587836c1c30db9812817b2d7f3a5cc0edbcb23eb4e7d71b7 = $this->env->getExtension("native_profiler");
        $__internal_b6b2a958d96ee446587836c1c30db9812817b2d7f3a5cc0edbcb23eb4e7d71b7->enter($__internal_b6b2a958d96ee446587836c1c30db9812817b2d7f3a5cc0edbcb23eb4e7d71b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "  

 <dialog id=\"addDoc\">   ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["docsform"]) ? $context["docsform"] : $this->getContext($context, "docsform")), 'form');
        echo "   </dialog>
 <menu>
    <img id=\"add\" src=\"img/PlusBleu.png\" width=\"160px\" height=\"85px\" align=\"right\">
 </menu>

<div id=\"body\">
\t<table width=\"80%\" border=\"1\">
   
    <tr>
    <td>Nom du Fichier</td>
    <td>Type de Fichier</td>
    <td>Vue</td>
    </tr>
     
\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")));
        foreach ($context['_seq'] as $context["_key"] => $context["undoc"]) {
            // line 21
            echo "\t      ";
            $context["foo"] = twig_split_filter($this->env, $this->getAttribute($context["undoc"], "fileDoc", array()), ".");
            // line 22
            echo "        <tr>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")), 1, array(), "array"), "html", null, true);
            echo "</td>
        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["undoc"], "typeDoc", array()), "html", null, true);
            echo "</td>
        <td><a href=\"../uploads/documents/";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["undoc"], "fileDoc", array()), "html", null, true);
            echo "\" target=\"_blank\">Voir le Fichier</a></td>
        </tr>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['undoc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo " 

    </table>
    
</div>

    <script>
 
  (function() {
    var updateButton = document.getElementById('add');
    var cancelButton = document.getElementById('form_Annuler');

    // Update button opens a modal dialog
    updateButton.addEventListener('click', function() {
      document.getElementById('addDoc').showModal();
    });

    // Bouton pour fermer la boîte de dialogue
    cancelButton.addEventListener('click', function() {
      document.getElementById('addDoc').close();
    });

  })();
</script>
<style type=\"text/css\">
img#add{ margin-right: 3%; }
table{ margin-left: 5%; }
dialog{ width: 30%; }
input#form_Fichier{
    font-family:'BlackChancery' ; 
  margin-left: 2%;
  margin-right: 12%;
  font-size: 18px;
  float : right;
}
button#form_Envoyer{
  font-family:'BlackChancery' ; 
   font-size:  24px ;
   border-radius: 5px;
   margin-bottom: 5%;
    margin-top: 5%;
    margin-left: 5%;
    margin-right: 5%;
    background-color: black;
    color:white;
    height: 50px;
    width: 150px;
 float: left;
}
button#form_Annuler{
  font-family:'BlackChancery' ; 
   font-size:  24px ;
   border-radius: 5px;
   margin-bottom: 5%;
    margin-top: 5%;
    margin-left: 5%;
    margin-right: 5%;
    background-color: black;
    color:white;
    height: 50px;
    width: 150px;
    float: right;
}
</style>

";
        
        $__internal_b6b2a958d96ee446587836c1c30db9812817b2d7f3a5cc0edbcb23eb4e7d71b7->leave($__internal_b6b2a958d96ee446587836c1c30db9812817b2d7f3a5cc0edbcb23eb4e7d71b7_prof);

    }

    public function getTemplateName()
    {
        return "default/docs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 27,  91 => 25,  87 => 24,  83 => 23,  80 => 22,  77 => 21,  73 => 20,  56 => 6,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'menu.html.twig' %}*/
/* */
/* {% block title %}Document !{% endblock %}*/
/* {% block body %}  */
/* */
/*  <dialog id="addDoc">   {{ form(docsform)}}   </dialog>*/
/*  <menu>*/
/*     <img id="add" src="img/PlusBleu.png" width="160px" height="85px" align="right">*/
/*  </menu>*/
/* */
/* <div id="body">*/
/* 	<table width="80%" border="1">*/
/*    */
/*     <tr>*/
/*     <td>Nom du Fichier</td>*/
/*     <td>Type de Fichier</td>*/
/*     <td>Vue</td>*/
/*     </tr>*/
/*      */
/* 	{% for undoc in liste %}*/
/* 	      {% set foo = undoc.fileDoc|split('.') %}*/
/*         <tr>*/
/*         <td>{{foo[1] }}</td>*/
/*         <td>{{ undoc.typeDoc }}</td>*/
/*         <td><a href="../uploads/documents/{{ undoc.fileDoc }}" target="_blank">Voir le Fichier</a></td>*/
/*         </tr>*/
/*    {% endfor %} */
/* */
/*     </table>*/
/*     */
/* </div>*/
/* */
/*     <script>*/
/*  */
/*   (function() {*/
/*     var updateButton = document.getElementById('add');*/
/*     var cancelButton = document.getElementById('form_Annuler');*/
/* */
/*     // Update button opens a modal dialog*/
/*     updateButton.addEventListener('click', function() {*/
/*       document.getElementById('addDoc').showModal();*/
/*     });*/
/* */
/*     // Bouton pour fermer la boîte de dialogue*/
/*     cancelButton.addEventListener('click', function() {*/
/*       document.getElementById('addDoc').close();*/
/*     });*/
/* */
/*   })();*/
/* </script>*/
/* <style type="text/css">*/
/* img#add{ margin-right: 3%; }*/
/* table{ margin-left: 5%; }*/
/* dialog{ width: 30%; }*/
/* input#form_Fichier{*/
/*     font-family:'BlackChancery' ; */
/*   margin-left: 2%;*/
/*   margin-right: 12%;*/
/*   font-size: 18px;*/
/*   float : right;*/
/* }*/
/* button#form_Envoyer{*/
/*   font-family:'BlackChancery' ; */
/*    font-size:  24px ;*/
/*    border-radius: 5px;*/
/*    margin-bottom: 5%;*/
/*     margin-top: 5%;*/
/*     margin-left: 5%;*/
/*     margin-right: 5%;*/
/*     background-color: black;*/
/*     color:white;*/
/*     height: 50px;*/
/*     width: 150px;*/
/*  float: left;*/
/* }*/
/* button#form_Annuler{*/
/*   font-family:'BlackChancery' ; */
/*    font-size:  24px ;*/
/*    border-radius: 5px;*/
/*    margin-bottom: 5%;*/
/*     margin-top: 5%;*/
/*     margin-left: 5%;*/
/*     margin-right: 5%;*/
/*     background-color: black;*/
/*     color:white;*/
/*     height: 50px;*/
/*     width: 150px;*/
/*     float: right;*/
/* }*/
/* </style>*/
/* */
/* {% endblock %}*/
