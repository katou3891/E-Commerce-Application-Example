<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_6d07f2530a7d2a0fc1044b695106980899e875cf91957f106e89d6edee127ae8 extends Twig_Template
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
        $__internal_f7199ebfb1156e30e831736a9edfddd9ca5c6cbcd32f84f7ce6da4050813e8a9 = $this->env->getExtension("native_profiler");
        $__internal_f7199ebfb1156e30e831736a9edfddd9ca5c6cbcd32f84f7ce6da4050813e8a9->enter($__internal_f7199ebfb1156e30e831736a9edfddd9ca5c6cbcd32f84f7ce6da4050813e8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_f7199ebfb1156e30e831736a9edfddd9ca5c6cbcd32f84f7ce6da4050813e8a9->leave($__internal_f7199ebfb1156e30e831736a9edfddd9ca5c6cbcd32f84f7ce6da4050813e8a9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
