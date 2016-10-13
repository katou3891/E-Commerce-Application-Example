<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_65c5b4cd10a22d84884da7a72c2b0a0b365f39a508160e87df7e8d268f309a57 extends Twig_Template
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
        $__internal_1569ee42c608adf002a5c3992703c982e74a386d64b2238002d0c43ed3ec9c0e = $this->env->getExtension("native_profiler");
        $__internal_1569ee42c608adf002a5c3992703c982e74a386d64b2238002d0c43ed3ec9c0e->enter($__internal_1569ee42c608adf002a5c3992703c982e74a386d64b2238002d0c43ed3ec9c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_1569ee42c608adf002a5c3992703c982e74a386d64b2238002d0c43ed3ec9c0e->leave($__internal_1569ee42c608adf002a5c3992703c982e74a386d64b2238002d0c43ed3ec9c0e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
