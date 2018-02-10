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
        $__internal_d6b90a0a4810258ad9271645a8d4aef9570856451eff0809daa5fb2e7ac79efd = $this->env->getExtension("native_profiler");
        $__internal_d6b90a0a4810258ad9271645a8d4aef9570856451eff0809daa5fb2e7ac79efd->enter($__internal_d6b90a0a4810258ad9271645a8d4aef9570856451eff0809daa5fb2e7ac79efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/events.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6b90a0a4810258ad9271645a8d4aef9570856451eff0809daa5fb2e7ac79efd->leave($__internal_d6b90a0a4810258ad9271645a8d4aef9570856451eff0809daa5fb2e7ac79efd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_853d61fb1011fbc44af227be93f4a99bb11d4d6ad6665152c2cf6bea84663066 = $this->env->getExtension("native_profiler");
        $__internal_853d61fb1011fbc44af227be93f4a99bb11d4d6ad6665152c2cf6bea84663066->enter($__internal_853d61fb1011fbc44af227be93f4a99bb11d4d6ad6665152c2cf6bea84663066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Evènement !";
        
        $__internal_853d61fb1011fbc44af227be93f4a99bb11d4d6ad6665152c2cf6bea84663066->leave($__internal_853d61fb1011fbc44af227be93f4a99bb11d4d6ad6665152c2cf6bea84663066_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d47d806cdc90d7605d2e1fe2da5bb89a52d9f04692b1a0c959147c266bb061b = $this->env->getExtension("native_profiler");
        $__internal_6d47d806cdc90d7605d2e1fe2da5bb89a52d9f04692b1a0c959147c266bb061b->enter($__internal_6d47d806cdc90d7605d2e1fe2da5bb89a52d9f04692b1a0c959147c266bb061b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "  


<nav>
  <a id=\"cal\" href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("calendrier");
        echo "\">Calendrier</a>
 <dialog id=\"Agenda\">  ";
        // line 9
        $this->loadTemplate("@FullCalendar/Calendar/calendar.html.twig", "default/events.html.twig", 9)->display($context);
        echo " <button id=\"Fermer\" type=\"reset\">Fermer</button>

 <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fullcalendar/css/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\" />
 <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/lib/jquery.min.js"), "html", null, true);
        echo "\"></script>
 <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/lib/moment.min.js"), "html", null, true);
        echo "\"></script>
 <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
 <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/fullcalendar.default-settings.js"), "html", null, true);
        echo "\"></script>
 </dialog>

 <dialog id=\"addEvt\">   ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["eventform"]) ? $context["eventform"] : $this->getContext($context, "eventform")), 'form');
        echo "  </dialog>

 <menu>
  <img id=\"ag\" src=\"img/agenda.png\" width=\"80px\" height=\"80px\" align=\"left\">
 \t<img id=\"add\" src=\"img/PlusBleu.png\" width=\"160px\" height=\"85px\" align=\"right\">
 </menu>


<div id=\"bodyevt\">
  <table width=\"80%\" border=\"1\">
   
    <tr>
    <td>Nom de l'évènement</td>
    <td>Description/Type</td>
    <td>Date de Début</td>
    <td>Date de Fin</td>
    <td>Heure de Début</td>
    <td>Heure de Fin</td>
    <td>Lieu</td>
    <td>Salle</td>
    </tr>
     


    </table>
    
</div>
 </nav>


 \t<script>
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

  (function(){
    var updateButton = document.getElementById('ag');
    var cancelButton = document.getElementById('Fermer')

    //Update bouton ouvrir la boite de dialogue
    updateButton.addEventListener('click', function(){
      document.getElementById('Agenda').showModal();
    });

    //Bouton pour fermer la boite de dialogue
    cancelButton.addEventListener('click', function(){
      document.getElementById('Agenda').close();
    });
  })();


    

</script>


<style type=\"text/css\">
table{ margin-left: 9%; position: absolute; }
img#add { margin-right: 2%; }

input{
  border-radius: 5px;
  margin-left: 2%;
  margin-right: 2%;
  float : right;
  
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


dialog#addEvt{ width: 20%;  }
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
        
        $__internal_6d47d806cdc90d7605d2e1fe2da5bb89a52d9f04692b1a0c959147c266bb061b->leave($__internal_6d47d806cdc90d7605d2e1fe2da5bb89a52d9f04692b1a0c959147c266bb061b_prof);

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
        return array (  89 => 18,  83 => 15,  79 => 14,  75 => 13,  71 => 12,  67 => 11,  62 => 9,  58 => 8,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'menu.html.twig' %}*/
/* */
/* {% block title %}Evènement !{% endblock %}*/
/* {% block body %}  */
/* */
/* */
/* <nav>*/
/*   <a id="cal" href="{{path('calendrier')}}">Calendrier</a>*/
/*  <dialog id="Agenda">  {% include '@FullCalendar/Calendar/calendar.html.twig' %} <button id="Fermer" type="reset">Fermer</button>*/
/* */
/*  <link rel="stylesheet" href="{{ asset('bundles/fullcalendar/css/fullcalendar/fullcalendar.min.css') }}" />*/
/*  <script type="text/javascript" src="{{ asset('bundles/fullcalendar/js/fullcalendar/lib/jquery.min.js') }}"></script>*/
/*  <script type="text/javascript" src="{{ asset('bundles/fullcalendar/js/fullcalendar/lib/moment.min.js') }}"></script>*/
/*  <script type="text/javascript" src="{{ asset('bundles/fullcalendar/js/fullcalendar/fullcalendar.min.js') }}"></script>*/
/*  <script type="text/javascript" src="{{ asset('bundles/fullcalendar/js/fullcalendar/fullcalendar.default-settings.js') }}"></script>*/
/*  </dialog>*/
/* */
/*  <dialog id="addEvt">   {{ form(eventform)}}  </dialog>*/
/* */
/*  <menu>*/
/*   <img id="ag" src="img/agenda.png" width="80px" height="80px" align="left">*/
/*  	<img id="add" src="img/PlusBleu.png" width="160px" height="85px" align="right">*/
/*  </menu>*/
/* */
/* */
/* <div id="bodyevt">*/
/*   <table width="80%" border="1">*/
/*    */
/*     <tr>*/
/*     <td>Nom de l'évènement</td>*/
/*     <td>Description/Type</td>*/
/*     <td>Date de Début</td>*/
/*     <td>Date de Fin</td>*/
/*     <td>Heure de Début</td>*/
/*     <td>Heure de Fin</td>*/
/*     <td>Lieu</td>*/
/*     <td>Salle</td>*/
/*     </tr>*/
/*      */
/* */
/* */
/*     </table>*/
/*     */
/* </div>*/
/*  </nav>*/
/* */
/* */
/*  	<script>*/
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
/*   (function(){*/
/*     var updateButton = document.getElementById('ag');*/
/*     var cancelButton = document.getElementById('Fermer')*/
/* */
/*     //Update bouton ouvrir la boite de dialogue*/
/*     updateButton.addEventListener('click', function(){*/
/*       document.getElementById('Agenda').showModal();*/
/*     });*/
/* */
/*     //Bouton pour fermer la boite de dialogue*/
/*     cancelButton.addEventListener('click', function(){*/
/*       document.getElementById('Agenda').close();*/
/*     });*/
/*   })();*/
/* */
/* */
/*     */
/* */
/* </script>*/
/* */
/* */
/* <style type="text/css">*/
/* table{ margin-left: 9%; position: absolute; }*/
/* img#add { margin-right: 2%; }*/
/* */
/* input{*/
/*   border-radius: 5px;*/
/*   margin-left: 2%;*/
/*   margin-right: 2%;*/
/*   float : right;*/
/*   */
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
/* dialog#addEvt{ width: 20%;  }*/
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
