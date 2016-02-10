<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_a258cd71c07e482325e43d6361036cdf6752c5df207e794f4036222736417929 extends Twig_Template
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
        $__internal_7fac1e7a6ceb447b4d65e424bda136338a74a7be6f3162e99207de7b39ef6aa3 = $this->env->getExtension("native_profiler");
        $__internal_7fac1e7a6ceb447b4d65e424bda136338a74a7be6f3162e99207de7b39ef6aa3->enter($__internal_7fac1e7a6ceb447b4d65e424bda136338a74a7be6f3162e99207de7b39ef6aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7fac1e7a6ceb447b4d65e424bda136338a74a7be6f3162e99207de7b39ef6aa3->leave($__internal_7fac1e7a6ceb447b4d65e424bda136338a74a7be6f3162e99207de7b39ef6aa3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
