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
        $__internal_bc06d963bcbb46f343bf985796124594466dd96fe5fe233db1ea338334a32400 = $this->env->getExtension("native_profiler");
        $__internal_bc06d963bcbb46f343bf985796124594466dd96fe5fe233db1ea338334a32400->enter($__internal_bc06d963bcbb46f343bf985796124594466dd96fe5fe233db1ea338334a32400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/myspace.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc06d963bcbb46f343bf985796124594466dd96fe5fe233db1ea338334a32400->leave($__internal_bc06d963bcbb46f343bf985796124594466dd96fe5fe233db1ea338334a32400_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3153c67242d893e8c29992558f6c0f0cfc67bfbedeb2e9d72fec707104509998 = $this->env->getExtension("native_profiler");
        $__internal_3153c67242d893e8c29992558f6c0f0cfc67bfbedeb2e9d72fec707104509998->enter($__internal_3153c67242d893e8c29992558f6c0f0cfc67bfbedeb2e9d72fec707104509998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mon espace !";
        
        $__internal_3153c67242d893e8c29992558f6c0f0cfc67bfbedeb2e9d72fec707104509998->leave($__internal_3153c67242d893e8c29992558f6c0f0cfc67bfbedeb2e9d72fec707104509998_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9058e5cdf5b957c403ab989a265ea7983a405263787ac12b178d116e1ccfce2 = $this->env->getExtension("native_profiler");
        $__internal_b9058e5cdf5b957c403ab989a265ea7983a405263787ac12b178d116e1ccfce2->enter($__internal_b9058e5cdf5b957c403ab989a265ea7983a405263787ac12b178d116e1ccfce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "  
    
        
            <h4> Application : </h4>
        <header> 
           <p id=\"p1\" style=\"background-color:black; color:white;\"><a href=\"\"> NAS </a></p> 
           <p id=\"p1\" style=\"background-color:#7a5333; color:white;\"><a href=\"https://github.com\"> GitHub </a></p>
           <p id=\"p1\" style=\"background-color:#5f0686; color:white;\"><a href=\"https://www.ocs.fr\"> OCS </a></p>
           <p id=\"p1\" style=\"background-color:purple; color:white;\"><a href=\"https://www.onenote.com\"> OneNote </a></p>
           <p id=\"p1\" style=\"background-color:#112c8a; color:white;\"><a href=\"https://login.live.com>\"> Outlook </a></p>
           
           <p id=\"p2\" style=\"background-color:blue; color:white;\"><a href=\"http://glpi-project.org\"> GLPI </a></p>
           <p id=\"p2\" style=\"background-color:green; color:white;\"><a href=\"https://www.centreon.com\"> Centréon </a></p>
           <p id=\"p2\" style=\"background-color:orange; color:white;\"> Application </p>
           <p id=\"p2\" style=\"background-color:pink; color:white;\"><a href=\"https://www.mailinblack.com\"> Mail In Black</a></p>
           <p id=\"p2\" style=\"background-color:red; color:white;\"><a href=\"https://www.horoquartz.fr\"> Horoquartz </a></p>
        </header>
       
      

<style>

header{ display: flex;     flex-wrap: wrap; }

h4{ margin-left: 10px;
    font-family: 'BlackChancery';
    text-decoration: underline;
    text-decoration: bold;
    font-size : 18px;
}
p{
  margin-left: 25px;
  justify-content: center;
  height : 15%;
  
  width : 8%;
  border-radius: 15px;
  text-align: center;
  font-family: cursive;
  line-height: 60px;


}

a{  text-decoration: none;     color: white;  }

</style>
";
        
        $__internal_b9058e5cdf5b957c403ab989a265ea7983a405263787ac12b178d116e1ccfce2->leave($__internal_b9058e5cdf5b957c403ab989a265ea7983a405263787ac12b178d116e1ccfce2_prof);

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
/*         <header> */
/*            <p id="p1" style="background-color:black; color:white;"><a href=""> NAS </a></p> */
/*            <p id="p1" style="background-color:#7a5333; color:white;"><a href="https://github.com"> GitHub </a></p>*/
/*            <p id="p1" style="background-color:#5f0686; color:white;"><a href="https://www.ocs.fr"> OCS </a></p>*/
/*            <p id="p1" style="background-color:purple; color:white;"><a href="https://www.onenote.com"> OneNote </a></p>*/
/*            <p id="p1" style="background-color:#112c8a; color:white;"><a href="https://login.live.com>"> Outlook </a></p>*/
/*            */
/*            <p id="p2" style="background-color:blue; color:white;"><a href="http://glpi-project.org"> GLPI </a></p>*/
/*            <p id="p2" style="background-color:green; color:white;"><a href="https://www.centreon.com"> Centréon </a></p>*/
/*            <p id="p2" style="background-color:orange; color:white;"> Application </p>*/
/*            <p id="p2" style="background-color:pink; color:white;"><a href="https://www.mailinblack.com"> Mail In Black</a></p>*/
/*            <p id="p2" style="background-color:red; color:white;"><a href="https://www.horoquartz.fr"> Horoquartz </a></p>*/
/*         </header>*/
/*        */
/*       */
/* */
/* <style>*/
/* */
/* header{ display: flex;     flex-wrap: wrap; }*/
/* */
/* h4{ margin-left: 10px;*/
/*     font-family: 'BlackChancery';*/
/*     text-decoration: underline;*/
/*     text-decoration: bold;*/
/*     font-size : 18px;*/
/* }*/
/* p{*/
/*   margin-left: 25px;*/
/*   justify-content: center;*/
/*   height : 15%;*/
/*   */
/*   width : 8%;*/
/*   border-radius: 15px;*/
/*   text-align: center;*/
/*   font-family: cursive;*/
/*   line-height: 60px;*/
/* */
/* */
/* }*/
/* */
/* a{  text-decoration: none;     color: white;  }*/
/* */
/* </style>*/
/* {% endblock %}*/
