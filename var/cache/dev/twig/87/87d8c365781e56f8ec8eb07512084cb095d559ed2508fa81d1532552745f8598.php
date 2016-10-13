<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_94aa5c3806948977d01b0b10e954000f3c4d598acc065e244acc5e35955504a4 extends Twig_Template
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
        $__internal_ddf7777fbb062f5d4508378cfbf510e7cdafef5fcd16c7a994ca38b2eed2c6cb = $this->env->getExtension("native_profiler");
        $__internal_ddf7777fbb062f5d4508378cfbf510e7cdafef5fcd16c7a994ca38b2eed2c6cb->enter($__internal_ddf7777fbb062f5d4508378cfbf510e7cdafef5fcd16c7a994ca38b2eed2c6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_ddf7777fbb062f5d4508378cfbf510e7cdafef5fcd16c7a994ca38b2eed2c6cb->leave($__internal_ddf7777fbb062f5d4508378cfbf510e7cdafef5fcd16c7a994ca38b2eed2c6cb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
