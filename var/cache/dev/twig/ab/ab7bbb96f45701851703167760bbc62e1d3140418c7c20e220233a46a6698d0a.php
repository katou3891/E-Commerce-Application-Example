<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_90a38cbe50d45f010a361eb3e7a8c6c6a896936113470150ceb92408cb559785 extends Twig_Template
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
        $__internal_c75dd66231ceb802e98e34cf421affcd3ddd413c5d047f73c83a50f5566523fe = $this->env->getExtension("native_profiler");
        $__internal_c75dd66231ceb802e98e34cf421affcd3ddd413c5d047f73c83a50f5566523fe->enter($__internal_c75dd66231ceb802e98e34cf421affcd3ddd413c5d047f73c83a50f5566523fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_c75dd66231ceb802e98e34cf421affcd3ddd413c5d047f73c83a50f5566523fe->leave($__internal_c75dd66231ceb802e98e34cf421affcd3ddd413c5d047f73c83a50f5566523fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
