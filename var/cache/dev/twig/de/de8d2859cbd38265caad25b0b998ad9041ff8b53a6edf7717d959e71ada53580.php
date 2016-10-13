<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_103f8ebd6127d10a510c261da6b8bf1bb3afb60a4739134881cd7592cf979ed6 extends Twig_Template
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
        $__internal_26584abd921c00096b4792192fc0577c74271c8355236217f0ead8151bc77853 = $this->env->getExtension("native_profiler");
        $__internal_26584abd921c00096b4792192fc0577c74271c8355236217f0ead8151bc77853->enter($__internal_26584abd921c00096b4792192fc0577c74271c8355236217f0ead8151bc77853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_26584abd921c00096b4792192fc0577c74271c8355236217f0ead8151bc77853->leave($__internal_26584abd921c00096b4792192fc0577c74271c8355236217f0ead8151bc77853_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
