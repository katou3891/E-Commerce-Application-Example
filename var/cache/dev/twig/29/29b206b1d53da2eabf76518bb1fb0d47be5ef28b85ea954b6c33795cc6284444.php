<?php

/* agvoybase.html.twig */
class __TwigTemplate_99c8e174f9e5cb30e27d0c0e886ea0db949b36ac6454cccb652de0df820b1582 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "agvoybase.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'header_navigation_links' => array($this, 'block_header_navigation_links'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfe925e5a46e2faa93b5a0f2c1993ed16d02a259ed92cf1d9f9a8db3cbd0b7b6 = $this->env->getExtension("native_profiler");
        $__internal_dfe925e5a46e2faa93b5a0f2c1993ed16d02a259ed92cf1d9f9a8db3cbd0b7b6->enter($__internal_dfe925e5a46e2faa93b5a0f2c1993ed16d02a259ed92cf1d9f9a8db3cbd0b7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agvoybase.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfe925e5a46e2faa93b5a0f2c1993ed16d02a259ed92cf1d9f9a8db3cbd0b7b6->leave($__internal_dfe925e5a46e2faa93b5a0f2c1993ed16d02a259ed92cf1d9f9a8db3cbd0b7b6_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_896308e7a1a5f96106e03cb90dec7a9a9f2acee0bfbffdbf740011f6970f3285 = $this->env->getExtension("native_profiler");
        $__internal_896308e7a1a5f96106e03cb90dec7a9a9f2acee0bfbffdbf740011f6970f3285->enter($__internal_896308e7a1a5f96106e03cb90dec7a9a9f2acee0bfbffdbf740011f6970f3285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">
                                Accueil Symfony
                            </a>

                            <button type=\"button\" class=\"navbar-toggle\"
                                    data-toggle=\"collapse\"
                                    data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav\">

                                ";
        // line 24
        $this->displayBlock('header_navigation_links', $context, $blocks);
        // line 51
        echo "
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
";
        
        $__internal_896308e7a1a5f96106e03cb90dec7a9a9f2acee0bfbffdbf740011f6970f3285->leave($__internal_896308e7a1a5f96106e03cb90dec7a9a9f2acee0bfbffdbf740011f6970f3285_prof);

    }

    // line 24
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_193958515ffe4e9850df068d107d4dd867bf73d603f29e93302cc04d77e893b7 = $this->env->getExtension("native_profiler");
        $__internal_193958515ffe4e9850df068d107d4dd867bf73d603f29e93302cc04d77e893b7->enter($__internal_193958515ffe4e9850df068d107d4dd867bf73d603f29e93302cc04d77e893b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        // line 25
        echo "                                    <li>
                                        <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("accueil_show");
        echo "\">Accueil</a>
                                        <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("presentation_show");
        echo "\">Qui sommes-nous ?</a>
                                        <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("circuit_index");
        echo "\">Circuits</a>
                                        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("contact_show");
        echo "\">Contact</a>
                                     
            
                                     ";
        // line 32
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 33
            echo "                                      <li>
           \t\t\t\t\t\t\t\t<a href=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("profile_show");
            echo "\">Mon Profil</a>                         
\t\t\t\t\t\t\t\t\t</li>
                                    <li>
           \t\t\t\t\t\t\t\t<a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Se déconnecter</a>                         
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
                                   
                                    
   \t\t\t\t\t\t\t\t";
        } else {
            // line 43
            echo "                                    <li>
           \t\t\t\t\t\t\t\t<a href=\"";
            // line 44
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Se Connecter</a>                         
\t\t\t\t\t\t\t\t\t</li>
                                    ";
        }
        // line 47
        echo "                                    
                                    </li>
                               
                                ";
        
        $__internal_193958515ffe4e9850df068d107d4dd867bf73d603f29e93302cc04d77e893b7->leave($__internal_193958515ffe4e9850df068d107d4dd867bf73d603f29e93302cc04d77e893b7_prof);

    }

    public function getTemplateName()
    {
        return "agvoybase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 47,  131 => 44,  128 => 43,  119 => 37,  113 => 34,  110 => 33,  108 => 32,  102 => 29,  98 => 28,  94 => 27,  90 => 26,  87 => 25,  81 => 24,  68 => 51,  66 => 24,  47 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block header %}*/
/*             <header>*/
/*                 <div class="navbar navbar-default navbar-static-top" role="navigation">*/
/*                     <div class="container">*/
/*                         <div class="navbar-header">*/
/*                             <a class="navbar-brand" href="{{ path('homepage') }}">*/
/*                                 Accueil Symfony*/
/*                             </a>*/
/* */
/*                             <button type="button" class="navbar-toggle"*/
/*                                     data-toggle="collapse"*/
/*                                     data-target=".navbar-collapse">*/
/*                                 <span class="sr-only">Toggle navigation</span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                             </button>*/
/*                         </div>*/
/*                         <div class="navbar-collapse collapse">*/
/*                             <ul class="nav navbar-nav">*/
/* */
/*                                 {% block header_navigation_links %}*/
/*                                     <li>*/
/*                                         <a href="{{ path('accueil_show') }}">Accueil</a>*/
/*                                         <a href="{{ path('presentation_show') }}">Qui sommes-nous ?</a>*/
/*                                         <a href="{{ path('circuit_index') }}">Circuits</a>*/
/*                                         <a href="{{ path('contact_show') }}">Contact</a>*/
/*                                      */
/*             */
/*                                      {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                                       <li>*/
/*            								<a href="{{ path('profile_show') }}">Mon Profil</a>                         */
/* 									</li>*/
/*                                     <li>*/
/*            								<a href="{{ path('fos_user_security_logout') }}">Se déconnecter</a>                         */
/* 									</li>*/
/* 									*/
/*                                    */
/*                                     */
/*    								{% else %}*/
/*                                     <li>*/
/*            								<a href="{{ path('fos_user_security_login') }}">Se Connecter</a>                         */
/* 									</li>*/
/*                                     {% endif %}*/
/*                                     */
/*                                     </li>*/
/*                                */
/*                                 {% endblock %}*/
/* */
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </header>*/
/* {% endblock %}*/
/*        */
/* */
