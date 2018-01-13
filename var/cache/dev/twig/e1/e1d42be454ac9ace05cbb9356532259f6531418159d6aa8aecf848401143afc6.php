<?php

/* default/connexion.html.twig */
class __TwigTemplate_589bbff12ce554baf928bc9e83becd9358c7239e34431134b851d1c9dfdab3f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b0dc07101ae59ae5e6ccd3df8ca7e618c8096afc7fb3bb9239ed6079498851c = $this->env->getExtension("native_profiler");
        $__internal_7b0dc07101ae59ae5e6ccd3df8ca7e618c8096afc7fb3bb9239ed6079498851c->enter($__internal_7b0dc07101ae59ae5e6ccd3df8ca7e618c8096afc7fb3bb9239ed6079498851c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/connexion.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>Se Connecter</title>
       
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    \t<h1>Bienvenue sur l'Intranet de InSociety</h1>
    \t<!--<img src=\"InSociety.PNG\" align=\"center\">-->
    \t<div>

\t\t\t";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["connectform"]) ? $context["connectform"] : $this->getContext($context, "connectform")), 'form');
        echo "
\t\t</div>
\t\t<h4>Webmaster - Réalisé par MAC, Portail Collaboratif </h4>
       

</body>
<style>
body{
background-color :  #9edae5;
  font-family: cursive;
}

h1{
\tfont-family:'BlackChancery' ; 
\t font-size:  24px ;
\t text-align: center;
\t margin-top: 5%;
}
h4{
\tfont-family:'BlackChancery' ; 
\t font-size:  24px ;
\t text-align: center;
\t color:#6b6b6b;
}

div{
\tmargin-top: 5%;
}
div#form{
background-color: white;
margin : auto;
margin-top: 5%;
\tborder-radius: 20px;
\tborder :1px solid;
    border-color: #91efffe5;
    width: 40%;
    
}
button{
\t font-family:'BlackChancery' ; 
\t font-size:  24px ;
\t border-radius: 5px;
\t margin-bottom: 5%;
    margin-top: 5%;
    margin-left: 40%;
    margin-right: 45%;
    background-color: black;
    color:white;
    height: 50px;
    width: 150px;

}
label{
\tmargin-top: 5%;
\tmargin-left: 20%;
}

input#form_Login{
\tborder-radius: 5px;
\tmargin-top: 5%;
\tmargin-left: 5%;
\tmargin-top: 5%;
\t

}

input#form_MDP{
\tborder-radius: 5px;
\tmargin-left: 13%;
\tmargin-top: 5%;
\t

}
</style>";
        
        $__internal_7b0dc07101ae59ae5e6ccd3df8ca7e618c8096afc7fb3bb9239ed6079498851c->leave($__internal_7b0dc07101ae59ae5e6ccd3df8ca7e618c8096afc7fb3bb9239ed6079498851c_prof);

    }

    public function getTemplateName()
    {
        return "default/connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 15,  31 => 8,  22 => 1,);
    }
}
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>Se Connecter</title>*/
/*        */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*     	<h1>Bienvenue sur l'Intranet de InSociety</h1>*/
/*     	<!--<img src="InSociety.PNG" align="center">-->*/
/*     	<div>*/
/* */
/* 			{{ form(connectform)}}*/
/* 		</div>*/
/* 		<h4>Webmaster - Réalisé par MAC, Portail Collaboratif </h4>*/
/*        */
/* */
/* </body>*/
/* <style>*/
/* body{*/
/* background-color :  #9edae5;*/
/*   font-family: cursive;*/
/* }*/
/* */
/* h1{*/
/* 	font-family:'BlackChancery' ; */
/* 	 font-size:  24px ;*/
/* 	 text-align: center;*/
/* 	 margin-top: 5%;*/
/* }*/
/* h4{*/
/* 	font-family:'BlackChancery' ; */
/* 	 font-size:  24px ;*/
/* 	 text-align: center;*/
/* 	 color:#6b6b6b;*/
/* }*/
/* */
/* div{*/
/* 	margin-top: 5%;*/
/* }*/
/* div#form{*/
/* background-color: white;*/
/* margin : auto;*/
/* margin-top: 5%;*/
/* 	border-radius: 20px;*/
/* 	border :1px solid;*/
/*     border-color: #91efffe5;*/
/*     width: 40%;*/
/*     */
/* }*/
/* button{*/
/* 	 font-family:'BlackChancery' ; */
/* 	 font-size:  24px ;*/
/* 	 border-radius: 5px;*/
/* 	 margin-bottom: 5%;*/
/*     margin-top: 5%;*/
/*     margin-left: 40%;*/
/*     margin-right: 45%;*/
/*     background-color: black;*/
/*     color:white;*/
/*     height: 50px;*/
/*     width: 150px;*/
/* */
/* }*/
/* label{*/
/* 	margin-top: 5%;*/
/* 	margin-left: 20%;*/
/* }*/
/* */
/* input#form_Login{*/
/* 	border-radius: 5px;*/
/* 	margin-top: 5%;*/
/* 	margin-left: 5%;*/
/* 	margin-top: 5%;*/
/* 	*/
/* */
/* }*/
/* */
/* input#form_MDP{*/
/* 	border-radius: 5px;*/
/* 	margin-left: 13%;*/
/* 	margin-top: 5%;*/
/* 	*/
/* */
/* }*/
/* </style>*/
