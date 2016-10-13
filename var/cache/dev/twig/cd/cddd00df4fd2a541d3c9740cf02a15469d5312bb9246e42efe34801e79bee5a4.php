<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_092cdf322fab0f26e4cd978fa9cde93ec4ce9fad598876c98f25a224aa21f192 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_083c8b3e86e0b6171273f71b475ce0c4bb020ca99d5a10aa2e18be1b91dbd310 = $this->env->getExtension("native_profiler");
        $__internal_083c8b3e86e0b6171273f71b475ce0c4bb020ca99d5a10aa2e18be1b91dbd310->enter($__internal_083c8b3e86e0b6171273f71b475ce0c4bb020ca99d5a10aa2e18be1b91dbd310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_083c8b3e86e0b6171273f71b475ce0c4bb020ca99d5a10aa2e18be1b91dbd310->leave($__internal_083c8b3e86e0b6171273f71b475ce0c4bb020ca99d5a10aa2e18be1b91dbd310_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f073f2220b3aa9469810ed4974bc048b5b4419b8c6d0977a0c555d57f8b1a931 = $this->env->getExtension("native_profiler");
        $__internal_f073f2220b3aa9469810ed4974bc048b5b4419b8c6d0977a0c555d57f8b1a931->enter($__internal_f073f2220b3aa9469810ed4974bc048b5b4419b8c6d0977a0c555d57f8b1a931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_f073f2220b3aa9469810ed4974bc048b5b4419b8c6d0977a0c555d57f8b1a931->leave($__internal_f073f2220b3aa9469810ed4974bc048b5b4419b8c6d0977a0c555d57f8b1a931_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
