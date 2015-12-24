<?php

/* theme1/search.html.twig */
class __TwigTemplate_ae5a1cf09ce23b6f4c45a71b2de63227218a8a92a64d905a4afb4fbb30aca761 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("theme1/base.html.twig", "theme1/search.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "theme1/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6962e00d792ba8b6f58d782bf519aa7629356156928dc54fd43d8f884608c8df = $this->env->getExtension("native_profiler");
        $__internal_6962e00d792ba8b6f58d782bf519aa7629356156928dc54fd43d8f884608c8df->enter($__internal_6962e00d792ba8b6f58d782bf519aa7629356156928dc54fd43d8f884608c8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "theme1/search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6962e00d792ba8b6f58d782bf519aa7629356156928dc54fd43d8f884608c8df->leave($__internal_6962e00d792ba8b6f58d782bf519aa7629356156928dc54fd43d8f884608c8df_prof);

    }

    // line 2
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_e2f83a0749e3eaaaa9894c5ccdf9a6d261380bbc48aac0b3ffdf14224a30a3d4 = $this->env->getExtension("native_profiler");
        $__internal_e2f83a0749e3eaaaa9894c5ccdf9a6d261380bbc48aac0b3ffdf14224a30a3d4->enter($__internal_e2f83a0749e3eaaaa9894c5ccdf9a6d261380bbc48aac0b3ffdf14224a30a3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 3
        echo "<!--<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/nivo-lightbox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/nivo-lightbox-theme/default/default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/animations.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />-->
";
        
        $__internal_e2f83a0749e3eaaaa9894c5ccdf9a6d261380bbc48aac0b3ffdf14224a30a3d4->leave($__internal_e2f83a0749e3eaaaa9894c5ccdf9a6d261380bbc48aac0b3ffdf14224a30a3d4_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7cccbaece58dd4844354efff9c6e32de1602dec0e3cf8daa204a76b91cb18215 = $this->env->getExtension("native_profiler");
        $__internal_7cccbaece58dd4844354efff9c6e32de1602dec0e3cf8daa204a76b91cb18215->enter($__internal_7cccbaece58dd4844354efff9c6e32de1602dec0e3cf8daa204a76b91cb18215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<section class=\"hero\" id=\"intro\">
\t<div class=\"container\">
\t  <div class=\"row\">
\t\t<div class=\"col-md-12 text-right navicon\">
\t\t  <a id=\"nav-toggle\" class=\"nav_slide_button\" href=\"#\"><span></span></a>
\t\t</div>
\t  </div>
\t  <div class=\"row\">
\t\t<div class=\"col-md-8 col-md-offset-2 text-center inner\">
\t\t\t<div class=\"animatedParent\">
\t\t\t\t<h1 class=\"animated fadeInDown\">MUSIM BOCOR</h1>
\t\t\t\t<p class=\"animated fadeInUp\">Udah dari dulu tahu kalo bocor kenapa nggak ditambal tong</p>
\t\t\t\t
\t\t\t\t<table class=\"search-panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control input-lg\" id=\"skill\" placeholder=\"Skill\" required=\"required\" />
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control input-lg\" id=\"skill\" placeholder=\"Location\" required=\"required\" />
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div  style=\"height:46px;\">
\t\t\t\t\t\t\t\t<select name=\"experience\" id=\"experience\" class=\"form-control input-lg\">
\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"#about\" class=\"search-btn btn-scroll\">Search</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t
\t\t\t</div>
\t   </div>
\t  </div>
\t  <div class=\"row\">
\t\t<div class=\"col-md-6 col-md-offset-3 text-center\">
\t\t  <a href=\"#about\" class=\"learn-more-btn btn-scroll\">
\t\t\t  <i class=\"fa fa-fw fa-upload\"></i>
\t\t\t  Upload your cv
\t\t  </a>
\t\t</div>
\t  </div>
\t</div>
</section>
";
        
        $__internal_7cccbaece58dd4844354efff9c6e32de1602dec0e3cf8daa204a76b91cb18215->leave($__internal_7cccbaece58dd4844354efff9c6e32de1602dec0e3cf8daa204a76b91cb18215_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9e3d956f8dd077a8e1853679b68455d07376cff72a2e66b1d6bb7c99ef4bb97e = $this->env->getExtension("native_profiler");
        $__internal_9e3d956f8dd077a8e1853679b68455d07376cff72a2e66b1d6bb7c99ef4bb97e->enter($__internal_9e3d956f8dd077a8e1853679b68455d07376cff72a2e66b1d6bb7c99ef4bb97e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/nivo-lightbox.min.js"), "html", null, true);
        echo "\"></script>

<script>

</script>
<!--
<script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>\t
<script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.scrollTo.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.appear.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/stellar.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/nivo-lightbox.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/css3-animate-it.js"), "html", null, true);
        echo "\"></script>
-->
";
        
        $__internal_9e3d956f8dd077a8e1853679b68455d07376cff72a2e66b1d6bb7c99ef4bb97e->leave($__internal_9e3d956f8dd077a8e1853679b68455d07376cff72a2e66b1d6bb7c99ef4bb97e_prof);

    }

    public function getTemplateName()
    {
        return "theme1/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 69,  152 => 68,  148 => 67,  144 => 66,  140 => 65,  136 => 64,  126 => 58,  120 => 57,  66 => 8,  60 => 7,  51 => 5,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'theme1/base.html.twig' %}*/
/* {% block stylesheet %}*/
/* <!--<link href="{{ asset('assets/css/nivo-lightbox.css') }}" rel="stylesheet" />*/
/* 	<link href="{{ asset('assets/css/nivo-lightbox-theme/default/default.css') }}" rel="stylesheet" type="text/css" />*/
/* 	<link href="{{ asset('assets/css/animations.css') }}" rel="stylesheet" />-->*/
/* {% endblock %}*/
/* {% block body %}*/
/* <section class="hero" id="intro">*/
/* 	<div class="container">*/
/* 	  <div class="row">*/
/* 		<div class="col-md-12 text-right navicon">*/
/* 		  <a id="nav-toggle" class="nav_slide_button" href="#"><span></span></a>*/
/* 		</div>*/
/* 	  </div>*/
/* 	  <div class="row">*/
/* 		<div class="col-md-8 col-md-offset-2 text-center inner">*/
/* 			<div class="animatedParent">*/
/* 				<h1 class="animated fadeInDown">MUSIM BOCOR</h1>*/
/* 				<p class="animated fadeInUp">Udah dari dulu tahu kalo bocor kenapa nggak ditambal tong</p>*/
/* 				*/
/* 				<table class="search-panel">*/
/* 					<tr>*/
/* 						<td>*/
/* 							<input type="text" class="form-control input-lg" id="skill" placeholder="Skill" required="required" />*/
/* 						</td>*/
/* 						<td>*/
/* 							<input type="text" class="form-control input-lg" id="skill" placeholder="Location" required="required" />*/
/* 						</td>*/
/* 						<td>*/
/* 							<div  style="height:46px;">*/
/* 								<select name="experience" id="experience" class="form-control input-lg">*/
/* 									<option value="2">2</option>*/
/* 								</select>*/
/* 							</div>*/
/* 						</td>*/
/* 						<td>*/
/* 							<a href="#about" class="search-btn btn-scroll">Search</a>*/
/* 						</td>*/
/* 					</tr>*/
/* 				</table>*/
/* 				*/
/* 			</div>*/
/* 	   </div>*/
/* 	  </div>*/
/* 	  <div class="row">*/
/* 		<div class="col-md-6 col-md-offset-3 text-center">*/
/* 		  <a href="#about" class="learn-more-btn btn-scroll">*/
/* 			  <i class="fa fa-fw fa-upload"></i>*/
/* 			  Upload your cv*/
/* 		  </a>*/
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* </section>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* <script src="{{ asset('assets/js/nivo-lightbox.min.js') }}"></script>*/
/* */
/* <script>*/
/* */
/* </script>*/
/* <!--*/
/* <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>	*/
/* <script src="{{ asset('assets/js/jquery.scrollTo.js') }}"></script>*/
/* <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>*/
/* <script src="{{ asset('assets/js/stellar.js') }}"></script>*/
/* <script src="{{ asset('assets/js/nivo-lightbox.min.js') }}"></script>*/
/* <script src="{{ asset('assets/js/css3-animate-it.js') }}"></script>*/
/* -->*/
/* {% endblock %}*/
/* */
