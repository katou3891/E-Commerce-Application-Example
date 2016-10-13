<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_ae131bf5c0cb5df37fd832ff4792793a85742b1b4af6d5b0439e70a684d2c856 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_591d9b56979f0eadbb226de1b6c4e193cf3ece55d6a97a902f2f96b55da43523 = $this->env->getExtension("native_profiler");
        $__internal_591d9b56979f0eadbb226de1b6c4e193cf3ece55d6a97a902f2f96b55da43523->enter($__internal_591d9b56979f0eadbb226de1b6c4e193cf3ece55d6a97a902f2f96b55da43523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_591d9b56979f0eadbb226de1b6c4e193cf3ece55d6a97a902f2f96b55da43523->leave($__internal_591d9b56979f0eadbb226de1b6c4e193cf3ece55d6a97a902f2f96b55da43523_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b8354cfeb72222f03987939b20a1bbcf19130c990c7f0a2ca981e2f9d9e26aa0 = $this->env->getExtension("native_profiler");
        $__internal_b8354cfeb72222f03987939b20a1bbcf19130c990c7f0a2ca981e2f9d9e26aa0->enter($__internal_b8354cfeb72222f03987939b20a1bbcf19130c990c7f0a2ca981e2f9d9e26aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_b8354cfeb72222f03987939b20a1bbcf19130c990c7f0a2ca981e2f9d9e26aa0->leave($__internal_b8354cfeb72222f03987939b20a1bbcf19130c990c7f0a2ca981e2f9d9e26aa0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
