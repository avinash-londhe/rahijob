<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_4bb875fb4acdd214aff502743d2770777b5b56250e477a7285613b52b1951e0d extends Twig_Template
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
        $__internal_4d96b2a4ea533e2e53e670b5bf6f6ef0cdd5f874531a2d6118fce015e6ee43e0 = $this->env->getExtension("native_profiler");
        $__internal_4d96b2a4ea533e2e53e670b5bf6f6ef0cdd5f874531a2d6118fce015e6ee43e0->enter($__internal_4d96b2a4ea533e2e53e670b5bf6f6ef0cdd5f874531a2d6118fce015e6ee43e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_4d96b2a4ea533e2e53e670b5bf6f6ef0cdd5f874531a2d6118fce015e6ee43e0->leave($__internal_4d96b2a4ea533e2e53e670b5bf6f6ef0cdd5f874531a2d6118fce015e6ee43e0_prof);

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
