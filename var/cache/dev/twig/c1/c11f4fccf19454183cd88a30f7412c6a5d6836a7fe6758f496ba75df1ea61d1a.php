<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_08ac8b901a14d25ca47c6f74fe66257dd3c264daccc09a00be83870bab1a3ce8 extends Twig_Template
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
        $__internal_2aa51e31035c72fe89492b1fe5b11101e3f40b52e1e54838153a4674582c410d = $this->env->getExtension("native_profiler");
        $__internal_2aa51e31035c72fe89492b1fe5b11101e3f40b52e1e54838153a4674582c410d->enter($__internal_2aa51e31035c72fe89492b1fe5b11101e3f40b52e1e54838153a4674582c410d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_2aa51e31035c72fe89492b1fe5b11101e3f40b52e1e54838153a4674582c410d->leave($__internal_2aa51e31035c72fe89492b1fe5b11101e3f40b52e1e54838153a4674582c410d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
