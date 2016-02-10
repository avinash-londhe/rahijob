<?php

/* theme1/base.html.twig */
class __TwigTemplate_2d3c9ab21cdec0553e821d1519901018ff79cf6e77da249c4fa4cfdfd55ee02e extends Twig_Template
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
        $__internal_589b81c08bc8cc0e16abdb08fe3dc58c7e15c02fa147a4de45c2451a45d38a08 = $this->env->getExtension("native_profiler");
        $__internal_589b81c08bc8cc0e16abdb08fe3dc58c7e15c02fa147a4de45c2451a45d38a08->enter($__internal_589b81c08bc8cc0e16abdb08fe3dc58c7e15c02fa147a4de45c2451a45d38a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "theme1/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Rahi</title>
\t
    <!-- css -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap/bootstrap-theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/theme1/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 18
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 19
        echo "</head>

<body id=\"page-top\" data-spy=\"scroll\" data-target=\".navbar-custom\">
\t<!-- Navigation -->
    <div id=\"navigation\">
        <nav class=\"navbar navbar-custom\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-2\">
                        <div class=\"site-logo\">
                            <a href=\"index.html\" class=\"brand\">Bocor</a>
                        </div>
                    </div>


                    <div class=\"col-md-10\">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#menu\">
                            <i class=\"fa fa-bars\"></i>
                            </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class=\"collapse navbar-collapse\" id=\"menu\">
                            <ul class=\"nav navbar-nav navbar-right\">
                                  <li class=\"active\"><a href=\"#intro\">Home</a></li>
                                  <li><a href=\"#about\">About Us</a></li>
                                   <li><a href=\"#service\">Services</a></li>
                                  <li><a href=\"#works\">Works</a></li>\t\t\t\t                                                                  
                                  
                                  <li><a href=\"#contact\">Contact</a></li>
                            </ul>
                            <!-- <a role=\"button\" href=\"#\" class=\"btn btn-lg btn-primary\">Sign up today</a> -->
                        </div>
                        <!-- /.Navbar-collapse -->

                    </div>
                </div>
            </div>
            <!-- /.container -->
        </nav>
    </div> 
    <!-- /Navigation -->  
    
    
\t
    ";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 66
        echo "\t

\t<footer>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<ul class=\"footer-menu\">
\t\t\t\t\t\t<li><a href=\"#\">Home</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Press release</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 text-right\">
\t\t\t\t\t<p>&copy;Copyright 2014 - Bocor. Designed by <a href=\"http://bootstraptaste.com\">Bootstrap Themes</a></p>
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Bocor
                    -->
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div>
\t</footer>

    <!-- Core JavaScript Files -->
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>\t 
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
\t";
        // line 94
        $this->displayBlock('javascripts', $context, $blocks);
        // line 95
        echo "    
</body>

</html>
";
        
        $__internal_589b81c08bc8cc0e16abdb08fe3dc58c7e15c02fa147a4de45c2451a45d38a08->leave($__internal_589b81c08bc8cc0e16abdb08fe3dc58c7e15c02fa147a4de45c2451a45d38a08_prof);

    }

    // line 18
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_b91769ea89ffe747583ecdbfe2be7213efc073881ed816b150852226cb49c12e = $this->env->getExtension("native_profiler");
        $__internal_b91769ea89ffe747583ecdbfe2be7213efc073881ed816b150852226cb49c12e->enter($__internal_b91769ea89ffe747583ecdbfe2be7213efc073881ed816b150852226cb49c12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_b91769ea89ffe747583ecdbfe2be7213efc073881ed816b150852226cb49c12e->leave($__internal_b91769ea89ffe747583ecdbfe2be7213efc073881ed816b150852226cb49c12e_prof);

    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        $__internal_079917acca25e53bd14ad97aacfe5bac6e18d0dec1f1fb301bf3130adf8875aa = $this->env->getExtension("native_profiler");
        $__internal_079917acca25e53bd14ad97aacfe5bac6e18d0dec1f1fb301bf3130adf8875aa->enter($__internal_079917acca25e53bd14ad97aacfe5bac6e18d0dec1f1fb301bf3130adf8875aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_079917acca25e53bd14ad97aacfe5bac6e18d0dec1f1fb301bf3130adf8875aa->leave($__internal_079917acca25e53bd14ad97aacfe5bac6e18d0dec1f1fb301bf3130adf8875aa_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7c0336b8da1b1df7663504c08acdafeca66205adc54a9c2849a6d0a6220db58b = $this->env->getExtension("native_profiler");
        $__internal_7c0336b8da1b1df7663504c08acdafeca66205adc54a9c2849a6d0a6220db58b->enter($__internal_7c0336b8da1b1df7663504c08acdafeca66205adc54a9c2849a6d0a6220db58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7c0336b8da1b1df7663504c08acdafeca66205adc54a9c2849a6d0a6220db58b->leave($__internal_7c0336b8da1b1df7663504c08acdafeca66205adc54a9c2849a6d0a6220db58b_prof);

    }

    public function getTemplateName()
    {
        return "theme1/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 94,  177 => 65,  166 => 18,  155 => 95,  153 => 94,  149 => 93,  145 => 92,  141 => 91,  137 => 90,  111 => 66,  109 => 65,  61 => 19,  59 => 18,  55 => 17,  51 => 16,  47 => 15,  43 => 14,  39 => 13,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <title>Rahi</title>*/
/* 	*/
/*     <!-- css -->*/
/*     <link href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('assets/css/bootstrap/bootstrap-theme.min.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('assets/css/bootstrap/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{ asset('assets/css/theme1/main.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">*/
/*     {% block stylesheet %}{% endblock %}*/
/* </head>*/
/* */
/* <body id="page-top" data-spy="scroll" data-target=".navbar-custom">*/
/* 	<!-- Navigation -->*/
/*     <div id="navigation">*/
/*         <nav class="navbar navbar-custom" role="navigation">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-md-2">*/
/*                         <div class="site-logo">*/
/*                             <a href="index.html" class="brand">Bocor</a>*/
/*                         </div>*/
/*                     </div>*/
/* */
/* */
/*                     <div class="col-md-10">*/
/*                         <!-- Brand and toggle get grouped for better mobile display -->*/
/*                         <div class="navbar-header">*/
/*                             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">*/
/*                             <i class="fa fa-bars"></i>*/
/*                             </button>*/
/*                         </div>*/
/*                         <!-- Collect the nav links, forms, and other content for toggling -->*/
/*                         <div class="collapse navbar-collapse" id="menu">*/
/*                             <ul class="nav navbar-nav navbar-right">*/
/*                                   <li class="active"><a href="#intro">Home</a></li>*/
/*                                   <li><a href="#about">About Us</a></li>*/
/*                                    <li><a href="#service">Services</a></li>*/
/*                                   <li><a href="#works">Works</a></li>				                                                                  */
/*                                   */
/*                                   <li><a href="#contact">Contact</a></li>*/
/*                             </ul>*/
/*                             <!-- <a role="button" href="#" class="btn btn-lg btn-primary">Sign up today</a> -->*/
/*                         </div>*/
/*                         <!-- /.Navbar-collapse -->*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- /.container -->*/
/*         </nav>*/
/*     </div> */
/*     <!-- /Navigation -->  */
/*     */
/*     */
/* 	*/
/*     {% block body %}{% endblock %}*/
/* 	*/
/* */
/* 	<footer>*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="col-md-6">*/
/* 					<ul class="footer-menu">*/
/* 						<li><a href="#">Home</a></li>*/
/* 						<li><a href="#">Press release</a></li>*/
/* 					</ul>*/
/* 				</div>*/
/* 				<div class="col-md-6 text-right">*/
/* 					<p>&copy;Copyright 2014 - Bocor. Designed by <a href="http://bootstraptaste.com">Bootstrap Themes</a></p>*/
/*                     <!-- */
/*                         All links in the footer should remain intact. */
/*                         Licenseing information is available at: http://bootstraptaste.com/license/*/
/*                         You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Bocor*/
/*                     -->*/
/* 				</div>*/
/* 			</div>	*/
/* 		</div>*/
/* 	</footer>*/
/* */
/*     <!-- Core JavaScript Files -->*/
/*     <script src="{{ asset('assets/js/jquery.min.js') }}"></script>	 */
/*     <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/custom.js') }}"></script>*/
/* 	{% block javascripts %}{% endblock %}*/
/*     */
/* </body>*/
/* */
/* </html>*/
/* */
