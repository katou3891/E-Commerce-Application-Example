<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f8425c829af370c170dbe53480a79c7871129756cfc5fdb60a22c9909b4af9dc extends Twig_Template
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
        $__internal_6156c3c66f6e3d3fbde9e166d4649381c7014e9ee9a6e921dc531fd663d91939 = $this->env->getExtension("native_profiler");
        $__internal_6156c3c66f6e3d3fbde9e166d4649381c7014e9ee9a6e921dc531fd663d91939->enter($__internal_6156c3c66f6e3d3fbde9e166d4649381c7014e9ee9a6e921dc531fd663d91939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6156c3c66f6e3d3fbde9e166d4649381c7014e9ee9a6e921dc531fd663d91939->leave($__internal_6156c3c66f6e3d3fbde9e166d4649381c7014e9ee9a6e921dc531fd663d91939_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
