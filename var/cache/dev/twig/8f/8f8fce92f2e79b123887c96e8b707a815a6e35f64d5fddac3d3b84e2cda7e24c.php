<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_6e039f5f2bfc6ef8a0b21a4d35af32050d66a7c968f9dbd91201b94edb25f01a extends Twig_Template
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
        $__internal_207171519d8048a1b6795fa5bf4a737b185919942adc8aab8e79b9787d0a3acf = $this->env->getExtension("native_profiler");
        $__internal_207171519d8048a1b6795fa5bf4a737b185919942adc8aab8e79b9787d0a3acf->enter($__internal_207171519d8048a1b6795fa5bf4a737b185919942adc8aab8e79b9787d0a3acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_207171519d8048a1b6795fa5bf4a737b185919942adc8aab8e79b9787d0a3acf->leave($__internal_207171519d8048a1b6795fa5bf4a737b185919942adc8aab8e79b9787d0a3acf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
