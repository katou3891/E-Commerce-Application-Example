<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_2e16edc133efe7f6b640cbc90c036b915bacfd80f08771fce2dd5390afe03f91 extends Twig_Template
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
        $__internal_c819d799b3bcdb40a186b6bfcfba51669d95fdc4e4ba5aee01c0c6d40e69e911 = $this->env->getExtension("native_profiler");
        $__internal_c819d799b3bcdb40a186b6bfcfba51669d95fdc4e4ba5aee01c0c6d40e69e911->enter($__internal_c819d799b3bcdb40a186b6bfcfba51669d95fdc4e4ba5aee01c0c6d40e69e911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c819d799b3bcdb40a186b6bfcfba51669d95fdc4e4ba5aee01c0c6d40e69e911->leave($__internal_c819d799b3bcdb40a186b6bfcfba51669d95fdc4e4ba5aee01c0c6d40e69e911_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
