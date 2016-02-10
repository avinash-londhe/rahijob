<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_980add1119ca3f73c0004008d9060b55d435dddc322e1b0f975381446e04daed extends Twig_Template
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
        $__internal_ae97971dd22779ddb68989a42d5bb645f50695db023f9690f1fefa61cb4f2111 = $this->env->getExtension("native_profiler");
        $__internal_ae97971dd22779ddb68989a42d5bb645f50695db023f9690f1fefa61cb4f2111->enter($__internal_ae97971dd22779ddb68989a42d5bb645f50695db023f9690f1fefa61cb4f2111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_ae97971dd22779ddb68989a42d5bb645f50695db023f9690f1fefa61cb4f2111->leave($__internal_ae97971dd22779ddb68989a42d5bb645f50695db023f9690f1fefa61cb4f2111_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
