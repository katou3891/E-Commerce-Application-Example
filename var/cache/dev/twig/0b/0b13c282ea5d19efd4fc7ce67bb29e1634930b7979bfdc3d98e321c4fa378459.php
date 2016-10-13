<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_36cd6cead8ecb00beab7252e0f51e6ce1cdfc8e8246df5cee2a8b0096c78a41e extends Twig_Template
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
        $__internal_1f6dc1cd40bb84e2d60ee9d383ebeb64d43fcd924ed0612789d2e551ee5e8a50 = $this->env->getExtension("native_profiler");
        $__internal_1f6dc1cd40bb84e2d60ee9d383ebeb64d43fcd924ed0612789d2e551ee5e8a50->enter($__internal_1f6dc1cd40bb84e2d60ee9d383ebeb64d43fcd924ed0612789d2e551ee5e8a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_1f6dc1cd40bb84e2d60ee9d383ebeb64d43fcd924ed0612789d2e551ee5e8a50->leave($__internal_1f6dc1cd40bb84e2d60ee9d383ebeb64d43fcd924ed0612789d2e551ee5e8a50_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
