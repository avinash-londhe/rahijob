<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a090d25e9e5ec04488646e2f85ca89e4d0235272ee989ec3e230f8795e845155 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b2ffcfbbbeebbe52870095d9263b46da0801c94502c09b1046a58e35e989b22 = $this->env->getExtension("native_profiler");
        $__internal_8b2ffcfbbbeebbe52870095d9263b46da0801c94502c09b1046a58e35e989b22->enter($__internal_8b2ffcfbbbeebbe52870095d9263b46da0801c94502c09b1046a58e35e989b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b2ffcfbbbeebbe52870095d9263b46da0801c94502c09b1046a58e35e989b22->leave($__internal_8b2ffcfbbbeebbe52870095d9263b46da0801c94502c09b1046a58e35e989b22_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c40addfa9141fd865cbaa016a60f677d279a3cf4bedb926d97aa5e7989968f08 = $this->env->getExtension("native_profiler");
        $__internal_c40addfa9141fd865cbaa016a60f677d279a3cf4bedb926d97aa5e7989968f08->enter($__internal_c40addfa9141fd865cbaa016a60f677d279a3cf4bedb926d97aa5e7989968f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c40addfa9141fd865cbaa016a60f677d279a3cf4bedb926d97aa5e7989968f08->leave($__internal_c40addfa9141fd865cbaa016a60f677d279a3cf4bedb926d97aa5e7989968f08_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b4e856178deac231a1f85065a4014bc9b7515f16e08ae3fc3b31c5368d89b1e = $this->env->getExtension("native_profiler");
        $__internal_4b4e856178deac231a1f85065a4014bc9b7515f16e08ae3fc3b31c5368d89b1e->enter($__internal_4b4e856178deac231a1f85065a4014bc9b7515f16e08ae3fc3b31c5368d89b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_4b4e856178deac231a1f85065a4014bc9b7515f16e08ae3fc3b31c5368d89b1e->leave($__internal_4b4e856178deac231a1f85065a4014bc9b7515f16e08ae3fc3b31c5368d89b1e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
