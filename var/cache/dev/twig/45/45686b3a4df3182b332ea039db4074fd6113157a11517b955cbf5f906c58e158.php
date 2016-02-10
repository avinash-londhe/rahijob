<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_1a10a14d003468f995fa1b52ef8329572dd459a66ddded1f70ce75fe1d74ff03 extends Twig_Template
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
        $__internal_9708c5f722d1251aa96c92b50440b24e931028d27153cc329b9bed87c6652616 = $this->env->getExtension("native_profiler");
        $__internal_9708c5f722d1251aa96c92b50440b24e931028d27153cc329b9bed87c6652616->enter($__internal_9708c5f722d1251aa96c92b50440b24e931028d27153cc329b9bed87c6652616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_9708c5f722d1251aa96c92b50440b24e931028d27153cc329b9bed87c6652616->leave($__internal_9708c5f722d1251aa96c92b50440b24e931028d27153cc329b9bed87c6652616_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
