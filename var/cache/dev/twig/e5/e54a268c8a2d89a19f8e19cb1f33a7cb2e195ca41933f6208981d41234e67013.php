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
        $__internal_c7251f03dd15ef4d4cce5f65e2e08af365e43002e4a4ee8f557fb473de18db1c = $this->env->getExtension("native_profiler");
        $__internal_c7251f03dd15ef4d4cce5f65e2e08af365e43002e4a4ee8f557fb473de18db1c->enter($__internal_c7251f03dd15ef4d4cce5f65e2e08af365e43002e4a4ee8f557fb473de18db1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "theme1/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Bocor bootstrap 3 one page template</title>
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
\t
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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets//js/bootstrap.min.js"), "html", null, true);
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
        
        $__internal_c7251f03dd15ef4d4cce5f65e2e08af365e43002e4a4ee8f557fb473de18db1c->leave($__internal_c7251f03dd15ef4d4cce5f65e2e08af365e43002e4a4ee8f557fb473de18db1c_prof);

    }

    // line 18
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_44c98b573c6ec9df67504e2ce948c0061d922c8726c4d6c3e70926d28dc0180d = $this->env->getExtension("native_profiler");
        $__internal_44c98b573c6ec9df67504e2ce948c0061d922c8726c4d6c3e70926d28dc0180d->enter($__internal_44c98b573c6ec9df67504e2ce948c0061d922c8726c4d6c3e70926d28dc0180d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_44c98b573c6ec9df67504e2ce948c0061d922c8726c4d6c3e70926d28dc0180d->leave($__internal_44c98b573c6ec9df67504e2ce948c0061d922c8726c4d6c3e70926d28dc0180d_prof);

    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c5207f56796ae8510683fb59381c8a8e65c8d799d66db5a0ddc8ba7902ac461 = $this->env->getExtension("native_profiler");
        $__internal_4c5207f56796ae8510683fb59381c8a8e65c8d799d66db5a0ddc8ba7902ac461->enter($__internal_4c5207f56796ae8510683fb59381c8a8e65c8d799d66db5a0ddc8ba7902ac461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4c5207f56796ae8510683fb59381c8a8e65c8d799d66db5a0ddc8ba7902ac461->leave($__internal_4c5207f56796ae8510683fb59381c8a8e65c8d799d66db5a0ddc8ba7902ac461_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aa5608cfc0cedd7d8b227e3807f0af61f19334244ff5f9faac7cee22e15657bb = $this->env->getExtension("native_profiler");
        $__internal_aa5608cfc0cedd7d8b227e3807f0af61f19334244ff5f9faac7cee22e15657bb->enter($__internal_aa5608cfc0cedd7d8b227e3807f0af61f19334244ff5f9faac7cee22e15657bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_aa5608cfc0cedd7d8b227e3807f0af61f19334244ff5f9faac7cee22e15657bb->leave($__internal_aa5608cfc0cedd7d8b227e3807f0af61f19334244ff5f9faac7cee22e15657bb_prof);

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
        return array (  185 => 94,  174 => 65,  163 => 18,  152 => 95,  150 => 94,  146 => 93,  142 => 92,  138 => 91,  134 => 90,  108 => 66,  106 => 65,  58 => 19,  56 => 18,  52 => 17,  47 => 15,  43 => 14,  39 => 13,  25 => 1,);
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
/*     <title>Bocor bootstrap 3 one page template</title>*/
/* 	*/
/*     <!-- css -->*/
/*     <link href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('assets/css/bootstrap/bootstrap-theme.min.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('assets/css/bootstrap/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />*/
/* 	*/
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
/*     <script src="{{ asset('assets//js/bootstrap.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/custom.js') }}"></script>*/
/* 	{% block javascripts %}{% endblock %}*/
/*     */
/* </body>*/
/* */
/* </html>*/
/* */
