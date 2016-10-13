<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_315e5ed97d7079c39e57e6b847b66a04123d92b838f58a9533fdd8100c9fb9d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3389341fed96f2c04f31162256d8a980c106c2462e3ec3c9cabb7362b9a76732 = $this->env->getExtension("native_profiler");
        $__internal_3389341fed96f2c04f31162256d8a980c106c2462e3ec3c9cabb7362b9a76732->enter($__internal_3389341fed96f2c04f31162256d8a980c106c2462e3ec3c9cabb7362b9a76732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3389341fed96f2c04f31162256d8a980c106c2462e3ec3c9cabb7362b9a76732->leave($__internal_3389341fed96f2c04f31162256d8a980c106c2462e3ec3c9cabb7362b9a76732_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4be02dcd2c9e7a958d189778b6517d53c84c82267135548364eaf2cb82f2e5b3 = $this->env->getExtension("native_profiler");
        $__internal_4be02dcd2c9e7a958d189778b6517d53c84c82267135548364eaf2cb82f2e5b3->enter($__internal_4be02dcd2c9e7a958d189778b6517d53c84c82267135548364eaf2cb82f2e5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4be02dcd2c9e7a958d189778b6517d53c84c82267135548364eaf2cb82f2e5b3->leave($__internal_4be02dcd2c9e7a958d189778b6517d53c84c82267135548364eaf2cb82f2e5b3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_09ba70541fef17a8658ba0f1e7543eba2f9a4400b9865c1f161bd40be3ed1581 = $this->env->getExtension("native_profiler");
        $__internal_09ba70541fef17a8658ba0f1e7543eba2f9a4400b9865c1f161bd40be3ed1581->enter($__internal_09ba70541fef17a8658ba0f1e7543eba2f9a4400b9865c1f161bd40be3ed1581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_09ba70541fef17a8658ba0f1e7543eba2f9a4400b9865c1f161bd40be3ed1581->leave($__internal_09ba70541fef17a8658ba0f1e7543eba2f9a4400b9865c1f161bd40be3ed1581_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8b24911fd09ec58786d3430d929682552913ce4a0334acc1db1393fea89ac91e = $this->env->getExtension("native_profiler");
        $__internal_8b24911fd09ec58786d3430d929682552913ce4a0334acc1db1393fea89ac91e->enter($__internal_8b24911fd09ec58786d3430d929682552913ce4a0334acc1db1393fea89ac91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8b24911fd09ec58786d3430d929682552913ce4a0334acc1db1393fea89ac91e->leave($__internal_8b24911fd09ec58786d3430d929682552913ce4a0334acc1db1393fea89ac91e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
