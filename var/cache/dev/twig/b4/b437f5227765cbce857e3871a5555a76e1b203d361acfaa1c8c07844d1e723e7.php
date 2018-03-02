<?php

/* default/myspace.html.twig */
class __TwigTemplate_479680568f060c3e52443b3c82ea146bd8a50ee924709a07db6f1b82eae2fd20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("menu.html.twig", "default/myspace.html.twig", 1);
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
        $__internal_6acbdf8a3cd6bff12f84f3c61c642b5077c2d7fa33b9e1dddb2957d8fb4db253 = $this->env->getExtension("native_profiler");
        $__internal_6acbdf8a3cd6bff12f84f3c61c642b5077c2d7fa33b9e1dddb2957d8fb4db253->enter($__internal_6acbdf8a3cd6bff12f84f3c61c642b5077c2d7fa33b9e1dddb2957d8fb4db253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/myspace.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6acbdf8a3cd6bff12f84f3c61c642b5077c2d7fa33b9e1dddb2957d8fb4db253->leave($__internal_6acbdf8a3cd6bff12f84f3c61c642b5077c2d7fa33b9e1dddb2957d8fb4db253_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7fab35b98640edd2a6273df99747fa15ff51f8c7b382349a7d4f3027bbddaf94 = $this->env->getExtension("native_profiler");
        $__internal_7fab35b98640edd2a6273df99747fa15ff51f8c7b382349a7d4f3027bbddaf94->enter($__internal_7fab35b98640edd2a6273df99747fa15ff51f8c7b382349a7d4f3027bbddaf94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mon espace !";
        
        $__internal_7fab35b98640edd2a6273df99747fa15ff51f8c7b382349a7d4f3027bbddaf94->leave($__internal_7fab35b98640edd2a6273df99747fa15ff51f8c7b382349a7d4f3027bbddaf94_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3de490c04e50b66b176e72600c823d9f819019d7eec19c6b513ad8544231c11 = $this->env->getExtension("native_profiler");
        $__internal_a3de490c04e50b66b176e72600c823d9f819019d7eec19c6b513ad8544231c11->enter($__internal_a3de490c04e50b66b176e72600c823d9f819019d7eec19c6b513ad8544231c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "  
    
        
            <h4> Application : </h4>
             
        <header> 
         <div id=\"g\"> <h4>Informatique :</h4>
           <p id=\"p1\" style=\"background-color:black; color:white;\"><a href=\"\"> NAS </a></p> 
           <p id=\"p1\" style=\"background-color:#7a5333; color:white;\"><a href=\"https://github.com\"> GitHub </a></p>
           <p id=\"p1\" style=\"background-color:#5f0686; color:white;\"><a href=\"https://www.ocs.fr\"> OCS </a></p>
         </div>
           <hr>
         <div id=\"g\"> 
           <span>Office :</span>
           <p id=\"p1\" style=\"background-color:purple; color:white;\"><a href=\"https://www.onenote.com\"> OneNote </a></p>
           <p id=\"p1\" style=\"background-color:#112c8a; color:white;\"><a href=\"https://login.live.com>\"> Outlook </a></p>
             </div>
           <hr>
         <div id=\"g\">
           <span>Gestion d'incidence :</span>
           <p id=\"p2\" style=\"background-color:blue; color:white;\"><a href=\"http://glpi-project.org\"> GLPI </a></p>
           <p id=\"p2\" style=\"background-color:green; color:white;\"><a href=\"https://www.centreon.com\"> Centréon </a></p>
           <p id=\"p2\" style=\"background-color:orange; color:white;\"> Application </p>
           <p id=\"p2\" style=\"background-color:pink; color:white;\"><a href=\"https://www.mailinblack.com\"> Mail In Black</a></p>
             </div>
          <hr>
         <div id=\"g\">
           <h4>Ressources Humaines :</h4>
           <p id=\"p2\" style=\"background-color:red; color:white;\"><a href=\"https://www.horoquartz.fr\"> Horoquartz </a></p>
             </div>
        </header>
      
      

<style>

header{ display: flex;     flex-wrap: wrap;  }

h4{ margin-left: 10px;
    font-family: 'BlackChancery';
    text-decoration: underline;
    text-decoration: bold;
    font-size : 18px;
}
p{
  margin-left: 25px;
  margin-right : 25px;
  justify-content: center;
  height : 60px;
      display: block;
  width : 100px;
  border-radius: 15px;
  text-align: center;
  font-family: cursive;
  line-height: 60px;


}

a{  text-decoration: none;     color: white;  }
div#g{     padding-top:0%; padding-bottom: 0%; padding-left: 5%; padding-right: 6%; }
</style>
";
        
        $__internal_a3de490c04e50b66b176e72600c823d9f819019d7eec19c6b513ad8544231c11->leave($__internal_a3de490c04e50b66b176e72600c823d9f819019d7eec19c6b513ad8544231c11_prof);

    }

    public function getTemplateName()
    {
        return "default/myspace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'menu.html.twig' %}*/
/* */
/* {% block title %}Mon espace !{% endblock %}*/
/* {% block body %}  */
/*     */
/*         */
/*             <h4> Application : </h4>*/
/*              */
/*         <header> */
/*          <div id="g"> <h4>Informatique :</h4>*/
/*            <p id="p1" style="background-color:black; color:white;"><a href=""> NAS </a></p> */
/*            <p id="p1" style="background-color:#7a5333; color:white;"><a href="https://github.com"> GitHub </a></p>*/
/*            <p id="p1" style="background-color:#5f0686; color:white;"><a href="https://www.ocs.fr"> OCS </a></p>*/
/*          </div>*/
/*            <hr>*/
/*          <div id="g"> */
/*            <span>Office :</span>*/
/*            <p id="p1" style="background-color:purple; color:white;"><a href="https://www.onenote.com"> OneNote </a></p>*/
/*            <p id="p1" style="background-color:#112c8a; color:white;"><a href="https://login.live.com>"> Outlook </a></p>*/
/*              </div>*/
/*            <hr>*/
/*          <div id="g">*/
/*            <span>Gestion d'incidence :</span>*/
/*            <p id="p2" style="background-color:blue; color:white;"><a href="http://glpi-project.org"> GLPI </a></p>*/
/*            <p id="p2" style="background-color:green; color:white;"><a href="https://www.centreon.com"> Centréon </a></p>*/
/*            <p id="p2" style="background-color:orange; color:white;"> Application </p>*/
/*            <p id="p2" style="background-color:pink; color:white;"><a href="https://www.mailinblack.com"> Mail In Black</a></p>*/
/*              </div>*/
/*           <hr>*/
/*          <div id="g">*/
/*            <h4>Ressources Humaines :</h4>*/
/*            <p id="p2" style="background-color:red; color:white;"><a href="https://www.horoquartz.fr"> Horoquartz </a></p>*/
/*              </div>*/
/*         </header>*/
/*       */
/*       */
/* */
/* <style>*/
/* */
/* header{ display: flex;     flex-wrap: wrap;  }*/
/* */
/* h4{ margin-left: 10px;*/
/*     font-family: 'BlackChancery';*/
/*     text-decoration: underline;*/
/*     text-decoration: bold;*/
/*     font-size : 18px;*/
/* }*/
/* p{*/
/*   margin-left: 25px;*/
/*   margin-right : 25px;*/
/*   justify-content: center;*/
/*   height : 60px;*/
/*       display: block;*/
/*   width : 100px;*/
/*   border-radius: 15px;*/
/*   text-align: center;*/
/*   font-family: cursive;*/
/*   line-height: 60px;*/
/* */
/* */
/* }*/
/* */
/* a{  text-decoration: none;     color: white;  }*/
/* div#g{     padding-top:0%; padding-bottom: 0%; padding-left: 5%; padding-right: 6%; }*/
/* </style>*/
/* {% endblock %}*/
