<?php

/* base.html.twig */
class __TwigTemplate_b0920190ced77c0d273c4ef2544033776afed034a9d99db1fd0657c78fab5b87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b23b70727be6d74162d56d75f45ae62684e94cb0bcd7422ff71ad7bd1e3cf0d = $this->env->getExtension("native_profiler");
        $__internal_8b23b70727be6d74162d56d75f45ae62684e94cb0bcd7422ff71ad7bd1e3cf0d->enter($__internal_8b23b70727be6d74162d56d75f45ae62684e94cb0bcd7422ff71ad7bd1e3cf0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    \t";
        // line 13
        $this->displayBlock('header', $context, $blocks);
        // line 14
        echo "        
    \t<div class=\"container body-container\">
            ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "        </div>
    \t
        ";
        // line 28
        $this->displayBlock('footer', $context, $blocks);
        // line 29
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "    </body>
</html>
";
        
        $__internal_8b23b70727be6d74162d56d75f45ae62684e94cb0bcd7422ff71ad7bd1e3cf0d->leave($__internal_8b23b70727be6d74162d56d75f45ae62684e94cb0bcd7422ff71ad7bd1e3cf0d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_a61a4737534ca8e3d042d2396ac09110ab1ccafce2fe6b3231015463cd2fecf3 = $this->env->getExtension("native_profiler");
        $__internal_a61a4737534ca8e3d042d2396ac09110ab1ccafce2fe6b3231015463cd2fecf3->enter($__internal_a61a4737534ca8e3d042d2396ac09110ab1ccafce2fe6b3231015463cd2fecf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a61a4737534ca8e3d042d2396ac09110ab1ccafce2fe6b3231015463cd2fecf3->leave($__internal_a61a4737534ca8e3d042d2396ac09110ab1ccafce2fe6b3231015463cd2fecf3_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8494c54961264da049f050f2d6ae038e072bb2c58fd5e4ff0b60e73877f209b8 = $this->env->getExtension("native_profiler");
        $__internal_8494c54961264da049f050f2d6ae038e072bb2c58fd5e4ff0b60e73877f209b8->enter($__internal_8494c54961264da049f050f2d6ae038e072bb2c58fd5e4ff0b60e73877f209b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        \t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_8494c54961264da049f050f2d6ae038e072bb2c58fd5e4ff0b60e73877f209b8->leave($__internal_8494c54961264da049f050f2d6ae038e072bb2c58fd5e4ff0b60e73877f209b8_prof);

    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        $__internal_3c4434a137fb6e53d0154391e9137cebdd75aa5367381a48724b5083eb551ccc = $this->env->getExtension("native_profiler");
        $__internal_3c4434a137fb6e53d0154391e9137cebdd75aa5367381a48724b5083eb551ccc->enter($__internal_3c4434a137fb6e53d0154391e9137cebdd75aa5367381a48724b5083eb551ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo "<header><p>HEADER</p></header>";
        
        $__internal_3c4434a137fb6e53d0154391e9137cebdd75aa5367381a48724b5083eb551ccc->leave($__internal_3c4434a137fb6e53d0154391e9137cebdd75aa5367381a48724b5083eb551ccc_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa6d512c388a1ec33aca753b8c6825fb315f9aa328f43c2fd558370b703e243e = $this->env->getExtension("native_profiler");
        $__internal_aa6d512c388a1ec33aca753b8c6825fb315f9aa328f43c2fd558370b703e243e->enter($__internal_aa6d512c388a1ec33aca753b8c6825fb315f9aa328f43c2fd558370b703e243e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "                
                    <div id=\"main\">
                        ";
        // line 19
        echo twig_include($this->env, $context, "default/_flash_messages.html.twig");
        echo "

                        ";
        // line 21
        $this->displayBlock('main', $context, $blocks);
        // line 22
        echo "                    </div>
                    
                   
            ";
        
        $__internal_aa6d512c388a1ec33aca753b8c6825fb315f9aa328f43c2fd558370b703e243e->leave($__internal_aa6d512c388a1ec33aca753b8c6825fb315f9aa328f43c2fd558370b703e243e_prof);

    }

    // line 21
    public function block_main($context, array $blocks = array())
    {
        $__internal_dcbd713e5b84928b0451e373e15ef73070dcde707e5b4333dc08878efa85bc8b = $this->env->getExtension("native_profiler");
        $__internal_dcbd713e5b84928b0451e373e15ef73070dcde707e5b4333dc08878efa85bc8b->enter($__internal_dcbd713e5b84928b0451e373e15ef73070dcde707e5b4333dc08878efa85bc8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_dcbd713e5b84928b0451e373e15ef73070dcde707e5b4333dc08878efa85bc8b->leave($__internal_dcbd713e5b84928b0451e373e15ef73070dcde707e5b4333dc08878efa85bc8b_prof);

    }

    // line 28
    public function block_footer($context, array $blocks = array())
    {
        $__internal_97fa39a4582e1fabfae8c5a608f8d737260cf257dd874c280d6b7d28dfb80ff4 = $this->env->getExtension("native_profiler");
        $__internal_97fa39a4582e1fabfae8c5a608f8d737260cf257dd874c280d6b7d28dfb80ff4->enter($__internal_97fa39a4582e1fabfae8c5a608f8d737260cf257dd874c280d6b7d28dfb80ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo "<footer><p>Copyright 2016 - La meilleure agence</p></footer>";
        
        $__internal_97fa39a4582e1fabfae8c5a608f8d737260cf257dd874c280d6b7d28dfb80ff4->leave($__internal_97fa39a4582e1fabfae8c5a608f8d737260cf257dd874c280d6b7d28dfb80ff4_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_af9655efd3b0c0ea5a51b8b0cd6b3dcf23dbf7af18465fc0d541d3f5f413c959 = $this->env->getExtension("native_profiler");
        $__internal_af9655efd3b0c0ea5a51b8b0cd6b3dcf23dbf7af18465fc0d541d3f5f413c959->enter($__internal_af9655efd3b0c0ea5a51b8b0cd6b3dcf23dbf7af18465fc0d541d3f5f413c959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 30
        echo "        \t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        \t<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_af9655efd3b0c0ea5a51b8b0cd6b3dcf23dbf7af18465fc0d541d3f5f413c959->leave($__internal_af9655efd3b0c0ea5a51b8b0cd6b3dcf23dbf7af18465fc0d541d3f5f413c959_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 31,  171 => 30,  165 => 29,  153 => 28,  142 => 21,  132 => 22,  130 => 21,  125 => 19,  121 => 17,  115 => 16,  103 => 13,  93 => 8,  87 => 7,  75 => 6,  66 => 33,  63 => 29,  61 => 28,  57 => 26,  55 => 16,  51 => 14,  49 => 13,  42 => 10,  40 => 7,  36 => 6,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1"/>*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*         	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*     	{% block header %}<header><p>HEADER</p></header>{% endblock %}*/
/*         */
/*     	<div class="container body-container">*/
/*             {% block body %}*/
/*                 */
/*                     <div id="main">*/
/*                         {{ include('default/_flash_messages.html.twig') }}*/
/* */
/*                         {% block main %}{% endblock %}*/
/*                     </div>*/
/*                     */
/*                    */
/*             {% endblock %}*/
/*         </div>*/
/*     	*/
/*         {% block footer %}<footer><p>Copyright 2016 - La meilleure agence</p></footer>{% endblock %}*/
/*         {% block javascripts %}*/
/*         	<script src="{{ asset('js/jquery.min.js') }}"></script>*/
/*         	<script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
