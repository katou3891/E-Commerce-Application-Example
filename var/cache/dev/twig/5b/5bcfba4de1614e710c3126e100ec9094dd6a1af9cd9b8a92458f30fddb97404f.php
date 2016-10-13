<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_6d80c2cbf6c018a77eb8c3a6c42d4390eba0074f01e1d4d62a3f9b76b9590061 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_58d8068c689f6f90d50ab6e953f6e06d0e8b1df5656b9bd380afae54f3b4053d = $this->env->getExtension("native_profiler");
        $__internal_58d8068c689f6f90d50ab6e953f6e06d0e8b1df5656b9bd380afae54f3b4053d->enter($__internal_58d8068c689f6f90d50ab6e953f6e06d0e8b1df5656b9bd380afae54f3b4053d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58d8068c689f6f90d50ab6e953f6e06d0e8b1df5656b9bd380afae54f3b4053d->leave($__internal_58d8068c689f6f90d50ab6e953f6e06d0e8b1df5656b9bd380afae54f3b4053d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_14be448161501d25f0d61868af05eb5ab100e738feea1ef938f3b236d2be8293 = $this->env->getExtension("native_profiler");
        $__internal_14be448161501d25f0d61868af05eb5ab100e738feea1ef938f3b236d2be8293->enter($__internal_14be448161501d25f0d61868af05eb5ab100e738feea1ef938f3b236d2be8293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_14be448161501d25f0d61868af05eb5ab100e738feea1ef938f3b236d2be8293->leave($__internal_14be448161501d25f0d61868af05eb5ab100e738feea1ef938f3b236d2be8293_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
