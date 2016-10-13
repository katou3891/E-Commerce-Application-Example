<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_4291128eb4893130706bcaacb379a06bd13f824874a1c9f9c02ffd5feaac0cd3 extends Twig_Template
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
        $__internal_cb10b8c33ece41b79589c8e1d3fc61d9d32856ab5e074f801c0794baf07366a5 = $this->env->getExtension("native_profiler");
        $__internal_cb10b8c33ece41b79589c8e1d3fc61d9d32856ab5e074f801c0794baf07366a5->enter($__internal_cb10b8c33ece41b79589c8e1d3fc61d9d32856ab5e074f801c0794baf07366a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_cb10b8c33ece41b79589c8e1d3fc61d9d32856ab5e074f801c0794baf07366a5->leave($__internal_cb10b8c33ece41b79589c8e1d3fc61d9d32856ab5e074f801c0794baf07366a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
