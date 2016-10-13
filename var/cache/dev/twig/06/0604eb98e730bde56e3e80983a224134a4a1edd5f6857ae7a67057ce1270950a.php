<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_a7474aa59860a9798910b3ad4452221b662e2e34e176038da0bc33f5064c480c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b9284e33051dbf3eb0ee848edfc43f7688cb2fd9507e1cc3d4ae1b00534b9f2 = $this->env->getExtension("native_profiler");
        $__internal_2b9284e33051dbf3eb0ee848edfc43f7688cb2fd9507e1cc3d4ae1b00534b9f2->enter($__internal_2b9284e33051dbf3eb0ee848edfc43f7688cb2fd9507e1cc3d4ae1b00534b9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b9284e33051dbf3eb0ee848edfc43f7688cb2fd9507e1cc3d4ae1b00534b9f2->leave($__internal_2b9284e33051dbf3eb0ee848edfc43f7688cb2fd9507e1cc3d4ae1b00534b9f2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_36dafa8660b61eb3a70b8a0475de0e744a34b02b7075c2988b993faaee820093 = $this->env->getExtension("native_profiler");
        $__internal_36dafa8660b61eb3a70b8a0475de0e744a34b02b7075c2988b993faaee820093->enter($__internal_36dafa8660b61eb3a70b8a0475de0e744a34b02b7075c2988b993faaee820093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_36dafa8660b61eb3a70b8a0475de0e744a34b02b7075c2988b993faaee820093->leave($__internal_36dafa8660b61eb3a70b8a0475de0e744a34b02b7075c2988b993faaee820093_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     {{ include('FOSUserBundle:Security:login_content.html.twig') }}*/
/* {% endblock fos_user_content %}*/
/* */
