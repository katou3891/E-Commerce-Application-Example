<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_cd5b1ebf5f7fe17ccb90c9b93235f6c489a8b3775f9e9b3b57f5c2b14b95934e extends Twig_Template
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
        $__internal_94a953ad52ee74d4e44747b2adc8f603d4521271f376d83fba9e0efe935fd355 = $this->env->getExtension("native_profiler");
        $__internal_94a953ad52ee74d4e44747b2adc8f603d4521271f376d83fba9e0efe935fd355->enter($__internal_94a953ad52ee74d4e44747b2adc8f603d4521271f376d83fba9e0efe935fd355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_94a953ad52ee74d4e44747b2adc8f603d4521271f376d83fba9e0efe935fd355->leave($__internal_94a953ad52ee74d4e44747b2adc8f603d4521271f376d83fba9e0efe935fd355_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
