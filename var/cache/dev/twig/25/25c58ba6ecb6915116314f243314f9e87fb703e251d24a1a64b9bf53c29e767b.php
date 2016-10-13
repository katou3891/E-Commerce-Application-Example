<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_5ef126c60daf9323d9e4f9e07256060e47fc54fe1e45db08c9a1388e41a705f9 extends Twig_Template
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
        $__internal_d78b1893fbdabcef08f38ae7edcf4c64f3dea9f217ebdecf738816bfa50dd23b = $this->env->getExtension("native_profiler");
        $__internal_d78b1893fbdabcef08f38ae7edcf4c64f3dea9f217ebdecf738816bfa50dd23b->enter($__internal_d78b1893fbdabcef08f38ae7edcf4c64f3dea9f217ebdecf738816bfa50dd23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d78b1893fbdabcef08f38ae7edcf4c64f3dea9f217ebdecf738816bfa50dd23b->leave($__internal_d78b1893fbdabcef08f38ae7edcf4c64f3dea9f217ebdecf738816bfa50dd23b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
