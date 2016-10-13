<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_b7e3bb54887ac4c60841b6134a389ce32a777a70c7078770e17e29d11f26e6e0 extends Twig_Template
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
        $__internal_377976dc7f6fb2b3bba0a12d087738232d4d30c0c869da3931d647ae9111b7de = $this->env->getExtension("native_profiler");
        $__internal_377976dc7f6fb2b3bba0a12d087738232d4d30c0c869da3931d647ae9111b7de->enter($__internal_377976dc7f6fb2b3bba0a12d087738232d4d30c0c869da3931d647ae9111b7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_377976dc7f6fb2b3bba0a12d087738232d4d30c0c869da3931d647ae9111b7de->leave($__internal_377976dc7f6fb2b3bba0a12d087738232d4d30c0c869da3931d647ae9111b7de_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
