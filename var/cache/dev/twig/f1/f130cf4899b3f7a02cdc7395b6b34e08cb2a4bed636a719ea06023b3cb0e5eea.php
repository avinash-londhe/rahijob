<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_cc9d7f9b10f8fe1b7e34e3fd62e3cca42c8679a2b36df201ab62833a1e4d8a2c extends Twig_Template
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
        $__internal_0a455732fdfc03345c35c9c0e5aeaa253510365fa3a2fa56b3bc25b9833a1a50 = $this->env->getExtension("native_profiler");
        $__internal_0a455732fdfc03345c35c9c0e5aeaa253510365fa3a2fa56b3bc25b9833a1a50->enter($__internal_0a455732fdfc03345c35c9c0e5aeaa253510365fa3a2fa56b3bc25b9833a1a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_0a455732fdfc03345c35c9c0e5aeaa253510365fa3a2fa56b3bc25b9833a1a50->leave($__internal_0a455732fdfc03345c35c9c0e5aeaa253510365fa3a2fa56b3bc25b9833a1a50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
