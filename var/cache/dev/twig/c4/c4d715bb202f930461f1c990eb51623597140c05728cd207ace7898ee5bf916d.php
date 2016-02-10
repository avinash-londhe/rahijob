<?php

/* :job-seeker/profile:personal-information.html.twig */
class __TwigTemplate_3e4d6f929ca80913a9f405a9ffd41ef4d27112ce16b40008afa88a6374b682e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("theme1/dashboard.html.twig", ":job-seeker/profile:personal-information.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "theme1/dashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82bcd8423f109f7131f7fb65adae928f4f08d638209aa28d430d0cafaa7192dc = $this->env->getExtension("native_profiler");
        $__internal_82bcd8423f109f7131f7fb65adae928f4f08d638209aa28d430d0cafaa7192dc->enter($__internal_82bcd8423f109f7131f7fb65adae928f4f08d638209aa28d430d0cafaa7192dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job-seeker/profile:personal-information.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82bcd8423f109f7131f7fb65adae928f4f08d638209aa28d430d0cafaa7192dc->leave($__internal_82bcd8423f109f7131f7fb65adae928f4f08d638209aa28d430d0cafaa7192dc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a61328baed22c4278fab65ff7dffe1b3be368708878612c817a09432c4acac4 = $this->env->getExtension("native_profiler");
        $__internal_5a61328baed22c4278fab65ff7dffe1b3be368708878612c817a09432c4acac4->enter($__internal_5a61328baed22c4278fab65ff7dffe1b3be368708878612c817a09432c4acac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5a61328baed22c4278fab65ff7dffe1b3be368708878612c817a09432c4acac4->leave($__internal_5a61328baed22c4278fab65ff7dffe1b3be368708878612c817a09432c4acac4_prof);

    }

    public function getTemplateName()
    {
        return ":job-seeker/profile:personal-information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  11 => 2,);
    }
}
/* */
/* {% extends 'theme1/dashboard.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/* {% endblock %}*/
/* */
/* */
/* */
