<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_6c9b57758ee8dd697531f7c28831117170654cf816359396f108b66c963bb4b5 extends Twig_Template
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
        $__internal_334cb24995ef32f51f64db1598b2ae27cef6fe9c78eb5b777ed3fd0f6dde878d = $this->env->getExtension("native_profiler");
        $__internal_334cb24995ef32f51f64db1598b2ae27cef6fe9c78eb5b777ed3fd0f6dde878d->enter($__internal_334cb24995ef32f51f64db1598b2ae27cef6fe9c78eb5b777ed3fd0f6dde878d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_334cb24995ef32f51f64db1598b2ae27cef6fe9c78eb5b777ed3fd0f6dde878d->leave($__internal_334cb24995ef32f51f64db1598b2ae27cef6fe9c78eb5b777ed3fd0f6dde878d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d98fca84c3f486608d108f5ce7d29a44c54ac6d444e8efc68a4740519c6b9762 = $this->env->getExtension("native_profiler");
        $__internal_d98fca84c3f486608d108f5ce7d29a44c54ac6d444e8efc68a4740519c6b9762->enter($__internal_d98fca84c3f486608d108f5ce7d29a44c54ac6d444e8efc68a4740519c6b9762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d98fca84c3f486608d108f5ce7d29a44c54ac6d444e8efc68a4740519c6b9762->leave($__internal_d98fca84c3f486608d108f5ce7d29a44c54ac6d444e8efc68a4740519c6b9762_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1e1447af0734d24c99e652ce616cd5d1d2cc36315927d821e4736865170fb13a = $this->env->getExtension("native_profiler");
        $__internal_1e1447af0734d24c99e652ce616cd5d1d2cc36315927d821e4736865170fb13a->enter($__internal_1e1447af0734d24c99e652ce616cd5d1d2cc36315927d821e4736865170fb13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1e1447af0734d24c99e652ce616cd5d1d2cc36315927d821e4736865170fb13a->leave($__internal_1e1447af0734d24c99e652ce616cd5d1d2cc36315927d821e4736865170fb13a_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3f4ae3d414212cf60254b4234260ec7dc65babf295fbba07b17972a6e177df66 = $this->env->getExtension("native_profiler");
        $__internal_3f4ae3d414212cf60254b4234260ec7dc65babf295fbba07b17972a6e177df66->enter($__internal_3f4ae3d414212cf60254b4234260ec7dc65babf295fbba07b17972a6e177df66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3f4ae3d414212cf60254b4234260ec7dc65babf295fbba07b17972a6e177df66->leave($__internal_3f4ae3d414212cf60254b4234260ec7dc65babf295fbba07b17972a6e177df66_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
