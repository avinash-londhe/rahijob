<?php

/* base.html.twig */
class __TwigTemplate_b38ca5ace5473f2d6111b1540a22dd2409faedf75a7545be6ccdcc3e4644d449 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a6b05cf9ed71b0c272af8ada8e6e5a34db80a0651bcc76daef8199245eb8480 = $this->env->getExtension("native_profiler");
        $__internal_0a6b05cf9ed71b0c272af8ada8e6e5a34db80a0651bcc76daef8199245eb8480->enter($__internal_0a6b05cf9ed71b0c272af8ada8e6e5a34db80a0651bcc76daef8199245eb8480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0a6b05cf9ed71b0c272af8ada8e6e5a34db80a0651bcc76daef8199245eb8480->leave($__internal_0a6b05cf9ed71b0c272af8ada8e6e5a34db80a0651bcc76daef8199245eb8480_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_58643d40355c8deb101e8e60e5f0873ad6a021621a5284937e6da46a44775e59 = $this->env->getExtension("native_profiler");
        $__internal_58643d40355c8deb101e8e60e5f0873ad6a021621a5284937e6da46a44775e59->enter($__internal_58643d40355c8deb101e8e60e5f0873ad6a021621a5284937e6da46a44775e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_58643d40355c8deb101e8e60e5f0873ad6a021621a5284937e6da46a44775e59->leave($__internal_58643d40355c8deb101e8e60e5f0873ad6a021621a5284937e6da46a44775e59_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_86e0e1ca28ff4e8ecacda8149cea11fce741e0a225cec603548c91b8f85c41fb = $this->env->getExtension("native_profiler");
        $__internal_86e0e1ca28ff4e8ecacda8149cea11fce741e0a225cec603548c91b8f85c41fb->enter($__internal_86e0e1ca28ff4e8ecacda8149cea11fce741e0a225cec603548c91b8f85c41fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_86e0e1ca28ff4e8ecacda8149cea11fce741e0a225cec603548c91b8f85c41fb->leave($__internal_86e0e1ca28ff4e8ecacda8149cea11fce741e0a225cec603548c91b8f85c41fb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b7ace90b689bc4c227ef88d10f1194f17d285152b3c65fd9ef9df3e1fbdd39f = $this->env->getExtension("native_profiler");
        $__internal_4b7ace90b689bc4c227ef88d10f1194f17d285152b3c65fd9ef9df3e1fbdd39f->enter($__internal_4b7ace90b689bc4c227ef88d10f1194f17d285152b3c65fd9ef9df3e1fbdd39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4b7ace90b689bc4c227ef88d10f1194f17d285152b3c65fd9ef9df3e1fbdd39f->leave($__internal_4b7ace90b689bc4c227ef88d10f1194f17d285152b3c65fd9ef9df3e1fbdd39f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6ef3d48e3fc9cab3a757c0d09508db6d165bf071ec76b3f137f131ae75c26f0a = $this->env->getExtension("native_profiler");
        $__internal_6ef3d48e3fc9cab3a757c0d09508db6d165bf071ec76b3f137f131ae75c26f0a->enter($__internal_6ef3d48e3fc9cab3a757c0d09508db6d165bf071ec76b3f137f131ae75c26f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6ef3d48e3fc9cab3a757c0d09508db6d165bf071ec76b3f137f131ae75c26f0a->leave($__internal_6ef3d48e3fc9cab3a757c0d09508db6d165bf071ec76b3f137f131ae75c26f0a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
