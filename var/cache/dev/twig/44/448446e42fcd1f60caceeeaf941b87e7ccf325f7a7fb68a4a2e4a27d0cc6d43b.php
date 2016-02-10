<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_a5d0ec5c759a6a5f966588187cfb26afb2c0a54bc6dea6b5b33b3bbea592d15a extends Twig_Template
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
        $__internal_616e046e26ad0ea515275191cce62db9930118d14349f25a0ac79cdf09c313ef = $this->env->getExtension("native_profiler");
        $__internal_616e046e26ad0ea515275191cce62db9930118d14349f25a0ac79cdf09c313ef->enter($__internal_616e046e26ad0ea515275191cce62db9930118d14349f25a0ac79cdf09c313ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_616e046e26ad0ea515275191cce62db9930118d14349f25a0ac79cdf09c313ef->leave($__internal_616e046e26ad0ea515275191cce62db9930118d14349f25a0ac79cdf09c313ef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
