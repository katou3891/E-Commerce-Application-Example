<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_b99fa1e754a2492c154c69fbc48b67a15bc49700eff4b195d46a48e0784144a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_e3be99086cf805b214a765db14bb455953c587271fc4c92b8afafa203f92ae90 = $this->env->getExtension("native_profiler");
        $__internal_e3be99086cf805b214a765db14bb455953c587271fc4c92b8afafa203f92ae90->enter($__internal_e3be99086cf805b214a765db14bb455953c587271fc4c92b8afafa203f92ae90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3be99086cf805b214a765db14bb455953c587271fc4c92b8afafa203f92ae90->leave($__internal_e3be99086cf805b214a765db14bb455953c587271fc4c92b8afafa203f92ae90_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d3a34a6925fe7cafabdf5aac7a403db2a0007d0b562fede13942e4b942803fbf = $this->env->getExtension("native_profiler");
        $__internal_d3a34a6925fe7cafabdf5aac7a403db2a0007d0b562fede13942e4b942803fbf->enter($__internal_d3a34a6925fe7cafabdf5aac7a403db2a0007d0b562fede13942e4b942803fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_d3a34a6925fe7cafabdf5aac7a403db2a0007d0b562fede13942e4b942803fbf->leave($__internal_d3a34a6925fe7cafabdf5aac7a403db2a0007d0b562fede13942e4b942803fbf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
