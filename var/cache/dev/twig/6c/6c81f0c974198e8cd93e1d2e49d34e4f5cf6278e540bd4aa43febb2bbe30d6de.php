<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_a40783c626a59c2a2137f342aaeacbf4c7e53fab5a327b6476e7d09f8f1f67b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_8b8bbb3512c6f7bad956477557e45d249108e95b0d9416500e6a6f24485d1b9c = $this->env->getExtension("native_profiler");
        $__internal_8b8bbb3512c6f7bad956477557e45d249108e95b0d9416500e6a6f24485d1b9c->enter($__internal_8b8bbb3512c6f7bad956477557e45d249108e95b0d9416500e6a6f24485d1b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b8bbb3512c6f7bad956477557e45d249108e95b0d9416500e6a6f24485d1b9c->leave($__internal_8b8bbb3512c6f7bad956477557e45d249108e95b0d9416500e6a6f24485d1b9c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_efc559fa5c3307f8054c246fb7e8b677f3e00256617643fae982f4be275512b8 = $this->env->getExtension("native_profiler");
        $__internal_efc559fa5c3307f8054c246fb7e8b677f3e00256617643fae982f4be275512b8->enter($__internal_efc559fa5c3307f8054c246fb7e8b677f3e00256617643fae982f4be275512b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_efc559fa5c3307f8054c246fb7e8b677f3e00256617643fae982f4be275512b8->leave($__internal_efc559fa5c3307f8054c246fb7e8b677f3e00256617643fae982f4be275512b8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
