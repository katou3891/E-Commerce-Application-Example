<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_7c8189cb3e3289bef92a50de1714d954f4827599977e8526419bd99671c2d6ab extends Twig_Template
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
        $__internal_1946d41f15557ff7335addc20a26d61e92a5542bad50158807b92bf66f1629fa = $this->env->getExtension("native_profiler");
        $__internal_1946d41f15557ff7335addc20a26d61e92a5542bad50158807b92bf66f1629fa->enter($__internal_1946d41f15557ff7335addc20a26d61e92a5542bad50158807b92bf66f1629fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_1946d41f15557ff7335addc20a26d61e92a5542bad50158807b92bf66f1629fa->leave($__internal_1946d41f15557ff7335addc20a26d61e92a5542bad50158807b92bf66f1629fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
