<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ef3280221779056cf7ed3652a6f0f019243d7c20d53124b9d1d9e110cb64a776 extends Twig_Template
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
        $__internal_40e33edbc814bc620b0994d234b9a5e26a0b8fc7587ab00e2ea4a5ad273101d1 = $this->env->getExtension("native_profiler");
        $__internal_40e33edbc814bc620b0994d234b9a5e26a0b8fc7587ab00e2ea4a5ad273101d1->enter($__internal_40e33edbc814bc620b0994d234b9a5e26a0b8fc7587ab00e2ea4a5ad273101d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_40e33edbc814bc620b0994d234b9a5e26a0b8fc7587ab00e2ea4a5ad273101d1->leave($__internal_40e33edbc814bc620b0994d234b9a5e26a0b8fc7587ab00e2ea4a5ad273101d1_prof);

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
