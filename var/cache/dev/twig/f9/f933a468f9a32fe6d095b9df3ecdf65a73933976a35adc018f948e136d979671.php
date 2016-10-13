<?php

/* FOSUserBundle:Resetting:password_already_requested.html.twig */
class __TwigTemplate_d64bb0f56f4fbd7f13eef0dc6ddfe91175c6760392b6895d20e088ea52987b3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:password_already_requested.html.twig", 1);
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
        $__internal_567652d62cea59c760ac368a0958ddd6d54f4eb60f973cf2089e350ed95fbdf8 = $this->env->getExtension("native_profiler");
        $__internal_567652d62cea59c760ac368a0958ddd6d54f4eb60f973cf2089e350ed95fbdf8->enter($__internal_567652d62cea59c760ac368a0958ddd6d54f4eb60f973cf2089e350ed95fbdf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:password_already_requested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_567652d62cea59c760ac368a0958ddd6d54f4eb60f973cf2089e350ed95fbdf8->leave($__internal_567652d62cea59c760ac368a0958ddd6d54f4eb60f973cf2089e350ed95fbdf8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a1a76d5a26c177f74de2a2063050809245a3a55d8c0457c2df18f1084bf1a576 = $this->env->getExtension("native_profiler");
        $__internal_a1a76d5a26c177f74de2a2063050809245a3a55d8c0457c2df18f1084bf1a576->enter($__internal_a1a76d5a26c177f74de2a2063050809245a3a55d8c0457c2df18f1084bf1a576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a1a76d5a26c177f74de2a2063050809245a3a55d8c0457c2df18f1084bf1a576->leave($__internal_a1a76d5a26c177f74de2a2063050809245a3a55d8c0457c2df18f1084bf1a576_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:password_already_requested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
