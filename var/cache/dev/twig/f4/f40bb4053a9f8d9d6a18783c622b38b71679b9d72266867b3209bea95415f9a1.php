<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_0ff9d66efc636aed1a01255681e5dfdb121091c93d1c0d0266b466b25adee0dc extends Twig_Template
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
        $__internal_11d620d06d2ab97c88519786f4397f04cd84e7369946eaa2bd0c249b1df3abc1 = $this->env->getExtension("native_profiler");
        $__internal_11d620d06d2ab97c88519786f4397f04cd84e7369946eaa2bd0c249b1df3abc1->enter($__internal_11d620d06d2ab97c88519786f4397f04cd84e7369946eaa2bd0c249b1df3abc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_11d620d06d2ab97c88519786f4397f04cd84e7369946eaa2bd0c249b1df3abc1->leave($__internal_11d620d06d2ab97c88519786f4397f04cd84e7369946eaa2bd0c249b1df3abc1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
