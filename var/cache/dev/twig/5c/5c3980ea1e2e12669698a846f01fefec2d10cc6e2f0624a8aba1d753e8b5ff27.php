<?php

/* theme1/dashboard,html.twig */
class __TwigTemplate_3f17e40301bfaecd2df91995b35cecd404f89f4527c74d42eee188b309419949 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a41b4812723fdc638e1fa687ea0d1f373f382a2db45f39b0692186cde36ce2e = $this->env->getExtension("native_profiler");
        $__internal_3a41b4812723fdc638e1fa687ea0d1f373f382a2db45f39b0692186cde36ce2e->enter($__internal_3a41b4812723fdc638e1fa687ea0d1f373f382a2db45f39b0692186cde36ce2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "theme1/dashboard,html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Rahi</title>

    <!-- css -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap/bootstrap-theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap/ionicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/dashboard/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 17
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 18
        echo "

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
</head>
<body class=\"skin-black\">
<!-- header logo: style can be found in header.less -->
<header class=\"header\">
    ";
        // line 30
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("JobSeeker:Profile:header"));
        echo "
</header>
<div class=\"wrapper row-offcanvas row-offcanvas-left\">

    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"left-side sidebar-offcanvas\">
        ";
        // line 36
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("JobSeeker:Profile:menu", array("currentPage" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"))));
        echo "
    </aside>

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class=\"right-side\">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class=\"content\">
            ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "        </section><!-- /.content -->
    </aside>
    <!-- /.right-side -->
    <div class=\"footer-main\">
        Copyright &copy Director, 2014
    </div>
</div><!-- ./wrapper -->

<!-- Core JavaScript Files -->
<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/dashboard/app.js"), "html", null, true);
        echo "\"></script>
";
        // line 58
        $this->displayBlock('javascripts', $context, $blocks);
        // line 59
        echo "

</body>
</html>";
        
        $__internal_3a41b4812723fdc638e1fa687ea0d1f373f382a2db45f39b0692186cde36ce2e->leave($__internal_3a41b4812723fdc638e1fa687ea0d1f373f382a2db45f39b0692186cde36ce2e_prof);

    }

    // line 17
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_7f981701c6ad55becec4ee5438dee902f58072a372fb79609ca29d85f3ff0ba3 = $this->env->getExtension("native_profiler");
        $__internal_7f981701c6ad55becec4ee5438dee902f58072a372fb79609ca29d85f3ff0ba3->enter($__internal_7f981701c6ad55becec4ee5438dee902f58072a372fb79609ca29d85f3ff0ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_7f981701c6ad55becec4ee5438dee902f58072a372fb79609ca29d85f3ff0ba3->leave($__internal_7f981701c6ad55becec4ee5438dee902f58072a372fb79609ca29d85f3ff0ba3_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_1441be65cd05a5b70c28b056ee28db59485ad2e193f9324b7246e8e5b54bf05e = $this->env->getExtension("native_profiler");
        $__internal_1441be65cd05a5b70c28b056ee28db59485ad2e193f9324b7246e8e5b54bf05e->enter($__internal_1441be65cd05a5b70c28b056ee28db59485ad2e193f9324b7246e8e5b54bf05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1441be65cd05a5b70c28b056ee28db59485ad2e193f9324b7246e8e5b54bf05e->leave($__internal_1441be65cd05a5b70c28b056ee28db59485ad2e193f9324b7246e8e5b54bf05e_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_abb60c6ceb7f838f23afd0dfe341c7758b1cf7a5fb8c80f9263cd4af1d6464d5 = $this->env->getExtension("native_profiler");
        $__internal_abb60c6ceb7f838f23afd0dfe341c7758b1cf7a5fb8c80f9263cd4af1d6464d5->enter($__internal_abb60c6ceb7f838f23afd0dfe341c7758b1cf7a5fb8c80f9263cd4af1d6464d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_abb60c6ceb7f838f23afd0dfe341c7758b1cf7a5fb8c80f9263cd4af1d6464d5->leave($__internal_abb60c6ceb7f838f23afd0dfe341c7758b1cf7a5fb8c80f9263cd4af1d6464d5_prof);

    }

    public function getTemplateName()
    {
        return "theme1/dashboard,html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 58,  143 => 45,  132 => 17,  122 => 59,  120 => 58,  116 => 57,  112 => 56,  108 => 55,  97 => 46,  95 => 45,  83 => 36,  74 => 30,  60 => 18,  58 => 17,  54 => 16,  50 => 15,  46 => 14,  42 => 13,  38 => 12,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <title>Rahi</title>*/
/* */
/*     <!-- css -->*/
/*     <link href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('assets/css/bootstrap/bootstrap-theme.min.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('assets/css/bootstrap/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{ asset('assets/css/bootstrap/ionicons.min.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('assets/css/dashboard/style.css') }}" rel="stylesheet">*/
/*     {% block stylesheet %}{% endblock %}*/
/* */
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*     <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* <body class="skin-black">*/
/* <!-- header logo: style can be found in header.less -->*/
/* <header class="header">*/
/*     {{ render(controller('JobSeeker:Profile:header')) }}*/
/* </header>*/
/* <div class="wrapper row-offcanvas row-offcanvas-left">*/
/* */
/*     <!-- Left side column. contains the logo and sidebar -->*/
/*     <aside class="left-side sidebar-offcanvas">*/
/*         {{ render(controller('JobSeeker:Profile:menu', { 'currentPage': app.request.get('_route') })) }}*/
/*     </aside>*/
/* */
/*     <!-- Right side column. Contains the navbar and content of the page -->*/
/*     <aside class="right-side">*/
/*         <!-- Content Header (Page header) -->*/
/* */
/*         <!-- Main content -->*/
/*         <section class="content">*/
/*             {% block body %}{% endblock %}*/
/*         </section><!-- /.content -->*/
/*     </aside>*/
/*     <!-- /.right-side -->*/
/*     <div class="footer-main">*/
/*         Copyright &copy Director, 2014*/
/*     </div>*/
/* </div><!-- ./wrapper -->*/
/* */
/* <!-- Core JavaScript Files -->*/
/* <script src="{{ asset('assets/js/jquery.min.js') }}"></script>*/
/* <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>*/
/* <script src="{{ asset('assets/js/dashboard/app.js') }}"></script>*/
/* {% block javascripts %}{% endblock %}*/
/* */
/* */
/* </body>*/
/* </html>*/
