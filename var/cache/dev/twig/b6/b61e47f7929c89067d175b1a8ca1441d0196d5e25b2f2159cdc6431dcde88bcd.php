<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_83bf54d51dbd1bbdfd92c09602cf835f7ac463e2758805b3c59e38e9d3855316 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3a8f3fb670791bb01fc949dbec9ddc17a0ff81587cf6645c407842f336e1bc3 = $this->env->getExtension("native_profiler");
        $__internal_d3a8f3fb670791bb01fc949dbec9ddc17a0ff81587cf6645c407842f336e1bc3->enter($__internal_d3a8f3fb670791bb01fc949dbec9ddc17a0ff81587cf6645c407842f336e1bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d3a8f3fb670791bb01fc949dbec9ddc17a0ff81587cf6645c407842f336e1bc3->leave($__internal_d3a8f3fb670791bb01fc949dbec9ddc17a0ff81587cf6645c407842f336e1bc3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_905e9d8677f1606f3941d6e4e96927fca8f6e38de3be9907be26dd6a2962ac35 = $this->env->getExtension("native_profiler");
        $__internal_905e9d8677f1606f3941d6e4e96927fca8f6e38de3be9907be26dd6a2962ac35->enter($__internal_905e9d8677f1606f3941d6e4e96927fca8f6e38de3be9907be26dd6a2962ac35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_905e9d8677f1606f3941d6e4e96927fca8f6e38de3be9907be26dd6a2962ac35->leave($__internal_905e9d8677f1606f3941d6e4e96927fca8f6e38de3be9907be26dd6a2962ac35_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
