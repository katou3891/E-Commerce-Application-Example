<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_70db9cb3e2374c4cf8cd6d48bb5a0b5cf36fea5045425992451cdb3511121e2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16b4dd44a9716a89890081d542e2500a49b5d9b70f4fdcfc67c3377493147394 = $this->env->getExtension("native_profiler");
        $__internal_16b4dd44a9716a89890081d542e2500a49b5d9b70f4fdcfc67c3377493147394->enter($__internal_16b4dd44a9716a89890081d542e2500a49b5d9b70f4fdcfc67c3377493147394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16b4dd44a9716a89890081d542e2500a49b5d9b70f4fdcfc67c3377493147394->leave($__internal_16b4dd44a9716a89890081d542e2500a49b5d9b70f4fdcfc67c3377493147394_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_68b60f83ee25c56d53d5a5f270dec31b5af19a69372295ef261ee274deef76b3 = $this->env->getExtension("native_profiler");
        $__internal_68b60f83ee25c56d53d5a5f270dec31b5af19a69372295ef261ee274deef76b3->enter($__internal_68b60f83ee25c56d53d5a5f270dec31b5af19a69372295ef261ee274deef76b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_68b60f83ee25c56d53d5a5f270dec31b5af19a69372295ef261ee274deef76b3->leave($__internal_68b60f83ee25c56d53d5a5f270dec31b5af19a69372295ef261ee274deef76b3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
