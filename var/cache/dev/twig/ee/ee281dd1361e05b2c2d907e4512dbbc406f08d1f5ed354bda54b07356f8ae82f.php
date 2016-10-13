<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a7da9a14471d7ab21b91dad3515587320c65cf1918ac5db51892868c613b86f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_264ca8690893ada844ec196245da0634fc505288eec38c124185838db7b0227f = $this->env->getExtension("native_profiler");
        $__internal_264ca8690893ada844ec196245da0634fc505288eec38c124185838db7b0227f->enter($__internal_264ca8690893ada844ec196245da0634fc505288eec38c124185838db7b0227f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_264ca8690893ada844ec196245da0634fc505288eec38c124185838db7b0227f->leave($__internal_264ca8690893ada844ec196245da0634fc505288eec38c124185838db7b0227f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6cf9d471aa7fff9bcfd652f2cb30472d3389c912a08c80ce51f5151dae7bb7e0 = $this->env->getExtension("native_profiler");
        $__internal_6cf9d471aa7fff9bcfd652f2cb30472d3389c912a08c80ce51f5151dae7bb7e0->enter($__internal_6cf9d471aa7fff9bcfd652f2cb30472d3389c912a08c80ce51f5151dae7bb7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6cf9d471aa7fff9bcfd652f2cb30472d3389c912a08c80ce51f5151dae7bb7e0->leave($__internal_6cf9d471aa7fff9bcfd652f2cb30472d3389c912a08c80ce51f5151dae7bb7e0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae34ba1bc84a216c177d4d010ab5298afda65e2c7ce0b8e3c426a5c01143f5c9 = $this->env->getExtension("native_profiler");
        $__internal_ae34ba1bc84a216c177d4d010ab5298afda65e2c7ce0b8e3c426a5c01143f5c9->enter($__internal_ae34ba1bc84a216c177d4d010ab5298afda65e2c7ce0b8e3c426a5c01143f5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ae34ba1bc84a216c177d4d010ab5298afda65e2c7ce0b8e3c426a5c01143f5c9->leave($__internal_ae34ba1bc84a216c177d4d010ab5298afda65e2c7ce0b8e3c426a5c01143f5c9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
