<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_0e48521de1ba7e131fc2ab74c355d38388b155662e6f42648d1ac2c0442e8e56 extends Twig_Template
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
        $__internal_dae5f14dbd4ab38956a5b86912a19147e646448726454842a1eda0dfa5ee1029 = $this->env->getExtension("native_profiler");
        $__internal_dae5f14dbd4ab38956a5b86912a19147e646448726454842a1eda0dfa5ee1029->enter($__internal_dae5f14dbd4ab38956a5b86912a19147e646448726454842a1eda0dfa5ee1029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_dae5f14dbd4ab38956a5b86912a19147e646448726454842a1eda0dfa5ee1029->leave($__internal_dae5f14dbd4ab38956a5b86912a19147e646448726454842a1eda0dfa5ee1029_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
