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
        $__internal_f2f91e766c9f5b53570ab9b2953b85c0a39e83667cdc57a280844924b96e8300 = $this->env->getExtension("native_profiler");
        $__internal_f2f91e766c9f5b53570ab9b2953b85c0a39e83667cdc57a280844924b96e8300->enter($__internal_f2f91e766c9f5b53570ab9b2953b85c0a39e83667cdc57a280844924b96e8300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/events.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2f91e766c9f5b53570ab9b2953b85c0a39e83667cdc57a280844924b96e8300->leave($__internal_f2f91e766c9f5b53570ab9b2953b85c0a39e83667cdc57a280844924b96e8300_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5bc7f2f0630fafdd03f0e31c77e3a059e0f67840f2b8d95b53a2147b9dbff7cd = $this->env->getExtension("native_profiler");
        $__internal_5bc7f2f0630fafdd03f0e31c77e3a059e0f67840f2b8d95b53a2147b9dbff7cd->enter($__internal_5bc7f2f0630fafdd03f0e31c77e3a059e0f67840f2b8d95b53a2147b9dbff7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Evènement !";
        
        $__internal_5bc7f2f0630fafdd03f0e31c77e3a059e0f67840f2b8d95b53a2147b9dbff7cd->leave($__internal_5bc7f2f0630fafdd03f0e31c77e3a059e0f67840f2b8d95b53a2147b9dbff7cd_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_fed9e62b57c4062ab8fe8b80cbff5c79d4375ae7a560d0f271c4294421c35498 = $this->env->getExtension("native_profiler");
        $__internal_fed9e62b57c4062ab8fe8b80cbff5c79d4375ae7a560d0f271c4294421c35498->enter($__internal_fed9e62b57c4062ab8fe8b80cbff5c79d4375ae7a560d0f271c4294421c35498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "  


 
<div class=\"js-page\">
  <div id=\"dialog\" role=\"dialog\" aria-labelledby=\"dialog-title\" aria-describedby=\"dialog-desc\" aria-modal=\"true\" aria-hidden=\"true\" tabindex=\"-1\" class=\"c-dialog\">
    <div role=\"document\" class=\"c-dialog_box\">
      <img src=\"img/supp.png\" width=\"30px\" height=\"30px\" id=\"close\" type=\"button\" aria-label=\"Fermer\" title=\"Fermer cette fenêtre modale\" data-dismiss=\"dialog\"></img>
       <object  width=\"500\" height=\"500\" type=\"text/html\" data=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("editEvt");
        echo "\" ></object>
         <button  id=\"form_Fermer\" type=\"button\" aria-label=\"Fermer\" title=\"Fermer cette fenêtre modale\" data-dismiss=\"dialog\">Annuler</button>

         </object>
    </div>
  </div>
</div>


<nav>
  <dialog id=\"addEvt\">   ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["eventform"]) ? $context["eventform"] : $this->getContext($context, "eventform")), 'form');
        echo "  </dialog>
 <menu>
   <a id=\"cal\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("calendrier");
        echo "\"><img id=\"ag\" src=\"img/agenda.png\" width=\"80px\" height=\"80px\" align=\"left\"></a>
 \t<img id=\"add\" src=\"img/PlusBleu0.png\" width=\"85px\" height=\"85px\" align=\"right\">
  <img id=\"fresh\" onclick=\"refresh()\" src=\"img/refresh.png\" width=\"85px\" height=\"85px\" align=\"right\">
</menu>


<div id=\"bodyevt\">
  <table width=\"80%\" border=\"1\"> 
    <tr id=\"tit\">
    <td align=\"center\" width=\"15%\"><b>Nom de l'évènement</b></td>
    <td align=\"center\" width=\"15%\"><b>Description/Type</b></td>
    <td align=\"center\" width=\"10%\"><b>Date de Début</b></td>
    <td align=\"center\" width=\"10%\"><b>Date de Fin</b></td>
    <td align=\"center\" width=\"12%\"><b>Heure de Début</b></td>
    <td align=\"center\" width=\"10%\"><b>Heure de Fin</b></td>
    <td align=\"center\" width=\"10%\"><b>Lieu</b></td>
    <td align=\"center\" width=\"10%\"><b>Salle</b></td>
    <td align=\"center\" width=\"6%\" colspan=2><b>Outils</b></td> 
    </tr>
      ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")));
        foreach ($context['_seq'] as $context["_key"] => $context["evt"]) {
            // line 44
            echo "       ";
            $context["fooo"] = twig_split_filter($this->env, $this->getAttribute($context["evt"], "idEvent", array()), ".");
            // line 45
            echo "    <tr>
      <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["evt"], "nomevt", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["evt"], "type", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evt"], "jourD", array()), "d-m-Y"), "html", null, true);
            echo "</td>
      <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evt"], "jourF", array()), "d-m-Y"), "html", null, true);
            echo "</td>
      <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evt"], "hDebut", array()), "H:i:s"), "html", null, true);
            echo "</td>
      <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evt"], "hFin", array()), "H:i:s"), "html", null, true);
            echo "</td>
      <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["evt"], "lieu", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["evt"], "idSr", array()), "nomsr", array()), "html", null, true);
            echo "</td>
      <td align=\"center\">
        <main class=\"js-document\">
             <img id=\"editEvt\" src=\"img/modif.png\" width=\"30px\" height=\"30px\" align=\"center\" aria-haspopup=\"dialog\" aria-controls=\"dialog\">
          </main>
       </td>
      <td align=\"center\">
          <a href=\"/deleteEvt?idEvt=";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["evt"], "idEvent", array()), "html", null, true);
            echo "\"><img src=\"img/poubelles.png\" width=\"30px\" height=\"30px\" ></a>
      </td>
    </tr>
 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo " 
    </table>
  
</div>
 </nav>

 <link rel=\"stylesheet\" href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fullcalendar/css/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\" />
 <script type=\"text/javascript\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/lib/jquery.min.js"), "html", null, true);
        echo "\"></script>
 <script type=\"text/javascript\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/lib/moment.min.js"), "html", null, true);
        echo "\"></script>
 <script type=\"text/javascript\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
 <script type=\"text/javascript\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/fullcalendar.default-settings.js"), "html", null, true);
        echo "\"></script>

 \t  <script type=\"text/javascript\">
    const triggers = document.querySelectorAll('[aria-haspopup=\"dialog\"]');
    const doc = document.querySelector('.js-document');
    const focusableElementsArray = [
      '[href]',
      'button:not([disabled])',
      'input:not([disabled])',
      'select:not([disabled])',
      'textarea:not([disabled])',
      '[tabindex]:not([tabindex=\"-1\"])',
    ];
    const keyCodes = {
      tab: 9,
      enter: 13,
      escape: 27,
    };

    const open = function (dialog) {
      const focusableElements = dialog.querySelectorAll(focusableElementsArray);
      const firstFocusableElement = focusableElements[0];
      const lastFocusableElement = focusableElements[focusableElements.length - 1];

      dialog.setAttribute('aria-hidden', false);
      doc.setAttribute('aria-hidden', true);

      // return if no focusable element
      if (!firstFocusableElement) {
        return;
      }

      window.setTimeout(() => {
        firstFocusableElement.focus();

        // trapping focus inside the dialog
        focusableElements.forEach((focusableElement) => {
          if (focusableElement.addEventListener) {
            focusableElement.addEventListener('keydown', (event) => {
              const tab = event.which === keyCodes.tab;

              if (!tab) {
                return;
              }

              if (event.shiftKey) {
                if (event.target === firstFocusableElement) { // shift + tab
                  event.preventDefault();

                  lastFocusableElement.focus();
                }
              } else if (event.target === lastFocusableElement) { // tab
                event.preventDefault();

                firstFocusableElement.focus();
              }
            });
          }
        });
      }, 100);
    };

    const close = function (dialog, trigger) {
      dialog.setAttribute('aria-hidden', true);
      doc.setAttribute('aria-hidden', false);

      // restoring focus
      trigger.focus();
    };

    triggers.forEach((trigger) => {
      const dialog = document.getElementById(trigger.getAttribute('aria-controls'));
      const dismissTriggers = dialog.querySelectorAll('[data-dismiss]');

      // open dialog
      trigger.addEventListener('click', (event) => {
        event.preventDefault();

        open(dialog);
      });

      trigger.addEventListener('keydown', (event) => {
        if (event.which === keyCodes.enter) {
          event.preventDefault();

          open(dialog);
        }  
      });

      // close dialog
      dialog.addEventListener('keydown', (event) => {
        if (event.which === keyCodes.escape) {
          close(dialog, trigger);
        }      
      });

      dismissTriggers.forEach((dismissTrigger) => {
        const dismissDialog = document.getElementById(dismissTrigger.dataset.dismiss);

        dismissTrigger.addEventListener('click', (event) => {
          event.preventDefault();

          close(dismissDialog, trigger);
        });
      });

      window.addEventListener('click', (event) => {
        if (event.target === dialog) {
          close(dialog, trigger);
        }
      }); 
    });
   

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


  //Rafraichissement
function refresh(){
    location.reload();
}



</script>


<style type=\"text/css\">
div#bodyevt{  height:483px; overflow: scroll; }
table{ margin-left: 9%; overflow: scroll;}
tr#tit{ background: -webkit-linear-gradient(bottom , #badeec 0pt, #bfdbe6 50%, #bfdbe6 51%, #f7f2d0 100%) repeat scroll 0 0 transparent; }
img#add { margin-right: 2.5%; }
img#fresh {     margin-top: 8%;    margin-right: -5%; }
img#close{

    position: fixed;
    left: 60.5%;
    top: 38.5%;
    font-family:  cursive;
    font-size: 25px;
    padding:  auto;
    /* padding: 1%; */
    border-style:  none;
    background:  -webkit-linear-gradient(bottom , #e29494 0pt, #f60000 50%, #ff1d1d 51%, #eca0a0 100%) repeat scroll 0 0 #19191900;
    border-radius: 36%;

}

input{
  border-radius: 5px;
  margin-left: -50%;
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

button#form_Fermer{
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
.c-dialog {
  position: fixed;
  z-index: 1;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  display: flex;
  
    margin: auto;
  background-color: rgba(black, .75);
 
}


.c-dialog_box { 

    margin: auto;
    padding: 0px;
    border: 7px double #000;
  background-color:#eceeef;
    -webkit-background-clip: padding-box;
        -moz-background-clip: padding;
        background-clip: padding-box;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 5%;
        -webkit-box-shadow: 0 4px 12px rgba(0, 0, 0, .4),inset 0 1px 0 rgba(255, 255, 255, .5);
        -moz-box-shadow: 0 4px 12px rgba(0, 0, 0, .4),inset 0 1px 0 rgba(255, 255, 255, .5);
        box-shadow: 0 4px 12px rgba(0, 0, 0, .4),inset 0 1px 0 rgba(255, 255, 255, .5);      

  
}


.c-dialog[aria-hidden=\"true\"] {
  visibility: hidden;
  opacity: 0;
}
</style> 

 ";
        
        $__internal_fed9e62b57c4062ab8fe8b80cbff5c79d4375ae7a560d0f271c4294421c35498->leave($__internal_fed9e62b57c4062ab8fe8b80cbff5c79d4375ae7a560d0f271c4294421c35498_prof);

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
        return array (  185 => 74,  181 => 73,  177 => 72,  173 => 71,  169 => 70,  161 => 64,  150 => 60,  140 => 53,  136 => 52,  132 => 51,  128 => 50,  124 => 49,  120 => 48,  116 => 47,  112 => 46,  109 => 45,  106 => 44,  102 => 43,  80 => 24,  75 => 22,  62 => 12,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'menu.html.twig' %}*/
/* */
/* {% block title %}Evènement !{% endblock %}*/
/* {% block body %}  */
/* */
/* */
/*  */
/* <div class="js-page">*/
/*   <div id="dialog" role="dialog" aria-labelledby="dialog-title" aria-describedby="dialog-desc" aria-modal="true" aria-hidden="true" tabindex="-1" class="c-dialog">*/
/*     <div role="document" class="c-dialog_box">*/
/*       <img src="img/supp.png" width="30px" height="30px" id="close" type="button" aria-label="Fermer" title="Fermer cette fenêtre modale" data-dismiss="dialog"></img>*/
/*        <object  width="500" height="500" type="text/html" data="{{path('editEvt')}}" ></object>*/
/*          <button  id="form_Fermer" type="button" aria-label="Fermer" title="Fermer cette fenêtre modale" data-dismiss="dialog">Annuler</button>*/
/* */
/*          </object>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* */
/* <nav>*/
/*   <dialog id="addEvt">   {{ form(eventform)}}  </dialog>*/
/*  <menu>*/
/*    <a id="cal" href="{{path('calendrier')}}"><img id="ag" src="img/agenda.png" width="80px" height="80px" align="left"></a>*/
/*  	<img id="add" src="img/PlusBleu0.png" width="85px" height="85px" align="right">*/
/*   <img id="fresh" onclick="refresh()" src="img/refresh.png" width="85px" height="85px" align="right">*/
/* </menu>*/
/* */
/* */
/* <div id="bodyevt">*/
/*   <table width="80%" border="1"> */
/*     <tr id="tit">*/
/*     <td align="center" width="15%"><b>Nom de l'évènement</b></td>*/
/*     <td align="center" width="15%"><b>Description/Type</b></td>*/
/*     <td align="center" width="10%"><b>Date de Début</b></td>*/
/*     <td align="center" width="10%"><b>Date de Fin</b></td>*/
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
/*       <td align="center">*/
/*         <main class="js-document">*/
/*              <img id="editEvt" src="img/modif.png" width="30px" height="30px" align="center" aria-haspopup="dialog" aria-controls="dialog">*/
/*           </main>*/
/*        </td>*/
/*       <td align="center">*/
/*           <a href="/deleteEvt?idEvt={{evt.idEvent}}"><img src="img/poubelles.png" width="30px" height="30px" ></a>*/
/*       </td>*/
/*     </tr>*/
/*  */
/*     {% endfor %} */
/*     </table>*/
/*   */
/* </div>*/
/*  </nav>*/
/* */
/*  <link rel="stylesheet" href="{{ asset('bundles/fullcalendar/css/fullcalendar/fullcalendar.min.css') }}" />*/
/*  <script type="text/javascript" src="{{ asset('bundles/fullcalendar/js/fullcalendar/lib/jquery.min.js') }}"></script>*/
/*  <script type="text/javascript" src="{{ asset('bundles/fullcalendar/js/fullcalendar/lib/moment.min.js') }}"></script>*/
/*  <script type="text/javascript" src="{{ asset('bundles/fullcalendar/js/fullcalendar/fullcalendar.min.js') }}"></script>*/
/*  <script type="text/javascript" src="{{ asset('bundles/fullcalendar/js/fullcalendar/fullcalendar.default-settings.js') }}"></script>*/
/* */
/*  	  <script type="text/javascript">*/
/*     const triggers = document.querySelectorAll('[aria-haspopup="dialog"]');*/
/*     const doc = document.querySelector('.js-document');*/
/*     const focusableElementsArray = [*/
/*       '[href]',*/
/*       'button:not([disabled])',*/
/*       'input:not([disabled])',*/
/*       'select:not([disabled])',*/
/*       'textarea:not([disabled])',*/
/*       '[tabindex]:not([tabindex="-1"])',*/
/*     ];*/
/*     const keyCodes = {*/
/*       tab: 9,*/
/*       enter: 13,*/
/*       escape: 27,*/
/*     };*/
/* */
/*     const open = function (dialog) {*/
/*       const focusableElements = dialog.querySelectorAll(focusableElementsArray);*/
/*       const firstFocusableElement = focusableElements[0];*/
/*       const lastFocusableElement = focusableElements[focusableElements.length - 1];*/
/* */
/*       dialog.setAttribute('aria-hidden', false);*/
/*       doc.setAttribute('aria-hidden', true);*/
/* */
/*       // return if no focusable element*/
/*       if (!firstFocusableElement) {*/
/*         return;*/
/*       }*/
/* */
/*       window.setTimeout(() => {*/
/*         firstFocusableElement.focus();*/
/* */
/*         // trapping focus inside the dialog*/
/*         focusableElements.forEach((focusableElement) => {*/
/*           if (focusableElement.addEventListener) {*/
/*             focusableElement.addEventListener('keydown', (event) => {*/
/*               const tab = event.which === keyCodes.tab;*/
/* */
/*               if (!tab) {*/
/*                 return;*/
/*               }*/
/* */
/*               if (event.shiftKey) {*/
/*                 if (event.target === firstFocusableElement) { // shift + tab*/
/*                   event.preventDefault();*/
/* */
/*                   lastFocusableElement.focus();*/
/*                 }*/
/*               } else if (event.target === lastFocusableElement) { // tab*/
/*                 event.preventDefault();*/
/* */
/*                 firstFocusableElement.focus();*/
/*               }*/
/*             });*/
/*           }*/
/*         });*/
/*       }, 100);*/
/*     };*/
/* */
/*     const close = function (dialog, trigger) {*/
/*       dialog.setAttribute('aria-hidden', true);*/
/*       doc.setAttribute('aria-hidden', false);*/
/* */
/*       // restoring focus*/
/*       trigger.focus();*/
/*     };*/
/* */
/*     triggers.forEach((trigger) => {*/
/*       const dialog = document.getElementById(trigger.getAttribute('aria-controls'));*/
/*       const dismissTriggers = dialog.querySelectorAll('[data-dismiss]');*/
/* */
/*       // open dialog*/
/*       trigger.addEventListener('click', (event) => {*/
/*         event.preventDefault();*/
/* */
/*         open(dialog);*/
/*       });*/
/* */
/*       trigger.addEventListener('keydown', (event) => {*/
/*         if (event.which === keyCodes.enter) {*/
/*           event.preventDefault();*/
/* */
/*           open(dialog);*/
/*         }  */
/*       });*/
/* */
/*       // close dialog*/
/*       dialog.addEventListener('keydown', (event) => {*/
/*         if (event.which === keyCodes.escape) {*/
/*           close(dialog, trigger);*/
/*         }      */
/*       });*/
/* */
/*       dismissTriggers.forEach((dismissTrigger) => {*/
/*         const dismissDialog = document.getElementById(dismissTrigger.dataset.dismiss);*/
/* */
/*         dismissTrigger.addEventListener('click', (event) => {*/
/*           event.preventDefault();*/
/* */
/*           close(dismissDialog, trigger);*/
/*         });*/
/*       });*/
/* */
/*       window.addEventListener('click', (event) => {*/
/*         if (event.target === dialog) {*/
/*           close(dialog, trigger);*/
/*         }*/
/*       }); */
/*     });*/
/*    */
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
/* div#bodyevt{  height:483px; overflow: scroll; }*/
/* table{ margin-left: 9%; overflow: scroll;}*/
/* tr#tit{ background: -webkit-linear-gradient(bottom , #badeec 0pt, #bfdbe6 50%, #bfdbe6 51%, #f7f2d0 100%) repeat scroll 0 0 transparent; }*/
/* img#add { margin-right: 2.5%; }*/
/* img#fresh {     margin-top: 8%;    margin-right: -5%; }*/
/* img#close{*/
/* */
/*     position: fixed;*/
/*     left: 60.5%;*/
/*     top: 38.5%;*/
/*     font-family:  cursive;*/
/*     font-size: 25px;*/
/*     padding:  auto;*/
/*     /* padding: 1%; *//* */
/*     border-style:  none;*/
/*     background:  -webkit-linear-gradient(bottom , #e29494 0pt, #f60000 50%, #ff1d1d 51%, #eca0a0 100%) repeat scroll 0 0 #19191900;*/
/*     border-radius: 36%;*/
/* */
/* }*/
/* */
/* input{*/
/*   border-radius: 5px;*/
/*   margin-left: -50%;*/
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
/* */
/* button#form_Fermer{*/
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
/* */
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
/* .c-dialog {*/
/*   position: fixed;*/
/*   z-index: 1;*/
/*   top: 0;*/
/*   right: 0;*/
/*   bottom: 0;*/
/*   left: 0;*/
/*   display: flex;*/
/*   */
/*     margin: auto;*/
/*   background-color: rgba(black, .75);*/
/*  */
/* }*/
/* */
/* */
/* .c-dialog_box { */
/* */
/*     margin: auto;*/
/*     padding: 0px;*/
/*     border: 7px double #000;*/
/*   background-color:#eceeef;*/
/*     -webkit-background-clip: padding-box;*/
/*         -moz-background-clip: padding;*/
/*         background-clip: padding-box;*/
/*         -webkit-border-radius: 10px;*/
/*         -moz-border-radius: 10px;*/
/*         border-radius: 5%;*/
/*         -webkit-box-shadow: 0 4px 12px rgba(0, 0, 0, .4),inset 0 1px 0 rgba(255, 255, 255, .5);*/
/*         -moz-box-shadow: 0 4px 12px rgba(0, 0, 0, .4),inset 0 1px 0 rgba(255, 255, 255, .5);*/
/*         box-shadow: 0 4px 12px rgba(0, 0, 0, .4),inset 0 1px 0 rgba(255, 255, 255, .5);      */
/* */
/*   */
/* }*/
/* */
/* */
/* .c-dialog[aria-hidden="true"] {*/
/*   visibility: hidden;*/
/*   opacity: 0;*/
/* }*/
/* </style> */
/* */
/*  {% endblock %}*/
