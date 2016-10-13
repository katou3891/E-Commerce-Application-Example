<?php

/* anonymous/accueil.html.twig */
class __TwigTemplate_143e12071687aa0f9bc57f3185b5cebabecc0e3a395f50e3de4a237b993ead4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", "anonymous/accueil.html.twig", 1);
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
        $__internal_69ac0d23977fcf01ef1d9c99c12dd8221ee9c4661992a78c8462159aa2d05ffc = $this->env->getExtension("native_profiler");
        $__internal_69ac0d23977fcf01ef1d9c99c12dd8221ee9c4661992a78c8462159aa2d05ffc->enter($__internal_69ac0d23977fcf01ef1d9c99c12dd8221ee9c4661992a78c8462159aa2d05ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "anonymous/accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69ac0d23977fcf01ef1d9c99c12dd8221ee9c4661992a78c8462159aa2d05ffc->leave($__internal_69ac0d23977fcf01ef1d9c99c12dd8221ee9c4661992a78c8462159aa2d05ffc_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_fab9cc769961d917a558b7825c0f0778a507fbd646ee9bfa3fcd672e2a7fe64a = $this->env->getExtension("native_profiler");
        $__internal_fab9cc769961d917a558b7825c0f0778a507fbd646ee9bfa3fcd672e2a7fe64a->enter($__internal_fab9cc769961d917a558b7825c0f0778a507fbd646ee9bfa3fcd672e2a7fe64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <h1 class=\"text-center\">Accueil</h1>
    \t ";
        // line 5
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 6
            echo "        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Voir mon profil</a></li>
                                    ";
        }
        // line 8
        echo "                                    
\t<div id=\"search\"></div>
\t<div class=\"row\">
\t\t<div class=\"col-sm-3\"> <!-- A propos -->
\t\t\t<div class=\"well\"><h2>A propos\t</h2><p>bsdjb zjd zku kuzg d</p></div>
\t\t</div>
\t\t<div class=\"col-sm-6\"> <!--  partie centrale -->
\t\t
\t\t <!--  liste des cricuits -->
\t\t <table>
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
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["circuits"]) ? $context["circuits"] : $this->getContext($context, "circuits")));
        foreach ($context['_seq'] as $context["_key"] => $context["circuit"]) {
            // line 31
            echo "            <tr>
                <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("circuit_show", array("id" => $this->getAttribute($context["circuit"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "paysDepart", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "villeDepart", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "villeArrivee", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "dureeCircuit", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 41
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
        // line 47
        echo "        </tbody>
    </table>
\t\t
\t\t</div>
\t\t
\t\t
\t\t
\t\t
\t<div class=\"col-sm-3\"> <!-- Contact -->
\t\t<div class=\"well\"><h2>Contact\t</h2>
\t\t<p>bsdjb zjd zku kuzg d</p></div>
\t\t</div>
\t
\t</div>

   
    
";
        
        $__internal_fab9cc769961d917a558b7825c0f0778a507fbd646ee9bfa3fcd672e2a7fe64a->leave($__internal_fab9cc769961d917a558b7825c0f0778a507fbd646ee9bfa3fcd672e2a7fe64a_prof);

    }

    public function getTemplateName()
    {
        return "anonymous/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 47,  111 => 41,  104 => 37,  100 => 36,  96 => 35,  92 => 34,  88 => 33,  82 => 32,  79 => 31,  75 => 30,  51 => 8,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'agvoybase.html.twig' %}*/
/* */
/* {% block main %}*/
/*     <h1 class="text-center">Accueil</h1>*/
/*     	 {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*         <li><a href="{{ path('fos_user_profile_show') }}">Voir mon profil</a></li>*/
/*                                     {% endif %}*/
/*                                     */
/* 	<div id="search"></div>*/
/* 	<div class="row">*/
/* 		<div class="col-sm-3"> <!-- A propos -->*/
/* 			<div class="well"><h2>A propos	</h2><p>bsdjb zjd zku kuzg d</p></div>*/
/* 		</div>*/
/* 		<div class="col-sm-6"> <!--  partie centrale -->*/
/* 		*/
/* 		 <!--  liste des cricuits -->*/
/* 		 <table>*/
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
/* 		*/
/* 		</div>*/
/* 		*/
/* 		*/
/* 		*/
/* 		*/
/* 	<div class="col-sm-3"> <!-- Contact -->*/
/* 		<div class="well"><h2>Contact	</h2>*/
/* 		<p>bsdjb zjd zku kuzg d</p></div>*/
/* 		</div>*/
/* 	*/
/* 	</div>*/
/* */
/*    */
/*     */
/* {% endblock %} {# main #}*/
/* */
