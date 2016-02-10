<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_f533bfb5b0a82d93f677bbc2b97d3fcaeec4a5a0c71b130f43182031c37bab33 extends Twig_Template
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
        $__internal_d00bb296a1ff61be02bef4a5a2beaa7934975f46d1a97221d52017f8d13dad75 = $this->env->getExtension("native_profiler");
        $__internal_d00bb296a1ff61be02bef4a5a2beaa7934975f46d1a97221d52017f8d13dad75->enter($__internal_d00bb296a1ff61be02bef4a5a2beaa7934975f46d1a97221d52017f8d13dad75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_d00bb296a1ff61be02bef4a5a2beaa7934975f46d1a97221d52017f8d13dad75->leave($__internal_d00bb296a1ff61be02bef4a5a2beaa7934975f46d1a97221d52017f8d13dad75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
