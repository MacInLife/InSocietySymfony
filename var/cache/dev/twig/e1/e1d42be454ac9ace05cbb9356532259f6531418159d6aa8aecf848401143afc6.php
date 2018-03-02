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
        $__internal_8c7f4c616e930ed31318308cebf0deda3c7f02bea69f60defcf6e4111bd881e9 = $this->env->getExtension("native_profiler");
        $__internal_8c7f4c616e930ed31318308cebf0deda3c7f02bea69f60defcf6e4111bd881e9->enter($__internal_8c7f4c616e930ed31318308cebf0deda3c7f02bea69f60defcf6e4111bd881e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/connexion.html.twig"));

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
    \t
    \t<div>

\t\t\t<img id=\"imgmenu\" src=\"img/InSociety0.png\" width=\"300px\"> 
\t\t\t";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["connectform"]) ? $context["connectform"] : $this->getContext($context, "connectform")), 'form');
        echo "
\t\t\t<button id=\"unmask\" type=\"button\" onclick=\"unmask()\" title=\"Mask/Unmask password to check content\">
\t\t\t\t<strike>&#128065;</strike>
\t\t\t</button>
\t\t\t
\t\t</div>
\t\t<h4>Webmaster - Réalisé par MAC, Portail Collaboratif </h4>
       

</body>
<script>
function unmask(){ \t
  
  if( document.getElementById('form_MDP').type == \"password\" ){
\tdocument.getElementById('form_MDP').type=\"text\";
\tdocument.getElementById('unmask').innerHTML = \"&#128065;\";
  } else {
    document.getElementById('form_MDP').type=\"password\";
    document.getElementById('unmask').innerHTML = \"<strike>&#128065;</strike>\";
  }
}
</script>
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
img#imgmenu{ position: absolute; margin-left: 100px; margin-top: 40px; }
div#form{
background-color: white;
margin : auto;
margin-top: 5%;
\tborder-radius: 20px;
\tborder :1px solid;
    border-color: #91efffe5;
    width: 40%;   
}
button#unmask{
\tposition: absolute;
\tfont-family : cursive;
\t    font-size: 30px;
    margin-left: 60.75%;
    margin-top: -11.65%;
        border: none;
        background: none;
    background-color: initial;
    outline: none;
    color:grey;
}
button#form_Connexion{
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
\theight: 20px;
\tmargin-top: 5%;
\tmargin-left: 5%;
\tmargin-top: 5%;
\tfont-size:  18px ;

}

input#form_MDP{
\tborder-radius: 5px;
\theight: 20px;
\tmargin-left: 12%;
\tmargin-top: 5%;
\tfont-size:  18px ;
\t

}
</style>";
        
        $__internal_8c7f4c616e930ed31318308cebf0deda3c7f02bea69f60defcf6e4111bd881e9->leave($__internal_8c7f4c616e930ed31318308cebf0deda3c7f02bea69f60defcf6e4111bd881e9_prof);

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
        return array (  42 => 16,  31 => 8,  22 => 1,);
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
/*     	*/
/*     	<div>*/
/* */
/* 			<img id="imgmenu" src="img/InSociety0.png" width="300px"> */
/* 			{{ form(connectform)}}*/
/* 			<button id="unmask" type="button" onclick="unmask()" title="Mask/Unmask password to check content">*/
/* 				<strike>&#128065;</strike>*/
/* 			</button>*/
/* 			*/
/* 		</div>*/
/* 		<h4>Webmaster - Réalisé par MAC, Portail Collaboratif </h4>*/
/*        */
/* */
/* </body>*/
/* <script>*/
/* function unmask(){ 	*/
/*   */
/*   if( document.getElementById('form_MDP').type == "password" ){*/
/* 	document.getElementById('form_MDP').type="text";*/
/* 	document.getElementById('unmask').innerHTML = "&#128065;";*/
/*   } else {*/
/*     document.getElementById('form_MDP').type="password";*/
/*     document.getElementById('unmask').innerHTML = "<strike>&#128065;</strike>";*/
/*   }*/
/* }*/
/* </script>*/
/* <style>*/
/* */
/* */
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
/* img#imgmenu{ position: absolute; margin-left: 100px; margin-top: 40px; }*/
/* div#form{*/
/* background-color: white;*/
/* margin : auto;*/
/* margin-top: 5%;*/
/* 	border-radius: 20px;*/
/* 	border :1px solid;*/
/*     border-color: #91efffe5;*/
/*     width: 40%;   */
/* }*/
/* button#unmask{*/
/* 	position: absolute;*/
/* 	font-family : cursive;*/
/* 	    font-size: 30px;*/
/*     margin-left: 60.75%;*/
/*     margin-top: -11.65%;*/
/*         border: none;*/
/*         background: none;*/
/*     background-color: initial;*/
/*     outline: none;*/
/*     color:grey;*/
/* }*/
/* button#form_Connexion{*/
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
/* 	height: 20px;*/
/* 	margin-top: 5%;*/
/* 	margin-left: 5%;*/
/* 	margin-top: 5%;*/
/* 	font-size:  18px ;*/
/* */
/* }*/
/* */
/* input#form_MDP{*/
/* 	border-radius: 5px;*/
/* 	height: 20px;*/
/* 	margin-left: 12%;*/
/* 	margin-top: 5%;*/
/* 	font-size:  18px ;*/
/* 	*/
/* */
/* }*/
/* </style>*/
