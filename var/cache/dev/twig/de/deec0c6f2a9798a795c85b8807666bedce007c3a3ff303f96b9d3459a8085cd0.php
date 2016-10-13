<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_c049b2fa275138b22d7c2d1c4eddae6573ee028b128fd5aabb43092f93e1f7f6 extends Twig_Template
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
        $__internal_774e68735258e9368211bfc720315c2fd15de1cf21eb751b19e4d312207cbda6 = $this->env->getExtension("native_profiler");
        $__internal_774e68735258e9368211bfc720315c2fd15de1cf21eb751b19e4d312207cbda6->enter($__internal_774e68735258e9368211bfc720315c2fd15de1cf21eb751b19e4d312207cbda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_774e68735258e9368211bfc720315c2fd15de1cf21eb751b19e4d312207cbda6->leave($__internal_774e68735258e9368211bfc720315c2fd15de1cf21eb751b19e4d312207cbda6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
