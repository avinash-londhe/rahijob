<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_8f355ba104f376acfba861556a5f7d1b3f79e87eec5c7f40699fd9a8540775af extends Twig_Template
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
        $__internal_c2d4ec9a13695a2296124320f5db31ad839bb81c06e8271ce4c5a7428b7ed7a1 = $this->env->getExtension("native_profiler");
        $__internal_c2d4ec9a13695a2296124320f5db31ad839bb81c06e8271ce4c5a7428b7ed7a1->enter($__internal_c2d4ec9a13695a2296124320f5db31ad839bb81c06e8271ce4c5a7428b7ed7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c2d4ec9a13695a2296124320f5db31ad839bb81c06e8271ce4c5a7428b7ed7a1->leave($__internal_c2d4ec9a13695a2296124320f5db31ad839bb81c06e8271ce4c5a7428b7ed7a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
