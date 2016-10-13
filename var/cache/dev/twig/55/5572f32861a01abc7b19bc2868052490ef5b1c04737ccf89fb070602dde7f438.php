<?php

/* authenticated/profil.html.twig */
class __TwigTemplate_3c69e62c6d0137a1e363b5c4b5ca9077ccfeb2ceb299d175e4f85c02c7d4eb9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", "authenticated/profil.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "agvoybase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92a1569c71406af6e999e1ab7960ba6ee2d1a02caca15c455c2660154ee77455 = $this->env->getExtension("native_profiler");
        $__internal_92a1569c71406af6e999e1ab7960ba6ee2d1a02caca15c455c2660154ee77455->enter($__internal_92a1569c71406af6e999e1ab7960ba6ee2d1a02caca15c455c2660154ee77455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authenticated/profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92a1569c71406af6e999e1ab7960ba6ee2d1a02caca15c455c2660154ee77455->leave($__internal_92a1569c71406af6e999e1ab7960ba6ee2d1a02caca15c455c2660154ee77455_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_fe7b49aa4f9e73bef5475ff37a2a5291e7d81396a194087980a8d5b87b0a97a2 = $this->env->getExtension("native_profiler");
        $__internal_fe7b49aa4f9e73bef5475ff37a2a5291e7d81396a194087980a8d5b87b0a97a2->enter($__internal_fe7b49aa4f9e73bef5475ff37a2a5291e7d81396a194087980a8d5b87b0a97a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <h1 class=\"text-center\">Mon profil</h1>
    \t ";
        // line 5
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 6
            echo "        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("profile_edit");
            echo "\">Editer mon profil</a></li>
                                    ";
        }
        // line 8
        echo "                                    
\t<div class=\"row\">
\t<div class=\"fos_user_user_show\">
    <p>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div></div>
   
    
";
        
        $__internal_fe7b49aa4f9e73bef5475ff37a2a5291e7d81396a194087980a8d5b87b0a97a2->leave($__internal_fe7b49aa4f9e73bef5475ff37a2a5291e7d81396a194087980a8d5b87b0a97a2_prof);

    }

    public function getTemplateName()
    {
        return "authenticated/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  56 => 11,  51 => 8,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'agvoybase.html.twig' %}*/
/* */
/* {% block main %}*/
/*     <h1 class="text-center">Mon profil</h1>*/
/*     	 {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*         <li><a href="{{ path('profile_edit') }}">Editer mon profil</a></li>*/
/*                                     {% endif %}*/
/*                                     */
/* 	<div class="row">*/
/* 	<div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/* </div></div>*/
/*    */
/*     */
/* {% endblock %} {# main #}*/
/* */
