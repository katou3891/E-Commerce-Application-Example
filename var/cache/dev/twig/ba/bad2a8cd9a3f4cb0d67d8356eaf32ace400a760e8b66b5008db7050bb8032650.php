<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_c432268666d69f58e62291f0ebf34728689d2889ad8efdfba018106856c30f6d extends Twig_Template
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
        $__internal_0cf51c27f100dad78be49ec67540a60eb786421b2f2851863c315bcf5d75785b = $this->env->getExtension("native_profiler");
        $__internal_0cf51c27f100dad78be49ec67540a60eb786421b2f2851863c315bcf5d75785b->enter($__internal_0cf51c27f100dad78be49ec67540a60eb786421b2f2851863c315bcf5d75785b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_0cf51c27f100dad78be49ec67540a60eb786421b2f2851863c315bcf5d75785b->leave($__internal_0cf51c27f100dad78be49ec67540a60eb786421b2f2851863c315bcf5d75785b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
