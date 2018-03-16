<?php

/* AssoBundle:Home:about.html.twig */
class __TwigTemplate_7d4d258f2a89bf61dd6af12be1ef46d3c65daa5ff22dea8b0db14ae42ab7baa2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AssoBundle::layout_large.html.twig", "AssoBundle:Home:about.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AssoBundle::layout_large.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9feed429a8bdeadbb23ff1ad6a4036221770cf4d26bd375aa80d7952c7f9d72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9feed429a8bdeadbb23ff1ad6a4036221770cf4d26bd375aa80d7952c7f9d72->enter($__internal_c9feed429a8bdeadbb23ff1ad6a4036221770cf4d26bd375aa80d7952c7f9d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AssoBundle:Home:about.html.twig"));

        $__internal_e3ef1c2fc42c9dff67a83b416081e93104cbb89bdc6422dbb3934cc5c018e263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ef1c2fc42c9dff67a83b416081e93104cbb89bdc6422dbb3934cc5c018e263->enter($__internal_e3ef1c2fc42c9dff67a83b416081e93104cbb89bdc6422dbb3934cc5c018e263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AssoBundle:Home:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9feed429a8bdeadbb23ff1ad6a4036221770cf4d26bd375aa80d7952c7f9d72->leave($__internal_c9feed429a8bdeadbb23ff1ad6a4036221770cf4d26bd375aa80d7952c7f9d72_prof);

        
        $__internal_e3ef1c2fc42c9dff67a83b416081e93104cbb89bdc6422dbb3934cc5c018e263->leave($__internal_e3ef1c2fc42c9dff67a83b416081e93104cbb89bdc6422dbb3934cc5c018e263_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4031d9175450d6adad1e6065554a9538d1b5aadab6e86a636937ee23d1bbc3cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4031d9175450d6adad1e6065554a9538d1b5aadab6e86a636937ee23d1bbc3cb->enter($__internal_4031d9175450d6adad1e6065554a9538d1b5aadab6e86a636937ee23d1bbc3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2034927841423b3024b066df8d236e21a68f20458990a311bb5a848fd71483f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2034927841423b3024b066df8d236e21a68f20458990a311bb5a848fd71483f3->enter($__internal_2034927841423b3024b066df8d236e21a68f20458990a311bb5a848fd71483f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["page_titre"]) || array_key_exists("page_titre", $context) ? $context["page_titre"] : (function () { throw new Twig_Error_Runtime('Variable "page_titre" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        
        $__internal_2034927841423b3024b066df8d236e21a68f20458990a311bb5a848fd71483f3->leave($__internal_2034927841423b3024b066df8d236e21a68f20458990a311bb5a848fd71483f3_prof);

        
        $__internal_4031d9175450d6adad1e6065554a9538d1b5aadab6e86a636937ee23d1bbc3cb->leave($__internal_4031d9175450d6adad1e6065554a9538d1b5aadab6e86a636937ee23d1bbc3cb_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_c7b6757e9eff3da87d150f5156b2d7b434b405733f43cef9b9a0dee292f6dccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7b6757e9eff3da87d150f5156b2d7b434b405733f43cef9b9a0dee292f6dccd->enter($__internal_c7b6757e9eff3da87d150f5156b2d7b434b405733f43cef9b9a0dee292f6dccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1114de0fe6858e0f06aad1e8051f332a6b42b5912490e7c0e9001c462b9fe8b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1114de0fe6858e0f06aad1e8051f332a6b42b5912490e7c0e9001c462b9fe8b7->enter($__internal_1114de0fe6858e0f06aad1e8051f332a6b42b5912490e7c0e9001c462b9fe8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "
    <!-- Qui sommes-nous? -->
    <div class=\"py-5 section-parallax\" style=\"background-image: url(";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/pic/DSC_7362.png"), "html", null, true);
        echo ");\">
        <div class=\"container my-5 bg-about p-4\">
            <div class=\"row py-3\">
                <div class=\"col-md-12 text-center\">
                    <h1 class=\"mt-4 text-secondary\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("page_title_about"), "html", null, true);
        echo "</h1>
                    <h5 class=\"text-dark\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("about.text.1"), "html", null, true);
        echo "</h5>
                    <h5 class=\"text-dark\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("about.text.2"), "html", null, true);
        echo " <span class=\"text-primary\">W771011659</span>;</h5>
                    <h5 class=\"text-uppercase text-secondary\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("about.text.3"), "html", null, true);
        echo "</h5>
                    <p class=\"text-justify\">
                        <ul>
                            <li><h5 class=\"text-dark\">- ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("about.text.4"), "html", null, true);
        echo ",</h5></li>
                            <li><h5 class=\"text-dark\">- ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("about.text.5"), "html", null, true);
        echo ".</h5></li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Histoire d'educapeace -->
    <div class=\"py-5 section-parallax\" style=\"background-image: url(";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/pic/DSC_7362.png"), "html", null, true);
        echo ");\">
        <div class=\"container my-5 bg-light p-4\">
            <div class=\"row py-3\">
                <div class=\"col-md-12 text-center\">
                    <h1 class=\"mt-4 text-secondary\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.title.4"), "html", null, true);
        echo "</h1>
                    <p class=\"text-justify\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.history.1"), "html", null, true);
        echo "</p>
                    <p class=\"text-justify\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.history.2"), "html", null, true);
        echo "</p>
                    <p class=\"text-justify\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.history.3"), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Notre équipe -->
    <div class=\"py-5 section-parallax\" style=\"background-image: url(";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/pic/DSC_7362.png"), "html", null, true);
        echo ");\">
        <div class=\"container my-5 bg-about p-4\">
            <div class=\"row py-3\">
                <div class=\"col-md-12 text-center\">
                    <h1 class=\"mt-4 text-secondary\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.title.3"), "html", null, true);
        echo "</h1>
                    <h5 class=\"text-uppercase text-secondary\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.title.5"), "html", null, true);
        echo "</h5>
                    <p class=\"text-center\">
                        <br> • ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.70"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.team.1"), "html", null, true);
        echo ",
                        <br> • ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.71"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.team.2"), "html", null, true);
        echo ",
                        <br> • ";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.72"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.team.3"), "html", null, true);
        echo ",
                        <br> • ";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.73"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.team.4"), "html", null, true);
        echo ",
                        <br> • ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.74"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.team.5"), "html", null, true);
        echo ".
                    </p>
                    <h5 class=\"text-uppercase text-secondary\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.title.6"), "html", null, true);
        echo "</h5>
                    <p class=\"text-center\">
                        ";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.75"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.numero.wouri"), "html", null, true);
        echo ".<br />
                        ";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.76"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.77"), "html", null, true);
        echo "<br />
                        ";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.78"), "html", null, true);
        echo "
                    </p>
                </div>
            </div>
        </div>
    </div>
    <hr>
";
        
        $__internal_1114de0fe6858e0f06aad1e8051f332a6b42b5912490e7c0e9001c462b9fe8b7->leave($__internal_1114de0fe6858e0f06aad1e8051f332a6b42b5912490e7c0e9001c462b9fe8b7_prof);

        
        $__internal_c7b6757e9eff3da87d150f5156b2d7b434b405733f43cef9b9a0dee292f6dccd->leave($__internal_c7b6757e9eff3da87d150f5156b2d7b434b405733f43cef9b9a0dee292f6dccd_prof);

    }

    public function getTemplateName()
    {
        return "AssoBundle:Home:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 61,  200 => 60,  194 => 59,  189 => 57,  182 => 55,  176 => 54,  170 => 53,  164 => 52,  158 => 51,  153 => 49,  149 => 48,  142 => 44,  132 => 37,  128 => 36,  124 => 35,  120 => 34,  113 => 30,  101 => 21,  97 => 20,  91 => 17,  87 => 16,  83 => 15,  79 => 14,  72 => 10,  68 => 8,  59 => 7,  41 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/EK/AssoBundle/Resources/views/Home/about.html.twig #}
{# Template Bundle #}
{% extends \"AssoBundle::layout_large.html.twig\" %}

{% block title %}{{ page_titre }}{% endblock %}

{% block content %}

    <!-- Qui sommes-nous? -->
    <div class=\"py-5 section-parallax\" style=\"background-image: url({{ asset('bundles/front/assets/pic/DSC_7362.png') }});\">
        <div class=\"container my-5 bg-about p-4\">
            <div class=\"row py-3\">
                <div class=\"col-md-12 text-center\">
                    <h1 class=\"mt-4 text-secondary\">{{ 'page_title_about'|trans }}</h1>
                    <h5 class=\"text-dark\">{{ 'about.text.1'|trans }}</h5>
                    <h5 class=\"text-dark\">{{ 'about.text.2'|trans }} <span class=\"text-primary\">W771011659</span>;</h5>
                    <h5 class=\"text-uppercase text-secondary\">{{ 'about.text.3'|trans }}</h5>
                    <p class=\"text-justify\">
                        <ul>
                            <li><h5 class=\"text-dark\">- {{ 'about.text.4'|trans }},</h5></li>
                            <li><h5 class=\"text-dark\">- {{ 'about.text.5'|trans }}.</h5></li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Histoire d'educapeace -->
    <div class=\"py-5 section-parallax\" style=\"background-image: url({{ asset('bundles/front/assets/pic/DSC_7362.png') }});\">
        <div class=\"container my-5 bg-light p-4\">
            <div class=\"row py-3\">
                <div class=\"col-md-12 text-center\">
                    <h1 class=\"mt-4 text-secondary\">{{ 'label.title.4'|trans }}</h1>
                    <p class=\"text-justify\">{{ 'label.history.1'|trans }}</p>
                    <p class=\"text-justify\">{{ 'label.history.2'|trans }}</p>
                    <p class=\"text-justify\">{{ 'label.history.3'|trans }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Notre équipe -->
    <div class=\"py-5 section-parallax\" style=\"background-image: url({{ asset('bundles/front/assets/pic/DSC_7362.png') }});\">
        <div class=\"container my-5 bg-about p-4\">
            <div class=\"row py-3\">
                <div class=\"col-md-12 text-center\">
                    <h1 class=\"mt-4 text-secondary\">{{ 'label.title.3'|trans }}</h1>
                    <h5 class=\"text-uppercase text-secondary\">{{ 'label.title.5'|trans }}</h5>
                    <p class=\"text-center\">
                        <br> • {{ 'label.done.70'|trans }} {{ 'label.team.1'|trans }},
                        <br> • {{ 'label.done.71'|trans }} {{ 'label.team.2'|trans }},
                        <br> • {{ 'label.done.72'|trans }} {{ 'label.team.3'|trans }},
                        <br> • {{ 'label.done.73'|trans }} {{ 'label.team.4'|trans }},
                        <br> • {{ 'label.done.74'|trans }} {{ 'label.team.5'|trans }}.
                    </p>
                    <h5 class=\"text-uppercase text-secondary\">{{ 'label.title.6'|trans }}</h5>
                    <p class=\"text-center\">
                        {{ 'label.done.75'|trans }} {{ 'label.numero.wouri'|trans }}.<br />
                        {{ 'label.done.76'|trans }} {{ 'label.done.77'|trans }}<br />
                        {{ 'label.done.78'|trans }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <hr>
{% endblock %}", "AssoBundle:Home:about.html.twig", "/Users/ekdevcenter/Sites/educapeace/src/EK/AssoBundle/Resources/views/Home/about.html.twig");
    }
}
