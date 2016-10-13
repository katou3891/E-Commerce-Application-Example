<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_c2261669bd1a3c644dc7d52a70d6f2b7551cddfd1060490ce7b953d914d76f28 extends Twig_Template
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
        $__internal_3b4e81e712d403f654a1b405468c44559d682f28cda05a3238e939b63fddb907 = $this->env->getExtension("native_profiler");
        $__internal_3b4e81e712d403f654a1b405468c44559d682f28cda05a3238e939b63fddb907->enter($__internal_3b4e81e712d403f654a1b405468c44559d682f28cda05a3238e939b63fddb907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3b4e81e712d403f654a1b405468c44559d682f28cda05a3238e939b63fddb907->leave($__internal_3b4e81e712d403f654a1b405468c44559d682f28cda05a3238e939b63fddb907_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
