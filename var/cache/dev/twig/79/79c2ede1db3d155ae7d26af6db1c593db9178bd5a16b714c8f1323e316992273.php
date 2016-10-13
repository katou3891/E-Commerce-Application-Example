<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_93fa7c2de87c76b1805d51c3e74a59ae767e62e1148935252c4b0f2994d1cd0f extends Twig_Template
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
        $__internal_aab86637bdb010a2373f5600bf709f95727371cb0352a771e24f8e0c507cdc65 = $this->env->getExtension("native_profiler");
        $__internal_aab86637bdb010a2373f5600bf709f95727371cb0352a771e24f8e0c507cdc65->enter($__internal_aab86637bdb010a2373f5600bf709f95727371cb0352a771e24f8e0c507cdc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_aab86637bdb010a2373f5600bf709f95727371cb0352a771e24f8e0c507cdc65->leave($__internal_aab86637bdb010a2373f5600bf709f95727371cb0352a771e24f8e0c507cdc65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
