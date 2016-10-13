<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_930e463dcd8de4ad9fca34541a5f8cbdcdb37a6ccf6947b7ac0a049c16135e00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_c8551cddd0a43b16784ea19b5b772c9e6498fb19bfef1a185342872a8e1b591f = $this->env->getExtension("native_profiler");
        $__internal_c8551cddd0a43b16784ea19b5b772c9e6498fb19bfef1a185342872a8e1b591f->enter($__internal_c8551cddd0a43b16784ea19b5b772c9e6498fb19bfef1a185342872a8e1b591f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8551cddd0a43b16784ea19b5b772c9e6498fb19bfef1a185342872a8e1b591f->leave($__internal_c8551cddd0a43b16784ea19b5b772c9e6498fb19bfef1a185342872a8e1b591f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_13512983b1c7c720f2ef586782a233d999487a3a2ea8f519ee9bba680146ad97 = $this->env->getExtension("native_profiler");
        $__internal_13512983b1c7c720f2ef586782a233d999487a3a2ea8f519ee9bba680146ad97->enter($__internal_13512983b1c7c720f2ef586782a233d999487a3a2ea8f519ee9bba680146ad97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_13512983b1c7c720f2ef586782a233d999487a3a2ea8f519ee9bba680146ad97->leave($__internal_13512983b1c7c720f2ef586782a233d999487a3a2ea8f519ee9bba680146ad97_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
