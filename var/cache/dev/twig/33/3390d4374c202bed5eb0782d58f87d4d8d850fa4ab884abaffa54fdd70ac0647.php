<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ff2c7b962adfedf6250b908312862a30b490e2fd01e9f93cd22b5af77401097a extends Twig_Template
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
        $__internal_7d4f662f48bb06108efbc56f938279e28ee62f1309eaab76b14c8382263be324 = $this->env->getExtension("native_profiler");
        $__internal_7d4f662f48bb06108efbc56f938279e28ee62f1309eaab76b14c8382263be324->enter($__internal_7d4f662f48bb06108efbc56f938279e28ee62f1309eaab76b14c8382263be324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_7d4f662f48bb06108efbc56f938279e28ee62f1309eaab76b14c8382263be324->leave($__internal_7d4f662f48bb06108efbc56f938279e28ee62f1309eaab76b14c8382263be324_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
