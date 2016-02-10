<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d0068697a423252c4cf0df680ada2031d32b2aef36886fb24049fe8e69806a18 extends Twig_Template
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
        $__internal_c1526ba14a8f331652f20abbcf11c44388efef056d0fc9974d529432d8ffd33d = $this->env->getExtension("native_profiler");
        $__internal_c1526ba14a8f331652f20abbcf11c44388efef056d0fc9974d529432d8ffd33d->enter($__internal_c1526ba14a8f331652f20abbcf11c44388efef056d0fc9974d529432d8ffd33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_c1526ba14a8f331652f20abbcf11c44388efef056d0fc9974d529432d8ffd33d->leave($__internal_c1526ba14a8f331652f20abbcf11c44388efef056d0fc9974d529432d8ffd33d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
