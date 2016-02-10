<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_40698a6437c543ec0b9c260ac8d3482248879932b87ae6fe3da3f86c8ebcba81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eae4a24b946cb6f34dfc9ccf3dfb947fabaa8d1c8d0fbde56b14a0e56d6a3d94 = $this->env->getExtension("native_profiler");
        $__internal_eae4a24b946cb6f34dfc9ccf3dfb947fabaa8d1c8d0fbde56b14a0e56d6a3d94->enter($__internal_eae4a24b946cb6f34dfc9ccf3dfb947fabaa8d1c8d0fbde56b14a0e56d6a3d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eae4a24b946cb6f34dfc9ccf3dfb947fabaa8d1c8d0fbde56b14a0e56d6a3d94->leave($__internal_eae4a24b946cb6f34dfc9ccf3dfb947fabaa8d1c8d0fbde56b14a0e56d6a3d94_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a6f2cc36c7528479be9c651957a5260a0205fc5091c9fc6551717f0e9be39d4b = $this->env->getExtension("native_profiler");
        $__internal_a6f2cc36c7528479be9c651957a5260a0205fc5091c9fc6551717f0e9be39d4b->enter($__internal_a6f2cc36c7528479be9c651957a5260a0205fc5091c9fc6551717f0e9be39d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a6f2cc36c7528479be9c651957a5260a0205fc5091c9fc6551717f0e9be39d4b->leave($__internal_a6f2cc36c7528479be9c651957a5260a0205fc5091c9fc6551717f0e9be39d4b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8a51571f34ea04f1f89e92e1209f31a17061f5db72cd077f937fe433516767fc = $this->env->getExtension("native_profiler");
        $__internal_8a51571f34ea04f1f89e92e1209f31a17061f5db72cd077f937fe433516767fc->enter($__internal_8a51571f34ea04f1f89e92e1209f31a17061f5db72cd077f937fe433516767fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8a51571f34ea04f1f89e92e1209f31a17061f5db72cd077f937fe433516767fc->leave($__internal_8a51571f34ea04f1f89e92e1209f31a17061f5db72cd077f937fe433516767fc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c4d6eb9c235768557a274ab272195d1c4611b568b9d9ea07940780a81d0c236d = $this->env->getExtension("native_profiler");
        $__internal_c4d6eb9c235768557a274ab272195d1c4611b568b9d9ea07940780a81d0c236d->enter($__internal_c4d6eb9c235768557a274ab272195d1c4611b568b9d9ea07940780a81d0c236d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c4d6eb9c235768557a274ab272195d1c4611b568b9d9ea07940780a81d0c236d->leave($__internal_c4d6eb9c235768557a274ab272195d1c4611b568b9d9ea07940780a81d0c236d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
