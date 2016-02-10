<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_acc5dff5491e4996e8daf29614b736e45bdbf2fe74e7534c8240f4e03e35200d extends Twig_Template
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
        $__internal_95b65a814ccee7192b37906cbec51cfc83ff14775a0130ec3f0a23b87124acef = $this->env->getExtension("native_profiler");
        $__internal_95b65a814ccee7192b37906cbec51cfc83ff14775a0130ec3f0a23b87124acef->enter($__internal_95b65a814ccee7192b37906cbec51cfc83ff14775a0130ec3f0a23b87124acef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_95b65a814ccee7192b37906cbec51cfc83ff14775a0130ec3f0a23b87124acef->leave($__internal_95b65a814ccee7192b37906cbec51cfc83ff14775a0130ec3f0a23b87124acef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
