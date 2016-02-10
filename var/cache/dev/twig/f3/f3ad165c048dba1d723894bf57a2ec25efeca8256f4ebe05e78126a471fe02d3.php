<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_7545f2d0916c84f2b23ba9509444f0eac96a04e4fe408537e30a5b008c2b5f5b extends Twig_Template
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
        $__internal_7e5dfee30563993999f8699d06fe0a20c03c8505cf998dacd414677dd04ba5a5 = $this->env->getExtension("native_profiler");
        $__internal_7e5dfee30563993999f8699d06fe0a20c03c8505cf998dacd414677dd04ba5a5->enter($__internal_7e5dfee30563993999f8699d06fe0a20c03c8505cf998dacd414677dd04ba5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_7e5dfee30563993999f8699d06fe0a20c03c8505cf998dacd414677dd04ba5a5->leave($__internal_7e5dfee30563993999f8699d06fe0a20c03c8505cf998dacd414677dd04ba5a5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
