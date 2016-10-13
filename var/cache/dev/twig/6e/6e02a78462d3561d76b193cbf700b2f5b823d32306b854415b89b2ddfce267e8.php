<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_8112a7c67b71ec18a8980ed6276d0ac5a8d7a4634b197c02b1a545710ef3c060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_06d944c26bfa3afb684cc41654e89a60e87ebe9eca122106513a674679376ef1 = $this->env->getExtension("native_profiler");
        $__internal_06d944c26bfa3afb684cc41654e89a60e87ebe9eca122106513a674679376ef1->enter($__internal_06d944c26bfa3afb684cc41654e89a60e87ebe9eca122106513a674679376ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06d944c26bfa3afb684cc41654e89a60e87ebe9eca122106513a674679376ef1->leave($__internal_06d944c26bfa3afb684cc41654e89a60e87ebe9eca122106513a674679376ef1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef60684f5617b87abc1a5c7478a1741de75df465fc267ff6e6487b9d04cc2a45 = $this->env->getExtension("native_profiler");
        $__internal_ef60684f5617b87abc1a5c7478a1741de75df465fc267ff6e6487b9d04cc2a45->enter($__internal_ef60684f5617b87abc1a5c7478a1741de75df465fc267ff6e6487b9d04cc2a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_ef60684f5617b87abc1a5c7478a1741de75df465fc267ff6e6487b9d04cc2a45->leave($__internal_ef60684f5617b87abc1a5c7478a1741de75df465fc267ff6e6487b9d04cc2a45_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:change_password_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
