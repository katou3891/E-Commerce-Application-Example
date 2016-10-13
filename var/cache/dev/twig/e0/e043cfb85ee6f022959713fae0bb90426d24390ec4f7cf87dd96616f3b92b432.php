<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_cb98b03a7ab59c1f59b6941c071664a7b275378fe2d2b70015aa6cba8292ab04 extends Twig_Template
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
        $__internal_959aaaa224f4b415d9135dbdcbff6cffbd2deaf343a3cd13c0cb3b904c759d98 = $this->env->getExtension("native_profiler");
        $__internal_959aaaa224f4b415d9135dbdcbff6cffbd2deaf343a3cd13c0cb3b904c759d98->enter($__internal_959aaaa224f4b415d9135dbdcbff6cffbd2deaf343a3cd13c0cb3b904c759d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_959aaaa224f4b415d9135dbdcbff6cffbd2deaf343a3cd13c0cb3b904c759d98->leave($__internal_959aaaa224f4b415d9135dbdcbff6cffbd2deaf343a3cd13c0cb3b904c759d98_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
