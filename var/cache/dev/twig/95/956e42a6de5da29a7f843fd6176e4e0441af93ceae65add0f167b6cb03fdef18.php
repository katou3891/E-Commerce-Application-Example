<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_38deacc5b6d905c8a2a8df4cefeb3deb015e9cbf8bb5c33c4c1b0ee46d99c032 extends Twig_Template
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
        $__internal_76264e385cc01b61c07523e35cb9692a29993bbade275d193094dae7d1f293d2 = $this->env->getExtension("native_profiler");
        $__internal_76264e385cc01b61c07523e35cb9692a29993bbade275d193094dae7d1f293d2->enter($__internal_76264e385cc01b61c07523e35cb9692a29993bbade275d193094dae7d1f293d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_76264e385cc01b61c07523e35cb9692a29993bbade275d193094dae7d1f293d2->leave($__internal_76264e385cc01b61c07523e35cb9692a29993bbade275d193094dae7d1f293d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
