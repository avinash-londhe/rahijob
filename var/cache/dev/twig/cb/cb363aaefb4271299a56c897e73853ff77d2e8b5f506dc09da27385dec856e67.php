<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_18ecf8bbc11a48c44e6ca154d58a9b97c7580ac87ae419d168faf7adce2b99f3 extends Twig_Template
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
        $__internal_21cc8df46e91754c2dce9b87e036f7aec421793efd816ae8bbbc51a2934258f2 = $this->env->getExtension("native_profiler");
        $__internal_21cc8df46e91754c2dce9b87e036f7aec421793efd816ae8bbbc51a2934258f2->enter($__internal_21cc8df46e91754c2dce9b87e036f7aec421793efd816ae8bbbc51a2934258f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_21cc8df46e91754c2dce9b87e036f7aec421793efd816ae8bbbc51a2934258f2->leave($__internal_21cc8df46e91754c2dce9b87e036f7aec421793efd816ae8bbbc51a2934258f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
