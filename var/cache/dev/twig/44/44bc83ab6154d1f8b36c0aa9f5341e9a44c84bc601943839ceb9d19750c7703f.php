<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_205922e28d6cd5aefbe7690c5b1275d5034aa9181bbaca70038bdf58bedfda28 extends Twig_Template
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
        $__internal_841358d91b0d59a0f90ffa1dff65b6a56f5dbb9f870a4f55a07dabe52228fdae = $this->env->getExtension("native_profiler");
        $__internal_841358d91b0d59a0f90ffa1dff65b6a56f5dbb9f870a4f55a07dabe52228fdae->enter($__internal_841358d91b0d59a0f90ffa1dff65b6a56f5dbb9f870a4f55a07dabe52228fdae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_841358d91b0d59a0f90ffa1dff65b6a56f5dbb9f870a4f55a07dabe52228fdae->leave($__internal_841358d91b0d59a0f90ffa1dff65b6a56f5dbb9f870a4f55a07dabe52228fdae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
