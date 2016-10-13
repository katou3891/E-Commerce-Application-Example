<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c522e9c071b90acd6014bf118675807f1dc0c0befd65fc0e30b7792f2a344fed extends Twig_Template
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
        $__internal_8864ae33ef9445ada4d08ec99a5469f02e27aa24337997394eb5814a1abe0473 = $this->env->getExtension("native_profiler");
        $__internal_8864ae33ef9445ada4d08ec99a5469f02e27aa24337997394eb5814a1abe0473->enter($__internal_8864ae33ef9445ada4d08ec99a5469f02e27aa24337997394eb5814a1abe0473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_8864ae33ef9445ada4d08ec99a5469f02e27aa24337997394eb5814a1abe0473->leave($__internal_8864ae33ef9445ada4d08ec99a5469f02e27aa24337997394eb5814a1abe0473_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
