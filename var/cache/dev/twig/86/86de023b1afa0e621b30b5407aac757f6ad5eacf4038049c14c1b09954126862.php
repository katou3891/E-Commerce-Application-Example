<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_549c6ac0fcae0ef50855579b06f9e5c74a16bae7e5dd6b5372d510e72e5ccc43 extends Twig_Template
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
        $__internal_9f75c66f55a2071d6ddce5c69b012fdaaa0d1fd0cb79f4b13ec15ce7a4fea652 = $this->env->getExtension("native_profiler");
        $__internal_9f75c66f55a2071d6ddce5c69b012fdaaa0d1fd0cb79f4b13ec15ce7a4fea652->enter($__internal_9f75c66f55a2071d6ddce5c69b012fdaaa0d1fd0cb79f4b13ec15ce7a4fea652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_9f75c66f55a2071d6ddce5c69b012fdaaa0d1fd0cb79f4b13ec15ce7a4fea652->leave($__internal_9f75c66f55a2071d6ddce5c69b012fdaaa0d1fd0cb79f4b13ec15ce7a4fea652_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
