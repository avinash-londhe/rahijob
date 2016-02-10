<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_bf0f37c5d01e3c92e6c4c9c714a44ef9d1b97842246ef94d280582d6e6933299 extends Twig_Template
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
        $__internal_bf48e0b8e9e0e60305d113601d79208d26db85fc2a5cf9c35fb391b1e614949f = $this->env->getExtension("native_profiler");
        $__internal_bf48e0b8e9e0e60305d113601d79208d26db85fc2a5cf9c35fb391b1e614949f->enter($__internal_bf48e0b8e9e0e60305d113601d79208d26db85fc2a5cf9c35fb391b1e614949f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_bf48e0b8e9e0e60305d113601d79208d26db85fc2a5cf9c35fb391b1e614949f->leave($__internal_bf48e0b8e9e0e60305d113601d79208d26db85fc2a5cf9c35fb391b1e614949f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
