<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_9e3b2e436b78c9bdc0c377cbd278d7e6de67751958db8c63689989f497f83178 extends Twig_Template
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
        $__internal_2d6cf32553665e248a7281914cd264ffdb5051f3b5a182f671d2d3d2ca029560 = $this->env->getExtension("native_profiler");
        $__internal_2d6cf32553665e248a7281914cd264ffdb5051f3b5a182f671d2d3d2ca029560->enter($__internal_2d6cf32553665e248a7281914cd264ffdb5051f3b5a182f671d2d3d2ca029560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2d6cf32553665e248a7281914cd264ffdb5051f3b5a182f671d2d3d2ca029560->leave($__internal_2d6cf32553665e248a7281914cd264ffdb5051f3b5a182f671d2d3d2ca029560_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
