<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_332c9bcea362e966a124ef5ca2a6b5cdd0f1b63f31a5832e2ed3d43ecec2c8c2 extends Twig_Template
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
        $__internal_308e25d93e64c16e1530bbdc2d5d2d5857558cf881b0da282367031e9b75b710 = $this->env->getExtension("native_profiler");
        $__internal_308e25d93e64c16e1530bbdc2d5d2d5857558cf881b0da282367031e9b75b710->enter($__internal_308e25d93e64c16e1530bbdc2d5d2d5857558cf881b0da282367031e9b75b710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_308e25d93e64c16e1530bbdc2d5d2d5857558cf881b0da282367031e9b75b710->leave($__internal_308e25d93e64c16e1530bbdc2d5d2d5857558cf881b0da282367031e9b75b710_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
