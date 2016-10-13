<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_16917c100ea092666c4bd3ba0d269cacfb1701c6bbbd2fdd0d6b8d08bc59736a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_59930c7772519d5bc8087140b665eaf26ccfd421299346ab46ca7d7cfb9c04c9 = $this->env->getExtension("native_profiler");
        $__internal_59930c7772519d5bc8087140b665eaf26ccfd421299346ab46ca7d7cfb9c04c9->enter($__internal_59930c7772519d5bc8087140b665eaf26ccfd421299346ab46ca7d7cfb9c04c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59930c7772519d5bc8087140b665eaf26ccfd421299346ab46ca7d7cfb9c04c9->leave($__internal_59930c7772519d5bc8087140b665eaf26ccfd421299346ab46ca7d7cfb9c04c9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_39872a451fe2d82ab92629c3e6cd193139d23720d3d1f75a45a4e032162cd9b3 = $this->env->getExtension("native_profiler");
        $__internal_39872a451fe2d82ab92629c3e6cd193139d23720d3d1f75a45a4e032162cd9b3->enter($__internal_39872a451fe2d82ab92629c3e6cd193139d23720d3d1f75a45a4e032162cd9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_39872a451fe2d82ab92629c3e6cd193139d23720d3d1f75a45a4e032162cd9b3->leave($__internal_39872a451fe2d82ab92629c3e6cd193139d23720d3d1f75a45a4e032162cd9b3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fe9822e75ca4f4dad4c59d6d767848768e2d89ff869a80bee8433985d4eefb6 = $this->env->getExtension("native_profiler");
        $__internal_1fe9822e75ca4f4dad4c59d6d767848768e2d89ff869a80bee8433985d4eefb6->enter($__internal_1fe9822e75ca4f4dad4c59d6d767848768e2d89ff869a80bee8433985d4eefb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1fe9822e75ca4f4dad4c59d6d767848768e2d89ff869a80bee8433985d4eefb6->leave($__internal_1fe9822e75ca4f4dad4c59d6d767848768e2d89ff869a80bee8433985d4eefb6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3385b2ad78fe18ab88f9322f1d94827f88fa7710a4cd2eb1e82b409131e7797f = $this->env->getExtension("native_profiler");
        $__internal_3385b2ad78fe18ab88f9322f1d94827f88fa7710a4cd2eb1e82b409131e7797f->enter($__internal_3385b2ad78fe18ab88f9322f1d94827f88fa7710a4cd2eb1e82b409131e7797f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3385b2ad78fe18ab88f9322f1d94827f88fa7710a4cd2eb1e82b409131e7797f->leave($__internal_3385b2ad78fe18ab88f9322f1d94827f88fa7710a4cd2eb1e82b409131e7797f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
