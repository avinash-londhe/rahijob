<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_1f5aa752b5bba4193e8c9f17fe9f83acb43f22d681104fef2450f10112e17459 extends Twig_Template
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
        $__internal_b2345b30af57c645af7c022cdef0850988e631b844fe5927d609fe4130b7d55f = $this->env->getExtension("native_profiler");
        $__internal_b2345b30af57c645af7c022cdef0850988e631b844fe5927d609fe4130b7d55f->enter($__internal_b2345b30af57c645af7c022cdef0850988e631b844fe5927d609fe4130b7d55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b2345b30af57c645af7c022cdef0850988e631b844fe5927d609fe4130b7d55f->leave($__internal_b2345b30af57c645af7c022cdef0850988e631b844fe5927d609fe4130b7d55f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
