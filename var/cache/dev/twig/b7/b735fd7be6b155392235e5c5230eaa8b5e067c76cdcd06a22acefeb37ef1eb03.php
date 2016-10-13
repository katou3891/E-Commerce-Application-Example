<?php

/* anonymous/apropos.html.twig */
class __TwigTemplate_b6e92caa7b96703282f906482763dbfa3156a81b80d57e8a16021ef127a05903 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", "anonymous/apropos.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "agvoybase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_adca9a81da7c52ad30a7b768ce1fff5ccb1928e21c590ac478bdd6da28b78b68 = $this->env->getExtension("native_profiler");
        $__internal_adca9a81da7c52ad30a7b768ce1fff5ccb1928e21c590ac478bdd6da28b78b68->enter($__internal_adca9a81da7c52ad30a7b768ce1fff5ccb1928e21c590ac478bdd6da28b78b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "anonymous/apropos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adca9a81da7c52ad30a7b768ce1fff5ccb1928e21c590ac478bdd6da28b78b68->leave($__internal_adca9a81da7c52ad30a7b768ce1fff5ccb1928e21c590ac478bdd6da28b78b68_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_8e1c94c788c75ac088ea5ef0b38606df8772b22763490ba81e7a3c224d752529 = $this->env->getExtension("native_profiler");
        $__internal_8e1c94c788c75ac088ea5ef0b38606df8772b22763490ba81e7a3c224d752529->enter($__internal_8e1c94c788c75ac088ea5ef0b38606df8772b22763490ba81e7a3c224d752529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <h1 class=\"text-center\">Accueil</h1>
\t<div id=\"search\"></div>
\t<div class=\"row\">
\t\t
\t\t<div class=\"col-sm-9\"> <!--  partie centrale -->
\t\t
\t\t<h1>A propos</h1>
\t\t</div>
\t\t
\t\t
\t\t
\t\t
\t<div class=\"col-sm-3\"> <!-- Contact -->
\t\t<div class=\"well\"><h2>Contact\t</h2>
\t\t<p>bsdjb zjd zku kuzg d</p></div>
\t\t</div>
\t
\t</div>

   
    
";
        
        $__internal_8e1c94c788c75ac088ea5ef0b38606df8772b22763490ba81e7a3c224d752529->leave($__internal_8e1c94c788c75ac088ea5ef0b38606df8772b22763490ba81e7a3c224d752529_prof);

    }

    public function getTemplateName()
    {
        return "anonymous/apropos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'agvoybase.html.twig' %}*/
/* */
/* {% block main %}*/
/*     <h1 class="text-center">Accueil</h1>*/
/* 	<div id="search"></div>*/
/* 	<div class="row">*/
/* 		*/
/* 		<div class="col-sm-9"> <!--  partie centrale -->*/
/* 		*/
/* 		<h1>A propos</h1>*/
/* 		</div>*/
/* 		*/
/* 		*/
/* 		*/
/* 		*/
/* 	<div class="col-sm-3"> <!-- Contact -->*/
/* 		<div class="well"><h2>Contact	</h2>*/
/* 		<p>bsdjb zjd zku kuzg d</p></div>*/
/* 		</div>*/
/* 	*/
/* 	</div>*/
/* */
/*    */
/*     */
/* {% endblock %} {# main #}*/
/* */
