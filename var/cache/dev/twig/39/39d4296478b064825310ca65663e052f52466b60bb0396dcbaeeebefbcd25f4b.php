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
        $__internal_23194be87145f5f1f52d5f2f05836820f203dd0db7a31ac849df2eba6387672f = $this->env->getExtension("native_profiler");
        $__internal_23194be87145f5f1f52d5f2f05836820f203dd0db7a31ac849df2eba6387672f->enter($__internal_23194be87145f5f1f52d5f2f05836820f203dd0db7a31ac849df2eba6387672f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/docs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23194be87145f5f1f52d5f2f05836820f203dd0db7a31ac849df2eba6387672f->leave($__internal_23194be87145f5f1f52d5f2f05836820f203dd0db7a31ac849df2eba6387672f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7cf241c1297e64bdb91615006e6616c7fcd391f5ba310b58599d73770b2c13ae = $this->env->getExtension("native_profiler");
        $__internal_7cf241c1297e64bdb91615006e6616c7fcd391f5ba310b58599d73770b2c13ae->enter($__internal_7cf241c1297e64bdb91615006e6616c7fcd391f5ba310b58599d73770b2c13ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Document !";
        
        $__internal_7cf241c1297e64bdb91615006e6616c7fcd391f5ba310b58599d73770b2c13ae->leave($__internal_7cf241c1297e64bdb91615006e6616c7fcd391f5ba310b58599d73770b2c13ae_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fd6ed84ad2ba0903976e1a04f08ac88e14f44f5ae07f7d25ad3abf30e2d7a1e = $this->env->getExtension("native_profiler");
        $__internal_6fd6ed84ad2ba0903976e1a04f08ac88e14f44f5ae07f7d25ad3abf30e2d7a1e->enter($__internal_6fd6ed84ad2ba0903976e1a04f08ac88e14f44f5ae07f7d25ad3abf30e2d7a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "  

 <dialog id=\"addDoc\">   ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["docsform"]) ? $context["docsform"] : $this->getContext($context, "docsform")), 'form');
        echo "   </dialog>
 <menu>
    <img id=\"add\" src=\"img/PlusBleu0.png\" width=\"85px\" height=\"85px\" align=\"right\">
    <img id=\"fresh\" onclick=\"refresh()\" src=\"img/refresh.png\" width=\"85px\" height=\"85px\" align=\"right\">
 </menu>

<div id=\"body\">
\t<table width=\"80%\" border=\"1\">
   <center><font color=\"red\"><b>Veuillez déposer vos documents ou images de type : PDF, PNG, JPG, JPEG, TXT, SQL ! <b></font></center>
    <tr>
    <td align=\"center\" width=\"20%\"><b>Nom du Fichier</b></td>
    <td align=\"center\" width=\"20%\"><b>Type de Fichier</b></td>
    <td align=\"center\" width=\"10%\"><b>Vue</b></td>
    <td align=\"center\" width=\"5%\" ><b>Supprimer</b></td>
    </tr>
     
\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")));
        foreach ($context['_seq'] as $context["_key"] => $context["undoc"]) {
            // line 23
            echo "\t      ";
            $context["foo"] = twig_split_filter($this->env, $this->getAttribute($context["undoc"], "fileDoc", array()), ".");
            // line 24
            echo "        <tr>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")), 1, array(), "array"), "html", null, true);
            echo "</td>
        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["undoc"], "typeDoc", array()), "html", null, true);
            echo "</td>
        <td><a href=\"../uploads/documents/";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["undoc"], "fileDoc", array()), "html", null, true);
            echo "\" target=\"_blank\">Voir le Fichier</a></td>
        <td id=\"suppDoc\" align=\"center\"> <a href=\"/delete?id=";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["undoc"], "idDoc", array()), "html", null, true);
            echo "\"><img id=\"supp\" src=\"img/supp.png\" width=\"30px\" height=\"30px\" ></a></td>
        </tr>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['undoc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
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
function refresh(){
    location.reload();
}
</script>
<style type=\"text/css\">
b{ text-align: center; }
img#add{ margin-right: 3%; }
img#fresh {     margin-top: 8%;    margin-right: -5%; }
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
        
        $__internal_6fd6ed84ad2ba0903976e1a04f08ac88e14f44f5ae07f7d25ad3abf30e2d7a1e->leave($__internal_6fd6ed84ad2ba0903976e1a04f08ac88e14f44f5ae07f7d25ad3abf30e2d7a1e_prof);

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
        return array (  106 => 30,  97 => 28,  93 => 27,  89 => 26,  85 => 25,  82 => 24,  79 => 23,  75 => 22,  56 => 6,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'menu.html.twig' %}*/
/* */
/* {% block title %}Document !{% endblock %}*/
/* {% block body %}  */
/* */
/*  <dialog id="addDoc">   {{ form(docsform)}}   </dialog>*/
/*  <menu>*/
/*     <img id="add" src="img/PlusBleu0.png" width="85px" height="85px" align="right">*/
/*     <img id="fresh" onclick="refresh()" src="img/refresh.png" width="85px" height="85px" align="right">*/
/*  </menu>*/
/* */
/* <div id="body">*/
/* 	<table width="80%" border="1">*/
/*    <center><font color="red"><b>Veuillez déposer vos documents ou images de type : PDF, PNG, JPG, JPEG, TXT, SQL ! <b></font></center>*/
/*     <tr>*/
/*     <td align="center" width="20%"><b>Nom du Fichier</b></td>*/
/*     <td align="center" width="20%"><b>Type de Fichier</b></td>*/
/*     <td align="center" width="10%"><b>Vue</b></td>*/
/*     <td align="center" width="5%" ><b>Supprimer</b></td>*/
/*     </tr>*/
/*      */
/* 	{% for undoc in liste %}*/
/* 	      {% set foo = undoc.fileDoc|split('.') %}*/
/*         <tr>*/
/*         <td>{{foo[1] }}</td>*/
/*         <td>{{ undoc.typeDoc }}</td>*/
/*         <td><a href="../uploads/documents/{{ undoc.fileDoc }}" target="_blank">Voir le Fichier</a></td>*/
/*         <td id="suppDoc" align="center"> <a href="/delete?id={{undoc.idDoc}}"><img id="supp" src="img/supp.png" width="30px" height="30px" ></a></td>*/
/*         </tr>*/
/*    {% endfor %} */
/* */
/*     </table>*/
/*     */
/* </div>*/
/* */
/*     <script> */
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
/* function refresh(){*/
/*     location.reload();*/
/* }*/
/* </script>*/
/* <style type="text/css">*/
/* b{ text-align: center; }*/
/* img#add{ margin-right: 3%; }*/
/* img#fresh {     margin-top: 8%;    margin-right: -5%; }*/
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
