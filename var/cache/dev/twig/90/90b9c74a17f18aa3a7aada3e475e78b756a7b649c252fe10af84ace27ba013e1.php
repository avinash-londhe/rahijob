<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_319e0aa447b10f7d84e17b1e97ffc51d0fb4893d16b03e5d27b4415bf542e367 extends Twig_Template
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
        $__internal_2281ee046cf767f4cc099f85c0ecc59df521ad48251b34256f05ff55a952b9ee = $this->env->getExtension("native_profiler");
        $__internal_2281ee046cf767f4cc099f85c0ecc59df521ad48251b34256f05ff55a952b9ee->enter($__internal_2281ee046cf767f4cc099f85c0ecc59df521ad48251b34256f05ff55a952b9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_2281ee046cf767f4cc099f85c0ecc59df521ad48251b34256f05ff55a952b9ee->leave($__internal_2281ee046cf767f4cc099f85c0ecc59df521ad48251b34256f05ff55a952b9ee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
