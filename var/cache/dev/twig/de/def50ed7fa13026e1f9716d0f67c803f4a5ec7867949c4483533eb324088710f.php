<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_0ce5da5c26fcfb581f59dfe3be8b0969b71f62cf5cc28e23302c64090e21fc8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_c4977f02bc41fe82bc414ba2dc0b0de886e6730057220ba9af4e0fb03499d2ad = $this->env->getExtension("native_profiler");
        $__internal_c4977f02bc41fe82bc414ba2dc0b0de886e6730057220ba9af4e0fb03499d2ad->enter($__internal_c4977f02bc41fe82bc414ba2dc0b0de886e6730057220ba9af4e0fb03499d2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4977f02bc41fe82bc414ba2dc0b0de886e6730057220ba9af4e0fb03499d2ad->leave($__internal_c4977f02bc41fe82bc414ba2dc0b0de886e6730057220ba9af4e0fb03499d2ad_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc10a6360b3d60be1cfaa0b29004eae5b89da55e73661870b16fccd49bb19ad0 = $this->env->getExtension("native_profiler");
        $__internal_dc10a6360b3d60be1cfaa0b29004eae5b89da55e73661870b16fccd49bb19ad0->enter($__internal_dc10a6360b3d60be1cfaa0b29004eae5b89da55e73661870b16fccd49bb19ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_dc10a6360b3d60be1cfaa0b29004eae5b89da55e73661870b16fccd49bb19ad0->leave($__internal_dc10a6360b3d60be1cfaa0b29004eae5b89da55e73661870b16fccd49bb19ad0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
