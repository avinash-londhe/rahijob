<?php

/* :job-seeker:login.html.twig */
class __TwigTemplate_d52ada7be3384306e53eed63139aedf94b5c306119052ca73ec042e8f3ce2d4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("theme1/base.html.twig", ":job-seeker:login.html.twig", 2);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "theme1/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5dfebc4aa10f0c3e8c18af1838f3bbeaf98c22d89ed1116a674deb41d5856883 = $this->env->getExtension("native_profiler");
        $__internal_5dfebc4aa10f0c3e8c18af1838f3bbeaf98c22d89ed1116a674deb41d5856883->enter($__internal_5dfebc4aa10f0c3e8c18af1838f3bbeaf98c22d89ed1116a674deb41d5856883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job-seeker:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dfebc4aa10f0c3e8c18af1838f3bbeaf98c22d89ed1116a674deb41d5856883->leave($__internal_5dfebc4aa10f0c3e8c18af1838f3bbeaf98c22d89ed1116a674deb41d5856883_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_923768abe87eb9829bf36b987a9254544f5b31293cde433f2ea513b4ba28e9d8 = $this->env->getExtension("native_profiler");
        $__internal_923768abe87eb9829bf36b987a9254544f5b31293cde433f2ea513b4ba28e9d8->enter($__internal_923768abe87eb9829bf36b987a9254544f5b31293cde433f2ea513b4ba28e9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/theme1/form-element.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_923768abe87eb9829bf36b987a9254544f5b31293cde433f2ea513b4ba28e9d8->leave($__internal_923768abe87eb9829bf36b987a9254544f5b31293cde433f2ea513b4ba28e9d8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbdd38b00cda6e7d5498df9d242721f267d73de72f554bb6a07aca5db35d4788 = $this->env->getExtension("native_profiler");
        $__internal_dbdd38b00cda6e7d5498df9d242721f267d73de72f554bb6a07aca5db35d4788->enter($__internal_dbdd38b00cda6e7d5498df9d242721f267d73de72f554bb6a07aca5db35d4788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    <div>
        <div class=\"navigation_header\">
            Job Seeker Login
        </div>

        <div class=\"container containerPage\">
            <div class=\"row\">
                <div class=\"col-sm-5\">
                    <div class=\"panel panel-default\">


                        <div class=\"panel-heading clearfix\">
                            <h3 class=\"panel-title\">Login</h3>
                        </div>
                        <div class=\"panel-body normal-padding row\">

                            <div class=\"error\">
                                ";
        // line 27
        if ($this->getAttribute((isset($context["resultSet"]) ? $context["resultSet"] : null), "error", array(), "any", true, true)) {
            // line 28
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resultSet"]) ? $context["resultSet"] : $this->getContext($context, "resultSet")), "error", array()), "html", null, true);
            echo "
                                ";
        }
        // line 30
        echo "                            </div>

                            <div class=\"\">

                                <table>
                                    <tr>
                                        <td>
                                            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label');
        echo "</td>
                                        <td>
                                            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo "
                                        </td>
                                    </tr>
                                </table>

                            </div>

                            <div class=\"\">

                                <table>
                                    <tr>
                                        <td>
                                            <div class=\"single-content\">
                                                <a >Forgot password ?</a><br>
                                                <a>Create account with us?</a>
                                            </div>


                                        </td>
                                        <td class=\"floatRight\">

                                            ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
                                        </td>
                                    </tr>

                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    ";
        // line 86
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_dbdd38b00cda6e7d5498df9d242721f267d73de72f554bb6a07aca5db35d4788->leave($__internal_dbdd38b00cda6e7d5498df9d242721f267d73de72f554bb6a07aca5db35d4788_prof);

    }

    public function getTemplateName()
    {
        return ":job-seeker:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 86,  148 => 70,  124 => 49,  120 => 48,  115 => 46,  107 => 41,  103 => 40,  97 => 37,  88 => 30,  82 => 28,  80 => 27,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 2,);
    }
}
/* */
/* {% extends 'theme1/base.html.twig' %}*/
/* {% block stylesheet %}*/
/*     <link href="{{ asset('assets/css/theme1/form-element.css') }}" rel="stylesheet" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ form_start(form) }}*/
/* */
/*     <div>*/
/*         <div class="navigation_header">*/
/*             Job Seeker Login*/
/*         </div>*/
/* */
/*         <div class="container containerPage">*/
/*             <div class="row">*/
/*                 <div class="col-sm-5">*/
/*                     <div class="panel panel-default">*/
/* */
/* */
/*                         <div class="panel-heading clearfix">*/
/*                             <h3 class="panel-title">Login</h3>*/
/*                         </div>*/
/*                         <div class="panel-body normal-padding row">*/
/* */
/*                             <div class="error">*/
/*                                 {% if resultSet.error is defined %}*/
/*                                     {{ resultSet.error }}*/
/*                                 {% endif %}*/
/*                             </div>*/
/* */
/*                             <div class="">*/
/* */
/*                                 <table>*/
/*                                     <tr>*/
/*                                         <td>*/
/*                                             {{ form_label(form.email) }}*/
/*                                         </td>*/
/*                                         <td>*/
/*                                             {{ form_widget(form.email, { 'attr': {'class': 'form-control'} }) }}*/
/*                                             {{ form_errors(form.email) }}*/
/*                                         </td>*/
/*                                     </tr>*/
/* */
/*                                     <tr>*/
/*                                         <td>{{ form_label(form.password) }}</td>*/
/*                                         <td>*/
/*                                             {{ form_widget(form.password, { 'attr': {'class': 'form-control'} }) }}*/
/*                                             {{ form_errors(form.password) }}*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                 </table>*/
/* */
/*                             </div>*/
/* */
/*                             <div class="">*/
/* */
/*                                 <table>*/
/*                                     <tr>*/
/*                                         <td>*/
/*                                             <div class="single-content">*/
/*                                                 <a >Forgot password ?</a><br>*/
/*                                                 <a>Create account with us?</a>*/
/*                                             </div>*/
/* */
/* */
/*                                         </td>*/
/*                                         <td class="floatRight">*/
/* */
/*                                             {{ form_widget(form.login, { 'attr': {'class': 'btn btn-primary'} }) }}*/
/*                                         </td>*/
/*                                     </tr>*/
/* */
/*                                 </table>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* */
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
/* */
/* */
/* */
