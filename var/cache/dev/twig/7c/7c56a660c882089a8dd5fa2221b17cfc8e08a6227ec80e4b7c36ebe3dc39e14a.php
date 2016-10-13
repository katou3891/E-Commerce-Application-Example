<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_a28985015f65cab2a99b34e48480777aeec4430b8a9cc161e7c6e4ede0dc1c9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_78cd23f9727edb28165102c12c9ebd8a74f4929733804a0e29eaa4db35a91c1e = $this->env->getExtension("native_profiler");
        $__internal_78cd23f9727edb28165102c12c9ebd8a74f4929733804a0e29eaa4db35a91c1e->enter($__internal_78cd23f9727edb28165102c12c9ebd8a74f4929733804a0e29eaa4db35a91c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78cd23f9727edb28165102c12c9ebd8a74f4929733804a0e29eaa4db35a91c1e->leave($__internal_78cd23f9727edb28165102c12c9ebd8a74f4929733804a0e29eaa4db35a91c1e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_71709736ba8f0b8f63b1e8ae1de08781a8e9026dfd47a26bae6142079c44be88 = $this->env->getExtension("native_profiler");
        $__internal_71709736ba8f0b8f63b1e8ae1de08781a8e9026dfd47a26bae6142079c44be88->enter($__internal_71709736ba8f0b8f63b1e8ae1de08781a8e9026dfd47a26bae6142079c44be88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_71709736ba8f0b8f63b1e8ae1de08781a8e9026dfd47a26bae6142079c44be88->leave($__internal_71709736ba8f0b8f63b1e8ae1de08781a8e9026dfd47a26bae6142079c44be88_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
