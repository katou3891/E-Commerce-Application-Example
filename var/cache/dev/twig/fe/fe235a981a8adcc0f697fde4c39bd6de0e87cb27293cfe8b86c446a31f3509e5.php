<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_be69e88d725af8fd67f373ab98a45d9453b1c89b445755370fec89584ab14bf7 extends Twig_Template
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
        $__internal_01c8d47ef87c6847e65fa15ee46e5caf78fb34e9b3c24668f6784ecd9eb9c015 = $this->env->getExtension("native_profiler");
        $__internal_01c8d47ef87c6847e65fa15ee46e5caf78fb34e9b3c24668f6784ecd9eb9c015->enter($__internal_01c8d47ef87c6847e65fa15ee46e5caf78fb34e9b3c24668f6784ecd9eb9c015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_01c8d47ef87c6847e65fa15ee46e5caf78fb34e9b3c24668f6784ecd9eb9c015->leave($__internal_01c8d47ef87c6847e65fa15ee46e5caf78fb34e9b3c24668f6784ecd9eb9c015_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
