<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_c12716120bd06e7f8d76364804f65ed1597c79c5155b3734ddb54d61ac78b86d extends Twig_Template
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
        $__internal_aed197304188b5be5055c4c2d7151960bdd71435aba48444d9afc9af501586da = $this->env->getExtension("native_profiler");
        $__internal_aed197304188b5be5055c4c2d7151960bdd71435aba48444d9afc9af501586da->enter($__internal_aed197304188b5be5055c4c2d7151960bdd71435aba48444d9afc9af501586da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_aed197304188b5be5055c4c2d7151960bdd71435aba48444d9afc9af501586da->leave($__internal_aed197304188b5be5055c4c2d7151960bdd71435aba48444d9afc9af501586da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
