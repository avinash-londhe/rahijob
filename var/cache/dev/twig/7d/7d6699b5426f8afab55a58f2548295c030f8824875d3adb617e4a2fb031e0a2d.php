<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_ff36e8ea87ed58d303009fc9b3d471c251cd4118c4d982505977492a9fb89955 extends Twig_Template
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
        $__internal_57549fd7961778bb342392e0d2b54d1e905afbec211a98d9a8c72b217c7eaab9 = $this->env->getExtension("native_profiler");
        $__internal_57549fd7961778bb342392e0d2b54d1e905afbec211a98d9a8c72b217c7eaab9->enter($__internal_57549fd7961778bb342392e0d2b54d1e905afbec211a98d9a8c72b217c7eaab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_57549fd7961778bb342392e0d2b54d1e905afbec211a98d9a8c72b217c7eaab9->leave($__internal_57549fd7961778bb342392e0d2b54d1e905afbec211a98d9a8c72b217c7eaab9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
