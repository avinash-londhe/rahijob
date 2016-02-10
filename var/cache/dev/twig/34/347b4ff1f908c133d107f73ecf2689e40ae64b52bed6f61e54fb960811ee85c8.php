<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_1ad077fe3893bc630f903b5dd5c756a12dc4886b37192cfbbd20196d305aef15 extends Twig_Template
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
        $__internal_5b2fbb19631d18f9d1276950c1d7cabbf7957d238552adb796c80e80f5eec56d = $this->env->getExtension("native_profiler");
        $__internal_5b2fbb19631d18f9d1276950c1d7cabbf7957d238552adb796c80e80f5eec56d->enter($__internal_5b2fbb19631d18f9d1276950c1d7cabbf7957d238552adb796c80e80f5eec56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_5b2fbb19631d18f9d1276950c1d7cabbf7957d238552adb796c80e80f5eec56d->leave($__internal_5b2fbb19631d18f9d1276950c1d7cabbf7957d238552adb796c80e80f5eec56d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
