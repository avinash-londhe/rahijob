<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_90fc1c5270fd3275d34c64db79995ae707c9c83ad0a5ae27716c0a152bf1ae73 extends Twig_Template
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
        $__internal_da55af7761a6eacaf9ceb5e62bff4e51d3b19909cae6e1f13f363ad81e255dc8 = $this->env->getExtension("native_profiler");
        $__internal_da55af7761a6eacaf9ceb5e62bff4e51d3b19909cae6e1f13f363ad81e255dc8->enter($__internal_da55af7761a6eacaf9ceb5e62bff4e51d3b19909cae6e1f13f363ad81e255dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_da55af7761a6eacaf9ceb5e62bff4e51d3b19909cae6e1f13f363ad81e255dc8->leave($__internal_da55af7761a6eacaf9ceb5e62bff4e51d3b19909cae6e1f13f363ad81e255dc8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
