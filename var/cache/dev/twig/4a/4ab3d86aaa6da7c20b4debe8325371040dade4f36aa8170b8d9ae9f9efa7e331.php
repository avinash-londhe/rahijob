<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_c01c5c7c343774592b6079777535436e1472476b612a231daaf5670061b9da41 extends Twig_Template
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
        $__internal_55beb6dfeb3619d6ddd70b682c2513bf5650cdeeb7b0146cb028f2a45f4ffdc8 = $this->env->getExtension("native_profiler");
        $__internal_55beb6dfeb3619d6ddd70b682c2513bf5650cdeeb7b0146cb028f2a45f4ffdc8->enter($__internal_55beb6dfeb3619d6ddd70b682c2513bf5650cdeeb7b0146cb028f2a45f4ffdc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_55beb6dfeb3619d6ddd70b682c2513bf5650cdeeb7b0146cb028f2a45f4ffdc8->leave($__internal_55beb6dfeb3619d6ddd70b682c2513bf5650cdeeb7b0146cb028f2a45f4ffdc8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
