<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_19f6690e4144cc65e0f0f9ff3f3ad89d2a9498025d7b84829adbe4595a95f858 extends Twig_Template
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
        $__internal_6d8ace913e71d24f6ffd179b35d7bef78ab4590d6d037371000bd9ddf2616261 = $this->env->getExtension("native_profiler");
        $__internal_6d8ace913e71d24f6ffd179b35d7bef78ab4590d6d037371000bd9ddf2616261->enter($__internal_6d8ace913e71d24f6ffd179b35d7bef78ab4590d6d037371000bd9ddf2616261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_6d8ace913e71d24f6ffd179b35d7bef78ab4590d6d037371000bd9ddf2616261->leave($__internal_6d8ace913e71d24f6ffd179b35d7bef78ab4590d6d037371000bd9ddf2616261_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
