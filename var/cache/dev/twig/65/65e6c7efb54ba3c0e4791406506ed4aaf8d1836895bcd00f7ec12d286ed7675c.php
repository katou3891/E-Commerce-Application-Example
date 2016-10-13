<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_74536a83057f24a8438283fedc1be34c74a96b9b72055c1a98ff218aea10bd80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_68202c858b80db7890c4ebbf4caaf939c2c8f02a4c922078040ee6e9c4181bc8 = $this->env->getExtension("native_profiler");
        $__internal_68202c858b80db7890c4ebbf4caaf939c2c8f02a4c922078040ee6e9c4181bc8->enter($__internal_68202c858b80db7890c4ebbf4caaf939c2c8f02a4c922078040ee6e9c4181bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68202c858b80db7890c4ebbf4caaf939c2c8f02a4c922078040ee6e9c4181bc8->leave($__internal_68202c858b80db7890c4ebbf4caaf939c2c8f02a4c922078040ee6e9c4181bc8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8009d8b3f09ce65e3399885bea785c4302774a8e7ce1071f86c1089a7e6c2e76 = $this->env->getExtension("native_profiler");
        $__internal_8009d8b3f09ce65e3399885bea785c4302774a8e7ce1071f86c1089a7e6c2e76->enter($__internal_8009d8b3f09ce65e3399885bea785c4302774a8e7ce1071f86c1089a7e6c2e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_8009d8b3f09ce65e3399885bea785c4302774a8e7ce1071f86c1089a7e6c2e76->leave($__internal_8009d8b3f09ce65e3399885bea785c4302774a8e7ce1071f86c1089a7e6c2e76_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
