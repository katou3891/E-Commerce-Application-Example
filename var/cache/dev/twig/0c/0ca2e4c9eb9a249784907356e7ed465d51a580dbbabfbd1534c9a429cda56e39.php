<?php

/* circuit/index.html.twig */
class __TwigTemplate_d5a2dfe7a7c10e82b416e2422df08d013f90723356beda01f11887d971b4270f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", "circuit/index.html.twig", 1);
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
        $__internal_8bdf0a0853a0427e5d216bd05844b52cb132be5995b240415a7dcb8689c9f0bf = $this->env->getExtension("native_profiler");
        $__internal_8bdf0a0853a0427e5d216bd05844b52cb132be5995b240415a7dcb8689c9f0bf->enter($__internal_8bdf0a0853a0427e5d216bd05844b52cb132be5995b240415a7dcb8689c9f0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "circuit/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bdf0a0853a0427e5d216bd05844b52cb132be5995b240415a7dcb8689c9f0bf->leave($__internal_8bdf0a0853a0427e5d216bd05844b52cb132be5995b240415a7dcb8689c9f0bf_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_f7631b7117f2bc780dd384b0171608dbf2139a3c65463d509a34d5917051af92 = $this->env->getExtension("native_profiler");
        $__internal_f7631b7117f2bc780dd384b0171608dbf2139a3c65463d509a34d5917051af92->enter($__internal_f7631b7117f2bc780dd384b0171608dbf2139a3c65463d509a34d5917051af92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <h1>Nos circuits</h1>
  ";
        // line 5
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 6
            echo "        <li><a href=\"";
            echo "\">Nouveau Circuit</a></li>
                                    ";
        }
        // line 8
        echo "                                    <!--  Gestion circuit brouillon -->
                                    
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Description</th>
                <th>Paysdepart</th>
                <th>Villedepart</th>
                <th>Villearrivee</th>
                <th>Dureecircuit</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["circuits"]) ? $context["circuits"] : $this->getContext($context, "circuits")));
        foreach ($context['_seq'] as $context["_key"] => $context["circuit"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("circuit_show", array("id" => $this->getAttribute($context["circuit"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "paysDepart", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "villeDepart", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "villeArrivee", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "dureeCircuit", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("circuit_show", array("id" => $this->getAttribute($context["circuit"], "id", array()))), "html", null, true);
            echo "\">détails</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['circuit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>
    
";
        
        $__internal_f7631b7117f2bc780dd384b0171608dbf2139a3c65463d509a34d5917051af92->leave($__internal_f7631b7117f2bc780dd384b0171608dbf2139a3c65463d509a34d5917051af92_prof);

    }

    public function getTemplateName()
    {
        return "circuit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 40,  103 => 34,  96 => 30,  92 => 29,  88 => 28,  84 => 27,  80 => 26,  74 => 25,  71 => 24,  67 => 23,  50 => 8,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'agvoybase.html.twig' %}*/
/* */
/* {% block main %}*/
/*     <h1>Nos circuits</h1>*/
/*   {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*         <li><a href="{# {{ path('circuit_new') }} #}">Nouveau Circuit</a></li>*/
/*                                     {% endif %}*/
/*                                     <!--  Gestion circuit brouillon -->*/
/*                                     */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Description</th>*/
/*                 <th>Paysdepart</th>*/
/*                 <th>Villedepart</th>*/
/*                 <th>Villearrivee</th>*/
/*                 <th>Dureecircuit</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for circuit in circuits %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('circuit_show', { 'id': circuit.id }) }}">{{ circuit.id }}</a></td>*/
/*                 <td>{{ circuit.description }}</td>*/
/*                 <td>{{ circuit.paysDepart }}</td>*/
/*                 <td>{{ circuit.villeDepart }}</td>*/
/*                 <td>{{ circuit.villeArrivee }}</td>*/
/*                 <td>{{ circuit.dureeCircuit }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('circuit_show', { 'id': circuit.id }) }}">détails</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     */
/* {% endblock %} {# main #}*/
/* */
