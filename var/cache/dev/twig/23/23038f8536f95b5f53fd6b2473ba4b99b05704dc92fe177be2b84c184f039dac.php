<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_185b91b693afd5785495c3ca655d2cb6d5fff3891dbf01de218dd6fb1102d72e extends Twig_Template
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
        $__internal_09edf61e930205ecd292bce56e355135b73ad67938883cc14221f83e522a8dd1 = $this->env->getExtension("native_profiler");
        $__internal_09edf61e930205ecd292bce56e355135b73ad67938883cc14221f83e522a8dd1->enter($__internal_09edf61e930205ecd292bce56e355135b73ad67938883cc14221f83e522a8dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_09edf61e930205ecd292bce56e355135b73ad67938883cc14221f83e522a8dd1->leave($__internal_09edf61e930205ecd292bce56e355135b73ad67938883cc14221f83e522a8dd1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
