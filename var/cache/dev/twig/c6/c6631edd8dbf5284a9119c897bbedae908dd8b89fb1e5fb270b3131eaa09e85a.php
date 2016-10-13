<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_18c6a07415a83d516977aa6e7dff41c960951ee5d0e767dea04aa88fa80af2da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_98876fced2b439525a39f3601db381eeb69c4bae20953aab8184a623b343e44c = $this->env->getExtension("native_profiler");
        $__internal_98876fced2b439525a39f3601db381eeb69c4bae20953aab8184a623b343e44c->enter($__internal_98876fced2b439525a39f3601db381eeb69c4bae20953aab8184a623b343e44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98876fced2b439525a39f3601db381eeb69c4bae20953aab8184a623b343e44c->leave($__internal_98876fced2b439525a39f3601db381eeb69c4bae20953aab8184a623b343e44c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4215ddf7991a6d6a4b3a6be89953ffdc968b49383eaa4cdc96dfce85ba3416d9 = $this->env->getExtension("native_profiler");
        $__internal_4215ddf7991a6d6a4b3a6be89953ffdc968b49383eaa4cdc96dfce85ba3416d9->enter($__internal_4215ddf7991a6d6a4b3a6be89953ffdc968b49383eaa4cdc96dfce85ba3416d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_4215ddf7991a6d6a4b3a6be89953ffdc968b49383eaa4cdc96dfce85ba3416d9->leave($__internal_4215ddf7991a6d6a4b3a6be89953ffdc968b49383eaa4cdc96dfce85ba3416d9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
