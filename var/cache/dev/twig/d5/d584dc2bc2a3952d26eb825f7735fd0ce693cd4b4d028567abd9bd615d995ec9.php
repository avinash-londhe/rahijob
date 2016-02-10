<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b540bd8ed042e322afe7077386d663b55a8fd31fce2a5a9f94601c101ef7e79d extends Twig_Template
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
        $__internal_7e76d4f49ca730a508d9f5d74832cf022fbbf0ebe379bf4b68cb31f628b238a2 = $this->env->getExtension("native_profiler");
        $__internal_7e76d4f49ca730a508d9f5d74832cf022fbbf0ebe379bf4b68cb31f628b238a2->enter($__internal_7e76d4f49ca730a508d9f5d74832cf022fbbf0ebe379bf4b68cb31f628b238a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7e76d4f49ca730a508d9f5d74832cf022fbbf0ebe379bf4b68cb31f628b238a2->leave($__internal_7e76d4f49ca730a508d9f5d74832cf022fbbf0ebe379bf4b68cb31f628b238a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
