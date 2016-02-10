<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_0a00c2710ac3c118976d2f1fdf0d27ffabdb482f0fa1bac48714c2b46c312a46 extends Twig_Template
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
        $__internal_83a71a554f33acaafd9c421a0a12c53a72741a1fb8bd16304fc10b34b671ae31 = $this->env->getExtension("native_profiler");
        $__internal_83a71a554f33acaafd9c421a0a12c53a72741a1fb8bd16304fc10b34b671ae31->enter($__internal_83a71a554f33acaafd9c421a0a12c53a72741a1fb8bd16304fc10b34b671ae31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_83a71a554f33acaafd9c421a0a12c53a72741a1fb8bd16304fc10b34b671ae31->leave($__internal_83a71a554f33acaafd9c421a0a12c53a72741a1fb8bd16304fc10b34b671ae31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
