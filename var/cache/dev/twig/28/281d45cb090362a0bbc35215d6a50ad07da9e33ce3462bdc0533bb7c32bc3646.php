<?php

/* default/events.html.twig */
class __TwigTemplate_a41bd5f9eb4eb70811f0a2bdd5a9787ee8e8bdfa27338871d2db7d95b5188b6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("menu.html.twig", "default/events.html.twig", 1);
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
        $__internal_46675342630c53f22a06c6de67a79f5ff79fd7e84163c8274c19281106ef37ae = $this->env->getExtension("native_profiler");
        $__internal_46675342630c53f22a06c6de67a79f5ff79fd7e84163c8274c19281106ef37ae->enter($__internal_46675342630c53f22a06c6de67a79f5ff79fd7e84163c8274c19281106ef37ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/events.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46675342630c53f22a06c6de67a79f5ff79fd7e84163c8274c19281106ef37ae->leave($__internal_46675342630c53f22a06c6de67a79f5ff79fd7e84163c8274c19281106ef37ae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c87540c5d52a00b33eed77a87e14555606f637ee4d0941d3868b7ed19886020 = $this->env->getExtension("native_profiler");
        $__internal_1c87540c5d52a00b33eed77a87e14555606f637ee4d0941d3868b7ed19886020->enter($__internal_1c87540c5d52a00b33eed77a87e14555606f637ee4d0941d3868b7ed19886020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Evènement !";
        
        $__internal_1c87540c5d52a00b33eed77a87e14555606f637ee4d0941d3868b7ed19886020->leave($__internal_1c87540c5d52a00b33eed77a87e14555606f637ee4d0941d3868b7ed19886020_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_6792b181e06918e53843dc4a50be4c1871845928164b36e866ef6094e8db6a4f = $this->env->getExtension("native_profiler");
        $__internal_6792b181e06918e53843dc4a50be4c1871845928164b36e866ef6094e8db6a4f->enter($__internal_6792b181e06918e53843dc4a50be4c1871845928164b36e866ef6094e8db6a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "  


<nav>
 


 <dialog id=\"addEvt\">   ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["eventform"]) ? $context["eventform"] : $this->getContext($context, "eventform")), 'form');
        echo "  </dialog>
 
 <dialog id=\"editEvt\"> ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["eventMform"]) ? $context["eventMform"] : $this->getContext($context, "eventMform")), 'form');
        echo "</dialog>

 <menu>
   <a id=\"cal\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("calendrier");
        echo "\"><img id=\"ag\" src=\"img/agenda.png\" width=\"80px\" height=\"80px\" align=\"left\"></a>
 \t<img id=\"add\" src=\"img/PlusBleu0.png\" width=\"85px\" height=\"85px\" align=\"right\">
  <img id=\"fresh\" onclick=\"refresh()\" src=\"img/refresh.png\" width=\"85px\" height=\"85px\" align=\"right\">
  

 </menu>


<div id=\"bodyevt\">
  <table width=\"80%\" border=\"1\"> 
    <tr>
    <td align=\"center\" width=\"15%\"><b>Nom de l'évènement</b></td>
    <td align=\"center\" width=\"15%\"><b>Description/Type</b></td>
    <td align=\"center\" width=\"10%\"><b>Date de Début</b></td>
    <td align=\"center\" width=\"8%\"><b>Date de Fin</b></td>
    <td align=\"center\" width=\"12%\"><b>Heure de Début</b></td>
    <td align=\"center\" width=\"10%\"><b>Heure de Fin</b></td>
    <td align=\"center\" width=\"10%\"><b>Lieu</b></td>
    <td align=\"center\" width=\"10%\"><b>Salle</b></td>
    <td align=\"center\" width=\"6%\" colspan=2><b>Outils</b></td> 
    </tr>
      ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")));
        foreach ($context['_seq'] as $context["_key"] => $context["evt"]) {
            // line 38
            echo "       ";
            $context["fooo"] = twig_split_filter($this->env, $this->getAttribute($context["evt"], "idEvent", array()), ".");
            // line 39
            echo "    <tr>
      <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["evt"], "nomevt", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["evt"], "type", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evt"], "jourD", array()), "d-m-Y"), "html", null, true);
            echo "</td>
      <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evt"], "jourF", array()), "d-m-Y"), "html", null, true);
            echo "</td>
      <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evt"], "hDebut", array()), "H:i:s"), "html", null, true);
            echo "</td>
      <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evt"], "hFin", array()), "H:i:s"), "html", null, true);
            echo "</td>
      <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["evt"], "lieu", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["evt"], "idSr", array()), "nomsr", array()), "html", null, true);
            echo "</td>
      <td align=\"center\"><!--<a href=\"/events?idEvt=";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["evt"], "idEvent", array()), "html", null, true);
            echo "\">-->
     <a onclick=\"modif()\" href=\"/events?idEvt=";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["evt"], "idEvent", array()), "html", null, true);
            echo "\" ><img src=\"img/modif.png\" width=\"30px\" height=\"30px\"></a>
      \t<!--</a>-->
      </td>
      <td align=\"center\">
          <a href=\"/deleteEvt?idEvt=";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["evt"], "idEvent", array()), "html", null, true);
            echo "\"><img src=\"img/supp.png\" width=\"30px\" height=\"30px\" ></a>
      </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo " 
    </table>
    
</div>
 </nav>

 <link rel=\"stylesheet\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fullcalendar/css/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\" />
 <script type=\"text/javascript\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/lib/jquery.min.js"), "html", null, true);
        echo "\"></script>
 <script type=\"text/javascript\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/lib/moment.min.js"), "html", null, true);
        echo "\"></script>
 <script type=\"text/javascript\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
 <script type=\"text/javascript\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/fullcalendar.default-settings.js"), "html", null, true);
        echo "\"></script>

 \t<script>

 function modif(){
\t// body...


\taddEventListener('click', function(){
\tdocument.getElementById('editEvt').showModal();
\t});


}


  //Action image add
  (function() {
    var updateButton = document.getElementById('add');
    var cancelButton = document.getElementById('form_Annuler');


    // Update button opens a modal dialog
    updateButton.addEventListener('click', function() {
      document.getElementById('addEvt').showModal();
    });

    // Bouton pour fermer la boîte de dialogue
    cancelButton.addEventListener('click', function() {
      document.getElementById('addEvt').close();
    });

  })();

    //Action image edit
 /* (function() {
    var updateButton = document.getElementById('edit');
    var cancelButton = document.getElementById('form_Annuler');


    // Update button opens a modal dialog
    updateButton.addEventListener('click', function() {
      document.getElementById('editEvt').showModal();
    });

    // Bouton pour fermer la boîte de dialogue
    cancelButton.addEventListener('click', function() {
      document.getElementById('editEvt').close();
    });

  })();*/


  //Rafraichissement
function refresh(){
    location.reload();
}



</script>


<style type=\"text/css\">
table{ margin-left: 9%; position: absolute; }
img#add { margin-right: 2.5%; }
img#fresh {     margin-top: 8%;    margin-right: -5%; }


input{
  border-radius: 5px;
  margin-left: 2%;
  margin-right: 2%;
  float: right;  
}
select{
  border-radius: 5px;
}
select#form_idSR{ float: right; }
label#form_nomEvt{ float: left; }
label#form_type{ float: left; }

div#form_jourD{ float: right; }
div#form_jourF{ float: right; }
div#form_hDebut{ float: right; }
div#form_hFin{ float: right; }


dialog#addEvt{ width: 25%;  height: 30%; }
dialog#editEvt{ width: 25%;  height: 30%; }
button#Fermer{
  font-family:'BlackChancery' ; 
   font-size:  24px ;
   border-radius: 5px;
   margin-bottom: 5%;
    margin-top: 5%;
    margin-left: 37%;
    margin-right: 5%;
    background-color: black;
    color:white;
    height: 50px;
    width: 150px;
 float: left;
}
button#form_Ajouter{
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
button#form_Modifier{
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
        
        $__internal_6792b181e06918e53843dc4a50be4c1871845928164b36e866ef6094e8db6a4f->leave($__internal_6792b181e06918e53843dc4a50be4c1871845928164b36e866ef6094e8db6a4f_prof);

    }

    public function getTemplateName()
    {
        return "default/events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 66,  179 => 65,  175 => 64,  171 => 63,  167 => 62,  159 => 56,  149 => 53,  142 => 49,  138 => 48,  134 => 47,  130 => 46,  126 => 45,  122 => 44,  118 => 43,  114 => 42,  110 => 41,  106 => 40,  103 => 39,  100 => 38,  96 => 37,  72 => 16,  66 => 13,  61 => 11,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'menu.html.twig' %}*/
/* */
/* {% block title %}Evènement !{% endblock %}*/
/* {% block body %}  */
/* */
/* */
/* <nav>*/
/*  */
/* */
/* */
/*  <dialog id="addEvt">   {{ form(eventform)}}  </dialog>*/
/*  */
/*  <dialog id="editEvt"> {{ form(eventMform)}}</dialog>*/
/* */
/*  <menu>*/
/*    <a id="cal" href="{{path('calendrier')}}"><img id="ag" src="img/agenda.png" width="80px" height="80px" align="left"></a>*/
/*  	<img id="add" src="img/PlusBleu0.png" width="85px" height="85px" align="right">*/
/*   <img id="fresh" onclick="refresh()" src="img/refresh.png" width="85px" height="85px" align="right">*/
/*   */
/* */
/*  </menu>*/
/* */
/* */
/* <div id="bodyevt">*/
/*   <table width="80%" border="1"> */
/*     <tr>*/
/*     <td align="center" width="15%"><b>Nom de l'évènement</b></td>*/
/*     <td align="center" width="15%"><b>Description/Type</b></td>*/
/*     <td align="center" width="10%"><b>Date de Début</b></td>*/
/*     <td align="center" width="8%"><b>Date de Fin</b></td>*/
/*     <td align="center" width="12%"><b>Heure de Début</b></td>*/
/*     <td align="center" width="10%"><b>Heure de Fin</b></td>*/
/*     <td align="center" width="10%"><b>Lieu</b></td>*/
/*     <td align="center" width="10%"><b>Salle</b></td>*/
/*     <td align="center" width="6%" colspan=2><b>Outils</b></td> */
/*     </tr>*/
/*       {% for evt in liste %}*/
/*        {% set fooo = evt.idEvent|split('.') %}*/
/*     <tr>*/
/*       <td>{{evt.nomevt}}</td>*/
/*       <td>{{evt.type}}</td>*/
/*       <td>{{evt.jourD|date('d-m-Y')}}</td>*/
/*       <td>{{evt.jourF|date('d-m-Y')}}</td>*/
/*       <td>{{evt.hDebut|date('H:i:s')}}</td>*/
/*       <td>{{evt.hFin|date('H:i:s')}}</td>*/
/*       <td>{{evt.lieu}}</td>*/
/*       <td>{{evt.idSr.nomsr}}</td>*/
/*       <td align="center"><!--<a href="/events?idEvt={{evt.idEvent}}">-->*/
/*      <a onclick="modif()" href="/events?idEvt={{evt.idEvent}}" ><img src="img/modif.png" width="30px" height="30px"></a>*/
/*       	<!--</a>-->*/
/*       </td>*/
/*       <td align="center">*/
/*           <a href="/deleteEvt?idEvt={{evt.idEvent}}"><img src="img/supp.png" width="30px" height="30px" ></a>*/
/*       </td>*/
/*     </tr>*/
/*     {% endfor %} */
/*     </table>*/
/*     */
/* </div>*/
/*  </nav>*/
/* */
/*  <link rel="stylesheet" href="{{ asset('bundles/fullcalendar/css/fullcalendar/fullcalendar.min.css') }}" />*/
/*  <script type="text/javascript" src="{{ asset('bundles/fullcalendar/js/fullcalendar/lib/jquery.min.js') }}"></script>*/
/*  <script type="text/javascript" src="{{ asset('bundles/fullcalendar/js/fullcalendar/lib/moment.min.js') }}"></script>*/
/*  <script type="text/javascript" src="{{ asset('bundles/fullcalendar/js/fullcalendar/fullcalendar.min.js') }}"></script>*/
/*  <script type="text/javascript" src="{{ asset('bundles/fullcalendar/js/fullcalendar/fullcalendar.default-settings.js') }}"></script>*/
/* */
/*  	<script>*/
/* */
/*  function modif(){*/
/* 	// body...*/
/* */
/* */
/* 	addEventListener('click', function(){*/
/* 	document.getElementById('editEvt').showModal();*/
/* 	});*/
/* */
/* */
/* }*/
/* */
/* */
/*   //Action image add*/
/*   (function() {*/
/*     var updateButton = document.getElementById('add');*/
/*     var cancelButton = document.getElementById('form_Annuler');*/
/* */
/* */
/*     // Update button opens a modal dialog*/
/*     updateButton.addEventListener('click', function() {*/
/*       document.getElementById('addEvt').showModal();*/
/*     });*/
/* */
/*     // Bouton pour fermer la boîte de dialogue*/
/*     cancelButton.addEventListener('click', function() {*/
/*       document.getElementById('addEvt').close();*/
/*     });*/
/* */
/*   })();*/
/* */
/*     //Action image edit*/
/*  /* (function() {*/
/*     var updateButton = document.getElementById('edit');*/
/*     var cancelButton = document.getElementById('form_Annuler');*/
/* */
/* */
/*     // Update button opens a modal dialog*/
/*     updateButton.addEventListener('click', function() {*/
/*       document.getElementById('editEvt').showModal();*/
/*     });*/
/* */
/*     // Bouton pour fermer la boîte de dialogue*/
/*     cancelButton.addEventListener('click', function() {*/
/*       document.getElementById('editEvt').close();*/
/*     });*/
/* */
/*   })();*//* */
/* */
/* */
/*   //Rafraichissement*/
/* function refresh(){*/
/*     location.reload();*/
/* }*/
/* */
/* */
/* */
/* </script>*/
/* */
/* */
/* <style type="text/css">*/
/* table{ margin-left: 9%; position: absolute; }*/
/* img#add { margin-right: 2.5%; }*/
/* img#fresh {     margin-top: 8%;    margin-right: -5%; }*/
/* */
/* */
/* input{*/
/*   border-radius: 5px;*/
/*   margin-left: 2%;*/
/*   margin-right: 2%;*/
/*   float: right;  */
/* }*/
/* select{*/
/*   border-radius: 5px;*/
/* }*/
/* select#form_idSR{ float: right; }*/
/* label#form_nomEvt{ float: left; }*/
/* label#form_type{ float: left; }*/
/* */
/* div#form_jourD{ float: right; }*/
/* div#form_jourF{ float: right; }*/
/* div#form_hDebut{ float: right; }*/
/* div#form_hFin{ float: right; }*/
/* */
/* */
/* dialog#addEvt{ width: 25%;  height: 30%; }*/
/* dialog#editEvt{ width: 25%;  height: 30%; }*/
/* button#Fermer{*/
/*   font-family:'BlackChancery' ; */
/*    font-size:  24px ;*/
/*    border-radius: 5px;*/
/*    margin-bottom: 5%;*/
/*     margin-top: 5%;*/
/*     margin-left: 37%;*/
/*     margin-right: 5%;*/
/*     background-color: black;*/
/*     color:white;*/
/*     height: 50px;*/
/*     width: 150px;*/
/*  float: left;*/
/* }*/
/* button#form_Ajouter{*/
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
/* button#form_Modifier{*/
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
/* </style> */
/* */
/*  {% endblock %}*/
