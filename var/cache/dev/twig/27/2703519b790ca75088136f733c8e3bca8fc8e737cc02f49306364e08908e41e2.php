<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_241e540a61a32db615127a854726884901f8db685cf19df0cdf7237822910f5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9bb5c3c8ca84a323186df817484f33121ce298a56a26e49c9644236a2a28013 = $this->env->getExtension("native_profiler");
        $__internal_c9bb5c3c8ca84a323186df817484f33121ce298a56a26e49c9644236a2a28013->enter($__internal_c9bb5c3c8ca84a323186df817484f33121ce298a56a26e49c9644236a2a28013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c9bb5c3c8ca84a323186df817484f33121ce298a56a26e49c9644236a2a28013->leave($__internal_c9bb5c3c8ca84a323186df817484f33121ce298a56a26e49c9644236a2a28013_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
