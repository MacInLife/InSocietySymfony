<?php

/* default/salles.html.twig */
class __TwigTemplate_59122d7d812009189b9ea2aef571b12e7d8095c3df39247b6ed611372876222f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("menu.html.twig", "default/salles.html.twig", 1);
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
        $__internal_66364958d3a617104cb764de8e93f46139669279f97310fedf218563b88b8f15 = $this->env->getExtension("native_profiler");
        $__internal_66364958d3a617104cb764de8e93f46139669279f97310fedf218563b88b8f15->enter($__internal_66364958d3a617104cb764de8e93f46139669279f97310fedf218563b88b8f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/salles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66364958d3a617104cb764de8e93f46139669279f97310fedf218563b88b8f15->leave($__internal_66364958d3a617104cb764de8e93f46139669279f97310fedf218563b88b8f15_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4027a10e7f031666163856bff082ef5a948a83f9157921cd1acd9c3ad2b9758d = $this->env->getExtension("native_profiler");
        $__internal_4027a10e7f031666163856bff082ef5a948a83f9157921cd1acd9c3ad2b9758d->enter($__internal_4027a10e7f031666163856bff082ef5a948a83f9157921cd1acd9c3ad2b9758d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Salles de réunion !";
        
        $__internal_4027a10e7f031666163856bff082ef5a948a83f9157921cd1acd9c3ad2b9758d->leave($__internal_4027a10e7f031666163856bff082ef5a948a83f9157921cd1acd9c3ad2b9758d_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b34edce949672407407c15d0d413e39ff8ad2654e3c796a483b11d50ae44a19d = $this->env->getExtension("native_profiler");
        $__internal_b34edce949672407407c15d0d413e39ff8ad2654e3c796a483b11d50ae44a19d->enter($__internal_b34edce949672407407c15d0d413e39ff8ad2654e3c796a483b11d50ae44a19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "  
<div class=\"bloc\" id=\"acc\">

<div id=\"bodysal\">
  <table  border=\"1\" align=\"center\"> 
  \t  <caption>Voir &amp; Réserver une salle de réunion</caption>

    <tr id=\"tit\">
    <td align=\"center\" width=\"12%\"><b>Nom de la Salle</b></td>
    <td align=\"center\" width=\"9%\"><b>Nombre Total de place</b></td>
    <td align=\"center\" width=\"10%\"><b>Nombre de personne prévu</b></td>
    <td align=\"center\" width=\"12%\"><b>Date &amp; Heure d'occupation début</b></td>
    <td align=\"center\" width=\"12%\"><b>Date &amp; Heure d'occupation fin</b></td>
    <td align=\"center\" width=\"5%\"><b>Lieu</b></td>
    <td align=\"center\" width=\"5%\"><b>Statut</b></td>
    <td align=\"center\" width=\"3%\" colspan=2><b>Outils</b></td> 
    </tr>
          ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")));
        foreach ($context['_seq'] as $context["_key"] => $context["salle"]) {
            // line 22
            echo "       ";
            $context["fooo"] = twig_split_filter($this->env, $this->getAttribute($context["salle"], "idSr", array()), ".");
            // line 23
            echo "    <tr id=\"scroll\">
      <td id=\"d\" >";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "nomsr", array()), "html", null, true);
            echo "</td>
      <td id=\"d\" align=\"right\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "nbplacetotal", array()), "html", null, true);
            echo "</td>
      <td id=\"d\" align=\"right\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "nbpers", array()), "html", null, true);
            echo "</td>
      <td id=\"d\">";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["salle"], "dateD", array()), "d-m-Y    H:i:s"), "html", null, true);
            echo "</td>
      <td id=\"d\">";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["salle"], "dateF", array()), "d-m-Y    H:i:s"), "html", null, true);
            echo "</td>
      <td id=\"d\" align=\"center\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "lieu", array()), "html", null, true);
            echo "</td>
      <td id=\"d\" align=\"center\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["salle"], "idStatut", array()), "libeller", array()), "html", null, true);
            echo "</td>
     </tr>
   \t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo " 

    </table>
    
</div>

<hr>
 <section id=\"list\">";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["sallesform"]) ? $context["sallesform"] : $this->getContext($context, "sallesform")), 'form');
        echo "</section>

</div> 
<style type=\"text/css\">
div#acc{ height: 500px; }
caption{
    font-family: 'BlackChancery';
    text-decoration: bold;
    font-size : 20px;
}
label{
    font-family: 'BlackChancery';
    text-decoration: bold;
    font-size : 20px;
}
section#list{ margin-top : 20px; margin-left :20px; margin-right:20px; background-color:#dcdcdc; column-count: 5;}
tr#tit{ background: -webkit-linear-gradient(bottom , #badeec 0pt, #bfdbe6 50%, #bfdbe6 51%, #f7f2d0 100%) repeat scroll 0 0 transparent; }
tr,td{padding-left:5px;}
table{   margin-left:5px; margin-right:5px; overflow: scroll; }
input#form_nbpers{ width :40px; }
select{
\tbackground:-webkit-linear-gradient(bottom , #dad4d4 0pt, #f9f9f9 50%, #fffbfb 51%, #e2e2e2 100%) repeat scroll 0 0 transparent;
\tborder-radius: 15px;
\tfont-family: cursive;
\tfont-size: 14px;
}
input{
\tbackground:-webkit-linear-gradient(bottom , #dad4d4 0pt, #f9f9f9 50%, #fffbfb 51%, #e2e2e2 100%) repeat scroll 0 0 transparent;
\tborder-radius: 15px;
\tfont-family: cursive;
\tfont-size: 14px;
}
input#form_dateD_date{ \twidth: 126px;  } input#form_dateD_time { width: 65px; }
input#form_dateF_date{ \twidth: 126px; } input#form_dateF_time { width: 65px; }
button{
\t font-family:'BlackChancery' ; 
\t font-size:  24px ;
\t border-radius: 5px;
\tmargin-top: 5%;
    background-color: black;
    color:white;
    height: 50px;
    width: 150px;

}
</style>

";
        
        $__internal_b34edce949672407407c15d0d413e39ff8ad2654e3c796a483b11d50ae44a19d->leave($__internal_b34edce949672407407c15d0d413e39ff8ad2654e3c796a483b11d50ae44a19d_prof);

    }

    public function getTemplateName()
    {
        return "default/salles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 39,  114 => 32,  105 => 30,  101 => 29,  97 => 28,  93 => 27,  89 => 26,  85 => 25,  81 => 24,  78 => 23,  75 => 22,  71 => 21,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'menu.html.twig' %}*/
/* */
/* {% block title %}Salles de réunion !{% endblock %}*/
/* {% block body %}  */
/* <div class="bloc" id="acc">*/
/* */
/* <div id="bodysal">*/
/*   <table  border="1" align="center"> */
/*   	  <caption>Voir &amp; Réserver une salle de réunion</caption>*/
/* */
/*     <tr id="tit">*/
/*     <td align="center" width="12%"><b>Nom de la Salle</b></td>*/
/*     <td align="center" width="9%"><b>Nombre Total de place</b></td>*/
/*     <td align="center" width="10%"><b>Nombre de personne prévu</b></td>*/
/*     <td align="center" width="12%"><b>Date &amp; Heure d'occupation début</b></td>*/
/*     <td align="center" width="12%"><b>Date &amp; Heure d'occupation fin</b></td>*/
/*     <td align="center" width="5%"><b>Lieu</b></td>*/
/*     <td align="center" width="5%"><b>Statut</b></td>*/
/*     <td align="center" width="3%" colspan=2><b>Outils</b></td> */
/*     </tr>*/
/*           {% for salle in liste %}*/
/*        {% set fooo = salle.idSr|split('.') %}*/
/*     <tr id="scroll">*/
/*       <td id="d" >{{salle.nomsr}}</td>*/
/*       <td id="d" align="right">{{salle.nbplacetotal}}</td>*/
/*       <td id="d" align="right">{{salle.nbpers}}</td>*/
/*       <td id="d">{{salle.dateD|date('d-m-Y    H:i:s')}}</td>*/
/*       <td id="d">{{salle.dateF|date('d-m-Y    H:i:s')}}</td>*/
/*       <td id="d" align="center">{{salle.lieu}}</td>*/
/*       <td id="d" align="center">{{salle.idStatut.libeller}}</td>*/
/*      </tr>*/
/*    			 {% endfor %} */
/* */
/*     </table>*/
/*     */
/* </div>*/
/* */
/* <hr>*/
/*  <section id="list">{{ form(sallesform)}}</section>*/
/* */
/* </div> */
/* <style type="text/css">*/
/* div#acc{ height: 500px; }*/
/* caption{*/
/*     font-family: 'BlackChancery';*/
/*     text-decoration: bold;*/
/*     font-size : 20px;*/
/* }*/
/* label{*/
/*     font-family: 'BlackChancery';*/
/*     text-decoration: bold;*/
/*     font-size : 20px;*/
/* }*/
/* section#list{ margin-top : 20px; margin-left :20px; margin-right:20px; background-color:#dcdcdc; column-count: 5;}*/
/* tr#tit{ background: -webkit-linear-gradient(bottom , #badeec 0pt, #bfdbe6 50%, #bfdbe6 51%, #f7f2d0 100%) repeat scroll 0 0 transparent; }*/
/* tr,td{padding-left:5px;}*/
/* table{   margin-left:5px; margin-right:5px; overflow: scroll; }*/
/* input#form_nbpers{ width :40px; }*/
/* select{*/
/* 	background:-webkit-linear-gradient(bottom , #dad4d4 0pt, #f9f9f9 50%, #fffbfb 51%, #e2e2e2 100%) repeat scroll 0 0 transparent;*/
/* 	border-radius: 15px;*/
/* 	font-family: cursive;*/
/* 	font-size: 14px;*/
/* }*/
/* input{*/
/* 	background:-webkit-linear-gradient(bottom , #dad4d4 0pt, #f9f9f9 50%, #fffbfb 51%, #e2e2e2 100%) repeat scroll 0 0 transparent;*/
/* 	border-radius: 15px;*/
/* 	font-family: cursive;*/
/* 	font-size: 14px;*/
/* }*/
/* input#form_dateD_date{ 	width: 126px;  } input#form_dateD_time { width: 65px; }*/
/* input#form_dateF_date{ 	width: 126px; } input#form_dateF_time { width: 65px; }*/
/* button{*/
/* 	 font-family:'BlackChancery' ; */
/* 	 font-size:  24px ;*/
/* 	 border-radius: 5px;*/
/* 	margin-top: 5%;*/
/*     background-color: black;*/
/*     color:white;*/
/*     height: 50px;*/
/*     width: 150px;*/
/* */
/* }*/
/* </style>*/
/* */
/* {% endblock %}*/
