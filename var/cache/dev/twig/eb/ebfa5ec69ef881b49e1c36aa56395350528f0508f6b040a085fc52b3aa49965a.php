<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_46cc493c697ed2c748fc35c4004aab577f87beed10b4f40b297b2ef8e592433c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ccbe4f4d33c1804f241543fa237648c643598ca8ebc256b5b9aecb6eb22c3683 = $this->env->getExtension("native_profiler");
        $__internal_ccbe4f4d33c1804f241543fa237648c643598ca8ebc256b5b9aecb6eb22c3683->enter($__internal_ccbe4f4d33c1804f241543fa237648c643598ca8ebc256b5b9aecb6eb22c3683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ccbe4f4d33c1804f241543fa237648c643598ca8ebc256b5b9aecb6eb22c3683->leave($__internal_ccbe4f4d33c1804f241543fa237648c643598ca8ebc256b5b9aecb6eb22c3683_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d57b7848b9b9fa501bf1a4201b4f7baaedf0933dc4f9c935a26b5b315e3b83a1 = $this->env->getExtension("native_profiler");
        $__internal_d57b7848b9b9fa501bf1a4201b4f7baaedf0933dc4f9c935a26b5b315e3b83a1->enter($__internal_d57b7848b9b9fa501bf1a4201b4f7baaedf0933dc4f9c935a26b5b315e3b83a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_d57b7848b9b9fa501bf1a4201b4f7baaedf0933dc4f9c935a26b5b315e3b83a1->leave($__internal_d57b7848b9b9fa501bf1a4201b4f7baaedf0933dc4f9c935a26b5b315e3b83a1_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f72e021e12f9c7ee885f3805ad67af59f31df914f0744548d3aae73ceae8e0d9 = $this->env->getExtension("native_profiler");
        $__internal_f72e021e12f9c7ee885f3805ad67af59f31df914f0744548d3aae73ceae8e0d9->enter($__internal_f72e021e12f9c7ee885f3805ad67af59f31df914f0744548d3aae73ceae8e0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f72e021e12f9c7ee885f3805ad67af59f31df914f0744548d3aae73ceae8e0d9->leave($__internal_f72e021e12f9c7ee885f3805ad67af59f31df914f0744548d3aae73ceae8e0d9_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5e44454ae98122c9cba2fe6d7ae0de0cdb648726c09cb01e01c77451b8bd0df4 = $this->env->getExtension("native_profiler");
        $__internal_5e44454ae98122c9cba2fe6d7ae0de0cdb648726c09cb01e01c77451b8bd0df4->enter($__internal_5e44454ae98122c9cba2fe6d7ae0de0cdb648726c09cb01e01c77451b8bd0df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5e44454ae98122c9cba2fe6d7ae0de0cdb648726c09cb01e01c77451b8bd0df4->leave($__internal_5e44454ae98122c9cba2fe6d7ae0de0cdb648726c09cb01e01c77451b8bd0df4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
