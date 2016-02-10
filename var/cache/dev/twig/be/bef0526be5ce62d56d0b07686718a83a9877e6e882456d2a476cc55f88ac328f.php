<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_767e96bffb6402c8f8590f479d8906317e9a66be189b42a018aee56f79e585a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_0a0f9ef730685e3047910fc853ea5e8b0085ae0828c25fd8a8dd2436a8b1373c = $this->env->getExtension("native_profiler");
        $__internal_0a0f9ef730685e3047910fc853ea5e8b0085ae0828c25fd8a8dd2436a8b1373c->enter($__internal_0a0f9ef730685e3047910fc853ea5e8b0085ae0828c25fd8a8dd2436a8b1373c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a0f9ef730685e3047910fc853ea5e8b0085ae0828c25fd8a8dd2436a8b1373c->leave($__internal_0a0f9ef730685e3047910fc853ea5e8b0085ae0828c25fd8a8dd2436a8b1373c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eb47721889f8ef38eef90c05d38cd451ad51c15200544d54fab02f6c147dd990 = $this->env->getExtension("native_profiler");
        $__internal_eb47721889f8ef38eef90c05d38cd451ad51c15200544d54fab02f6c147dd990->enter($__internal_eb47721889f8ef38eef90c05d38cd451ad51c15200544d54fab02f6c147dd990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_eb47721889f8ef38eef90c05d38cd451ad51c15200544d54fab02f6c147dd990->leave($__internal_eb47721889f8ef38eef90c05d38cd451ad51c15200544d54fab02f6c147dd990_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_81d2f66460abf7416baf6266621fadd725921af6bc89a81674ff6920c6fea7e4 = $this->env->getExtension("native_profiler");
        $__internal_81d2f66460abf7416baf6266621fadd725921af6bc89a81674ff6920c6fea7e4->enter($__internal_81d2f66460abf7416baf6266621fadd725921af6bc89a81674ff6920c6fea7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_81d2f66460abf7416baf6266621fadd725921af6bc89a81674ff6920c6fea7e4->leave($__internal_81d2f66460abf7416baf6266621fadd725921af6bc89a81674ff6920c6fea7e4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc605cb557a1062f3d2bf5a60638b8088dc6cb25542f62ffbd2665bea3850bab = $this->env->getExtension("native_profiler");
        $__internal_bc605cb557a1062f3d2bf5a60638b8088dc6cb25542f62ffbd2665bea3850bab->enter($__internal_bc605cb557a1062f3d2bf5a60638b8088dc6cb25542f62ffbd2665bea3850bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_bc605cb557a1062f3d2bf5a60638b8088dc6cb25542f62ffbd2665bea3850bab->leave($__internal_bc605cb557a1062f3d2bf5a60638b8088dc6cb25542f62ffbd2665bea3850bab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
