<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_4c738f9fc33d7f692e953c2f31b7abdc6ae43039784071d7e1bdda1f239ff823 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_3a1a21586710fa93f8981e3b632f4a961736f9e3c66c25b360404fa7427e041b = $this->env->getExtension("native_profiler");
        $__internal_3a1a21586710fa93f8981e3b632f4a961736f9e3c66c25b360404fa7427e041b->enter($__internal_3a1a21586710fa93f8981e3b632f4a961736f9e3c66c25b360404fa7427e041b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a1a21586710fa93f8981e3b632f4a961736f9e3c66c25b360404fa7427e041b->leave($__internal_3a1a21586710fa93f8981e3b632f4a961736f9e3c66c25b360404fa7427e041b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae776698301ec6330d45f8ce2cf01998044b3918a51566117a10f15e06b36c3d = $this->env->getExtension("native_profiler");
        $__internal_ae776698301ec6330d45f8ce2cf01998044b3918a51566117a10f15e06b36c3d->enter($__internal_ae776698301ec6330d45f8ce2cf01998044b3918a51566117a10f15e06b36c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ae776698301ec6330d45f8ce2cf01998044b3918a51566117a10f15e06b36c3d->leave($__internal_ae776698301ec6330d45f8ce2cf01998044b3918a51566117a10f15e06b36c3d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
