<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_df511b57371ebad58a3c8ff8d2f1d26e54edc4cdf8833005acedd7a168d80a13 extends Twig_Template
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
        $__internal_f764f632f3c8dcea597bb55ff95cfa50c242f631cfdf0803bf64a0c62643baaf = $this->env->getExtension("native_profiler");
        $__internal_f764f632f3c8dcea597bb55ff95cfa50c242f631cfdf0803bf64a0c62643baaf->enter($__internal_f764f632f3c8dcea597bb55ff95cfa50c242f631cfdf0803bf64a0c62643baaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f764f632f3c8dcea597bb55ff95cfa50c242f631cfdf0803bf64a0c62643baaf->leave($__internal_f764f632f3c8dcea597bb55ff95cfa50c242f631cfdf0803bf64a0c62643baaf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
