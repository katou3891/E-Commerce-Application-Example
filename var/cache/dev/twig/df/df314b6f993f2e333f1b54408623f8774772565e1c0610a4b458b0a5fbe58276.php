<?php

/* circuit/show.html.twig */
class __TwigTemplate_a3c64136c40c757f0902c8d96f442797c99a5da7701fcecd252137528b83f8e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", "circuit/show.html.twig", 1);
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
        $__internal_57b069c9ead2b54453ece9f65d402ba8b2215899616f48217f375ee408f234e3 = $this->env->getExtension("native_profiler");
        $__internal_57b069c9ead2b54453ece9f65d402ba8b2215899616f48217f375ee408f234e3->enter($__internal_57b069c9ead2b54453ece9f65d402ba8b2215899616f48217f375ee408f234e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "circuit/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57b069c9ead2b54453ece9f65d402ba8b2215899616f48217f375ee408f234e3->leave($__internal_57b069c9ead2b54453ece9f65d402ba8b2215899616f48217f375ee408f234e3_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_ebff4a34236d604d9ea01e86647b54e9f4780940287cd4a9350d66df3d35949e = $this->env->getExtension("native_profiler");
        $__internal_ebff4a34236d604d9ea01e86647b54e9f4780940287cd4a9350d66df3d35949e->enter($__internal_ebff4a34236d604d9ea01e86647b54e9f4780940287cd4a9350d66df3d35949e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    \t
\t<div class=\"circuit\">
    \t<h2>
       \t\t";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["circuit"]) ? $context["circuit"] : $this->getContext($context, "circuit")), "description", array()), "html", null, true);
        echo "
       \t</h2>
    \t  ";
        // line 9
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 10
            echo "        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("circuit_edit");
            echo "\">Modifier Circuit</a></li>
                                    ";
        }
        // line 12
        echo "                                   
    \t<h3>Détails</h3>
\t\t<div class=\"circuit_details\">
\t\t
\t\t\t<p>Description: ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["circuit"]) ? $context["circuit"] : $this->getContext($context, "circuit")), "description", array()), "html", null, true);
        echo "</p>
\t\t\t
\t\t\t<p>Départ de ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["circuit"]) ? $context["circuit"] : $this->getContext($context, "circuit")), "villeDepart", array()), "html", null, true);
        echo " pour ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["circuit"]) ? $context["circuit"] : $this->getContext($context, "circuit")), "dureeCircuit", array()), "html", null, true);
        echo " j. de voyage à travers le ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["circuit"]) ? $context["circuit"] : $this->getContext($context, "circuit")), "paysDepart", array()), "html", null, true);
        echo ", pour terminer à ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["circuit"]) ? $context["circuit"] : $this->getContext($context, "circuit")), "villeArrivee", array()), "html", null, true);
        echo ".</p>
\t\t\t
\t\t\t<h3>Étapes</h3>
\t\t \t<table>
\t\t \t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t    \t<th>Numéro</th>
\t\t\t\t\t\t<th>Ville</th>
\t\t\t\t\t\t<th>Nombre jours</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
 \t\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["circuit"]) ? $context["circuit"] : $this->getContext($context, "circuit")), "etapes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["etape"]) {
            // line 32
            echo "\t \t\t<tr>
\t\t\t   <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["etape"], "numeroEtape", array()), "html", null, true);
            echo "</td>
\t\t\t   <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["etape"], "villeEtape", array()), "html", null, true);
            echo "</td> 
\t\t\t   <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["etape"], "nombreJours", array()), "html", null, true);
            echo " j.</td>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etape'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo " ";
        // line 38
        echo "\t\t\t</tbody>
\t\t\t</table>
\t\t</div> ";
        // line 41
        echo "\t\t
\t\t<div class=\"programmations\">
\t\t<h3>Programmations de ce circuit</h3>
\t\t<table>
\t\t \t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t    \t<th>Date de départ</th>
\t\t\t\t\t\t<th>Nombre de personnes</th>
\t\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["circuit"]) ? $context["circuit"] : $this->getContext($context, "circuit")), "programmations", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["programmation"]) {
            // line 54
            echo "\t\t\t<tr>
\t\t\t   <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["programmation"], "dateDepart", array()), "d-m-Y"), "html", null, true);
            echo "</td>
\t\t\t   <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["programmation"], "nombrePersonnes", array()), "html", null, true);
            echo "</td> 
\t\t\t   <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["programmation"], "prix", array()), "html", null, true);
            echo " euros</td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programmation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t</table>
\t</div> ";
        // line 62
        echo "    <ul>
        <li>
            <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("circuit_index");
        echo "\">Retour à la liste</a>
        </li>
    </ul>
\t</div> ";
        // line 68
        echo "    
";
        
        $__internal_ebff4a34236d604d9ea01e86647b54e9f4780940287cd4a9350d66df3d35949e->leave($__internal_ebff4a34236d604d9ea01e86647b54e9f4780940287cd4a9350d66df3d35949e_prof);

    }

    public function getTemplateName()
    {
        return "circuit/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 68,  166 => 64,  162 => 62,  159 => 60,  150 => 57,  146 => 56,  142 => 55,  139 => 54,  135 => 53,  121 => 41,  117 => 38,  115 => 37,  106 => 35,  102 => 34,  98 => 33,  95 => 32,  91 => 31,  69 => 18,  64 => 16,  58 => 12,  52 => 10,  50 => 9,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'agvoybase.html.twig' %}*/
/* */
/* {% block main %}*/
/*     	*/
/* 	<div class="circuit">*/
/*     	<h2>*/
/*        		{{ circuit.description }}*/
/*        	</h2>*/
/*     	  {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*         <li><a href="{{ path('circuit_edit') }}">Modifier Circuit</a></li>*/
/*                                     {% endif %}*/
/*                                    */
/*     	<h3>Détails</h3>*/
/* 		<div class="circuit_details">*/
/* 		*/
/* 			<p>Description: {{ circuit.description }}</p>*/
/* 			*/
/* 			<p>Départ de {{ circuit.villeDepart }} pour {{ circuit.dureeCircuit }} j. de voyage à travers le {{ circuit.paysDepart }}, pour terminer à {{ circuit.villeArrivee }}.</p>*/
/* 			*/
/* 			<h3>Étapes</h3>*/
/* 		 	<table>*/
/* 		 		<thead>*/
/* 					<tr>*/
/* 				    	<th>Numéro</th>*/
/* 						<th>Ville</th>*/
/* 						<th>Nombre jours</th>*/
/* 						<th></th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody>*/
/*  			{% for etape in circuit.etapes %}*/
/* 	 		<tr>*/
/* 			   <td>{{ etape.numeroEtape }}</td>*/
/* 			   <td>{{ etape.villeEtape }}</td> */
/* 			   <td>{{ etape.nombreJours }} j.</td>*/
/* 			</tr>*/
/* 			{% endfor %} {# circuit.etapes #}*/
/* 			</tbody>*/
/* 			</table>*/
/* 		</div> {# circuit_details #}*/
/* 		*/
/* 		<div class="programmations">*/
/* 		<h3>Programmations de ce circuit</h3>*/
/* 		<table>*/
/* 		 		<thead>*/
/* 					<tr>*/
/* 				    	<th>Date de départ</th>*/
/* 						<th>Nombre de personnes</th>*/
/* 						<th>Prix</th>*/
/* 						<th></th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 		{%  for programmation in circuit.programmations %}*/
/* 			<tr>*/
/* 			   <td>{{ programmation.dateDepart|date('d-m-Y')  }}</td>*/
/* 			   <td>{{ programmation.nombrePersonnes }}</td> */
/* 			   <td>{{ programmation.prix }} euros</td>*/
/* 			</tr>*/
/* 		{% endfor %}*/
/* 		</table>*/
/* 	</div> {# programmations #}*/
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('circuit_index') }}">Retour à la liste</a>*/
/*         </li>*/
/*     </ul>*/
/* 	</div> {# circuit #}*/
/*     */
/* {% endblock %}  {# main #}*/
/* */
