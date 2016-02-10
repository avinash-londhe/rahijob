<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b21e1a2d1e6ca90a03dc32ddf37b70a54ecc98394979697251348bc554ca250e extends Twig_Template
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
        $__internal_8bb86e9a884e03bf043661cd1ac6e7af022434ca524caebbafc3887c4ecc9889 = $this->env->getExtension("native_profiler");
        $__internal_8bb86e9a884e03bf043661cd1ac6e7af022434ca524caebbafc3887c4ecc9889->enter($__internal_8bb86e9a884e03bf043661cd1ac6e7af022434ca524caebbafc3887c4ecc9889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8bb86e9a884e03bf043661cd1ac6e7af022434ca524caebbafc3887c4ecc9889->leave($__internal_8bb86e9a884e03bf043661cd1ac6e7af022434ca524caebbafc3887c4ecc9889_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
