<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_007735d9a25a0d02ba30e435db99ce9903e156e63c3d80ac92faee9a0946a820 extends Twig_Template
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
        $__internal_affc14de81e84d9b2ac4682da20b1b84fef6c4fa6ac84aae6688ae0b7130e5ea = $this->env->getExtension("native_profiler");
        $__internal_affc14de81e84d9b2ac4682da20b1b84fef6c4fa6ac84aae6688ae0b7130e5ea->enter($__internal_affc14de81e84d9b2ac4682da20b1b84fef6c4fa6ac84aae6688ae0b7130e5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_affc14de81e84d9b2ac4682da20b1b84fef6c4fa6ac84aae6688ae0b7130e5ea->leave($__internal_affc14de81e84d9b2ac4682da20b1b84fef6c4fa6ac84aae6688ae0b7130e5ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
