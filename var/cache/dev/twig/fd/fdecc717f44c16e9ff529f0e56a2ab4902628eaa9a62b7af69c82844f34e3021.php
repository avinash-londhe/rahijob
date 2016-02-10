<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_89e5b74edb66de25c89f85ec599a3bb898030d6c64e9b40a033fc5490f29b6d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29ce2c596d4db5861112ea4669c83a484ba22eb93a2c58a64e3b5475c4c1325d = $this->env->getExtension("native_profiler");
        $__internal_29ce2c596d4db5861112ea4669c83a484ba22eb93a2c58a64e3b5475c4c1325d->enter($__internal_29ce2c596d4db5861112ea4669c83a484ba22eb93a2c58a64e3b5475c4c1325d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_29ce2c596d4db5861112ea4669c83a484ba22eb93a2c58a64e3b5475c4c1325d->leave($__internal_29ce2c596d4db5861112ea4669c83a484ba22eb93a2c58a64e3b5475c4c1325d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4bac2bddabc02e8bea34700424dc3b148bb69fd8e71759aa701b5704469f735c = $this->env->getExtension("native_profiler");
        $__internal_4bac2bddabc02e8bea34700424dc3b148bb69fd8e71759aa701b5704469f735c->enter($__internal_4bac2bddabc02e8bea34700424dc3b148bb69fd8e71759aa701b5704469f735c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4bac2bddabc02e8bea34700424dc3b148bb69fd8e71759aa701b5704469f735c->leave($__internal_4bac2bddabc02e8bea34700424dc3b148bb69fd8e71759aa701b5704469f735c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
