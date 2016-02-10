<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_989a7995e7a9f1dde6540cf5d8574f923a7588cc085780d2ce18a3c7692c6aaf extends Twig_Template
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
        $__internal_b2b0d9a2701d06791f1c31c00c905b4a1c517ffedef4c6b50700adfbe643f80f = $this->env->getExtension("native_profiler");
        $__internal_b2b0d9a2701d06791f1c31c00c905b4a1c517ffedef4c6b50700adfbe643f80f->enter($__internal_b2b0d9a2701d06791f1c31c00c905b4a1c517ffedef4c6b50700adfbe643f80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_b2b0d9a2701d06791f1c31c00c905b4a1c517ffedef4c6b50700adfbe643f80f->leave($__internal_b2b0d9a2701d06791f1c31c00c905b4a1c517ffedef4c6b50700adfbe643f80f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
