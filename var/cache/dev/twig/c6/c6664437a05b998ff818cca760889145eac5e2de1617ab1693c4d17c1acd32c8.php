<?php

/* ::base_home.html.twig */
class __TwigTemplate_6070b1d427be657f4863ce3d1c5a95cba12143c27c913c2adad4997aa3e8d201 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5bfccd03909e75e5ddc9fbf335722716dbec0857497e88d3e39e6f614378bb21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bfccd03909e75e5ddc9fbf335722716dbec0857497e88d3e39e6f614378bb21->enter($__internal_5bfccd03909e75e5ddc9fbf335722716dbec0857497e88d3e39e6f614378bb21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base_home.html.twig"));

        $__internal_5cf13cfbd6514789057d094f013c01e662c622d2fa6c17d26cd94aca76b74498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf13cfbd6514789057d094f013c01e662c622d2fa6c17d26cd94aca76b74498->enter($__internal_5cf13cfbd6514789057d094f013c01e662c622d2fa6c17d26cd94aca76b74498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base_home.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new Twig_Error_Runtime('Variable "lang" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
        echo "\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Social network tagging -->
    <meta property=\"og:locale\" content=\"fr_FR\" />
    <meta property=\"og:type\" content=\"website\"/>
    <meta property=\"og:title\" content=\"educapeace.org: EDUCAPEACE - Organisation de lutte contre l'analphabétisme des enfants dans les zones rurales du Cameroun et d'Afrique subsaharienne, et l'accès aux soins de santé pour tous, ainsi qu'à l'eau et assainissement.\"/>
    <meta property=\"og:url\" content=\"http://www.educapeace.org/\"/>
    <meta property=\"og:image\" content=\"http://www.educapeace.org/bundles/edu/assets/home_rs.png\"/>

    <!-- PAGE settings -->
    <title>Educapeace - ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["page_titre"]) || array_key_exists("page_titre", $context) ? $context["page_titre"] : (function () { throw new Twig_Error_Runtime('Variable "page_titre" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
        echo "</title>

    <meta name=\"description\" content=\"L'Organisation EDUCAPEACE lutte contre l'analphabétisme des enfants dans les zones rurales du Cameroun et d'Afrique subsaharienne, et l'accès aux soins de santé pour tous, ainsi qu'à l'eau et assainissement.\">
    <meta name=\"keywords\" content=\"éducation, afrique, humanitaire, santé, aide humanitaire, analphabétisme, enfance\">
    <meta name=\"author\" content=\"EK DEV Center\">

    <!-- CSS dependencies -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/theme.css")), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\" type=\"text/css\">
    <!-- Script: Animated entrance -->
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/animate-in.js")), "html", null, true);
        echo "\"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

    ";
        // line 30
        echo "</head>

<body>

<!-- Navbar -->
";
        // line 35
        $this->loadTemplate("::nav.html.twig", "::base_home.html.twig", 35)->display($context);
        // line 36
        echo "<!-- /Navbar -->

<!-- Cover -->
<div class=\"d-flex align-items-center section-aquamarine py-5 cover\" style=\"background-image: url(";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/accueil.jpg"), "html", null, true);
        echo ");\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-white mt-5 align-self-center animate-in-down text-center\">
                <h3 class=\"display-3 d-none d-md-block text-center\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("home.text.1"), "html", null, true);
        echo " <span><b>Educapeace</b></span></h3>
                <h3 class=\"display-4 d-block d-md-none\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("home.text.1"), "html", null, true);
        echo " <span><b>Educapeace</b></span></h3>
                <h5 class=\"text-dark\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("home.text.2"), "html", null, true);
        echo ".</h5>
                <div class=\"row\">
                    <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/logoEducapeace.png"), "html", null, true);
        echo "\" class=\"mx-auto rounded-circle animate-in-left\" width=\"300\" height=\"300\"> </div>
                <a href=\"adherer.html\" class=\"btn btn-lg mt-4 text-center justify-content-center align-items-center align-self-center btn-outline-light\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("home.text.3"), "html", null, true);
        echo "</a><i class=\"d-block fa fa-angle-down pt-5 fa-3x\"></i> </div>
        </div>
    </div>
</div>

<!-- Parallax section -->
<div class=\"py-5 section-parallax\" style=\"background-image: url(";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/DSC_7362.jpg"), "html", null, true);
        echo ");\">
    <div class=\"container my-5 bg-light p-4\">
        <div class=\"row mx-auto\">
            <div class=\"col-md-12 text-center\">
                <h1 class=\"mb-3\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("home.text.4"), "html", null, true);
        echo "</h1>
                <p class=\"\">
                    ";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("about.text.1"), "html", null, true);
        echo "<br/>
                    ";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("about.text.2"), "html", null, true);
        echo " <span class=\"text-dark\">W771011659</span>;<br/><br/>
                    ";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("about.text.3"), "html", null, true);
        echo "<br/>
                    <ul>
                        <li>";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("about.text.4"), "html", null, true);
        echo ",</li>
                        <li>";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("about.text.5"), "html", null, true);
        echo ".</li>
                    </ul>
                </p>
                ";
        // line 69
        echo "                <h4 class=\"mb-3\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("home.text.13"), "html", null, true);
        echo "</h4>
                <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/label_interet_general.jpg"), "html", null, true);
        echo "\" ><br/><br/>
                <a href=\"adherer.html\" class=\"btn btn-outline-primary btn-lg m-2\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("home.text.3"), "html", null, true);
        echo "</a>
            </div>
        </div>
    </div>
</div>
<!-- /Parallax section -->

<!-- Speakers -->
<div class=\"pt-5\" id=\"sponsors\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"text-center\">";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("goals.text.1"), "html", null, true);
        echo "</h1>
            </div>
            <div class=\"col-md-12\">
                <h3 class=\"text-center\"><b>";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("goals.text.2"), "html", null, true);
        echo "</b></h3>
            </div><br />
        </div>
        <div class=\"row  justify-content-center mx-5\">
            <div class=\"col-md-6 text-left animate-in-left my-3\">
                <h3 class=\"mb-0 text-secondary\"><b>";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("goals.text.3"), "html", null, true);
        echo "</b></h3>
                ";
        // line 93
        echo "                <p class=\"text-muted\">
                    • ";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("goals.text.4"), "html", null, true);
        echo ",
                    <br> • ";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("goals.text.5"), "html", null, true);
        echo ",
                    <br> • ";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("goals.text.6"), "html", null, true);
        echo ",
                    <br> • ";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("goals.text.7"), "html", null, true);
        echo ",
                    <br> • ";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("goals.text.8"), "html", null, true);
        echo ".</p>
            </div>
            <div class=\"col-md-6 text-left my-3 animate-in-right\">
                <h3 class=\"mb-0 text-secondary\"><b>";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("goals.text.9"), "html", null, true);
        echo "</b></h3>
                ";
        // line 103
        echo "                <p class=\"text-muted\">
                    • ";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("goals.text.10"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("goals.text.11"), "html", null, true);
        echo "),
                    <br> • ";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("goals.text.12"), "html", null, true);
        echo ",
                    <br> • ";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("goals.text.13"), "html", null, true);
        echo ",
                    <br> • ";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("goals.text.14"), "html", null, true);
        echo ".</p>
            </div>
        </div>
    </div>

    <!-- Schedule -->
    <div class=\"py-5 section-parallax\" style=\"background-image: url(";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/DSC_4708.jpg"), "html", null, true);
        echo ");\">
        <div class=\"container my-5 bg-light p-4\">
            <div class=\"row py-3\">
                <div class=\"col-md-12 text-center\">
                    <h1 class=\"mt-4 text-secondary\">";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("values.text.1"), "html", null, true);
        echo "</h1>
                    <h4 class=\"mb-3 text-uppercase\">";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("values.text.2"), "html", null, true);
        echo "</h4>
                    <h5 class=\"text-uppercase text-secondary\">";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("values.text.3"), "html", null, true);
        echo "</h5>
                    <p class=\"\">";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("values.text.4"), "html", null, true);
        echo "</p>
                    <h5 class=\"text-uppercase text-secondary\">";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("values.text.5"), "html", null, true);
        echo "</h5>
                    <p class=\"\">";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("values.text.6"), "html", null, true);
        echo "</p>
                    <h5 class=\"text-uppercase text-secondary\">";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("values.text.7"), "html", null, true);
        echo "</h5>
                    <p class=\"\">";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("values.text.8"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("values.text.9"), "html", null, true);
        echo ".</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /Schedule -->

    <!-- Schedule -->
    ";
        // line 154
        echo "    <!-- /Schedule -->

    <!-- Sponsor logos -->
    ";
        // line 157
        $this->loadTemplate("::sponsor.html.twig", "::base_home.html.twig", 157)->display($context);
        // line 158
        echo "    <!-- /Sponsor logos -->

    <!-- Call to action -->
    ";
        // line 161
        $this->loadTemplate("::call_action.html.twig", "::base_home.html.twig", 161)->display($context);
        // line 162
        echo "    <!-- /Call to action -->

    <!-- Modal -->
    ";
        // line 165
        $this->loadTemplate("::modal.html.twig", "::base_home.html.twig", 165)->display($context);
        // line 166
        echo "    <!-- /Modal -->

    <!-- Footer -->
    ";
        // line 169
        $this->loadTemplate("::footer.html.twig", "::base_home.html.twig", 169)->display($context);
        // line 170
        echo "    <!-- /Footer -->
</div>
<!-- Speakers -->

<!-- JavaScript dependencies -->
";
        // line 175
        $this->loadTemplate("::js_ident.html.twig", "::base_home.html.twig", 175)->display($context);
        // line 176
        echo "<!-- /JavaScript dependencies -->
</body>
</html>

";
        
        $__internal_5bfccd03909e75e5ddc9fbf335722716dbec0857497e88d3e39e6f614378bb21->leave($__internal_5bfccd03909e75e5ddc9fbf335722716dbec0857497e88d3e39e6f614378bb21_prof);

        
        $__internal_5cf13cfbd6514789057d094f013c01e662c622d2fa6c17d26cd94aca76b74498->leave($__internal_5cf13cfbd6514789057d094f013c01e662c622d2fa6c17d26cd94aca76b74498_prof);

    }

    public function getTemplateName()
    {
        return "::base_home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 176,  329 => 175,  322 => 170,  320 => 169,  315 => 166,  313 => 165,  308 => 162,  306 => 161,  301 => 158,  299 => 157,  294 => 154,  281 => 124,  277 => 123,  273 => 122,  269 => 121,  265 => 120,  261 => 119,  257 => 118,  253 => 117,  246 => 113,  237 => 107,  233 => 106,  229 => 105,  223 => 104,  220 => 103,  216 => 101,  210 => 98,  206 => 97,  202 => 96,  198 => 95,  194 => 94,  191 => 93,  187 => 91,  179 => 86,  173 => 83,  158 => 71,  154 => 70,  149 => 69,  143 => 65,  139 => 64,  134 => 62,  130 => 61,  126 => 60,  121 => 58,  114 => 54,  105 => 48,  101 => 47,  96 => 45,  92 => 44,  88 => 43,  81 => 39,  76 => 36,  74 => 35,  67 => 30,  61 => 26,  55 => 23,  45 => 16,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ lang }}\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Social network tagging -->
    <meta property=\"og:locale\" content=\"fr_FR\" />
    <meta property=\"og:type\" content=\"website\"/>
    <meta property=\"og:title\" content=\"educapeace.org: EDUCAPEACE - Organisation de lutte contre l'analphabétisme des enfants dans les zones rurales du Cameroun et d'Afrique subsaharienne, et l'accès aux soins de santé pour tous, ainsi qu'à l'eau et assainissement.\"/>
    <meta property=\"og:url\" content=\"http://www.educapeace.org/\"/>
    <meta property=\"og:image\" content=\"http://www.educapeace.org/bundles/edu/assets/home_rs.png\"/>

    <!-- PAGE settings -->
    <title>Educapeace - {{ page_titre }}</title>

    <meta name=\"description\" content=\"L'Organisation EDUCAPEACE lutte contre l'analphabétisme des enfants dans les zones rurales du Cameroun et d'Afrique subsaharienne, et l'accès aux soins de santé pour tous, ainsi qu'à l'eau et assainissement.\">
    <meta name=\"keywords\" content=\"éducation, afrique, humanitaire, santé, aide humanitaire, analphabétisme, enfance\">
    <meta name=\"author\" content=\"EK DEV Center\">

    <!-- CSS dependencies -->
    <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('bundles/front/theme.css')) }}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\" type=\"text/css\">
    <!-- Script: Animated entrance -->
    <script src=\"{{ absolute_url(asset('bundles/front/js/animate-in.js')) }}\"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

    {#<script defer src=\"https://use.fontawesome.com/releases/v5.0.7/js/all.js\"></script>#}
</head>

<body>

<!-- Navbar -->
{% include '::nav.html.twig' %}
<!-- /Navbar -->

<!-- Cover -->
<div class=\"d-flex align-items-center section-aquamarine py-5 cover\" style=\"background-image: url({{ asset('bundles/front/assets/accueil.jpg') }});\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-white mt-5 align-self-center animate-in-down text-center\">
                <h3 class=\"display-3 d-none d-md-block text-center\">{{ 'home.text.1'|trans }} <span><b>Educapeace</b></span></h3>
                <h3 class=\"display-4 d-block d-md-none\">{{ 'home.text.1'|trans }} <span><b>Educapeace</b></span></h3>
                <h5 class=\"text-dark\">{{ 'home.text.2'|trans }}.</h5>
                <div class=\"row\">
                    <img src=\"{{ asset('bundles/front/assets/logoEducapeace.png') }}\" class=\"mx-auto rounded-circle animate-in-left\" width=\"300\" height=\"300\"> </div>
                <a href=\"adherer.html\" class=\"btn btn-lg mt-4 text-center justify-content-center align-items-center align-self-center btn-outline-light\">{{ 'home.text.3'|trans }}</a><i class=\"d-block fa fa-angle-down pt-5 fa-3x\"></i> </div>
        </div>
    </div>
</div>

<!-- Parallax section -->
<div class=\"py-5 section-parallax\" style=\"background-image: url({{ asset('bundles/front/assets/DSC_7362.jpg') }});\">
    <div class=\"container my-5 bg-light p-4\">
        <div class=\"row mx-auto\">
            <div class=\"col-md-12 text-center\">
                <h1 class=\"mb-3\">{{ 'home.text.4'|trans }}</h1>
                <p class=\"\">
                    {{ 'about.text.1'|trans }}<br/>
                    {{ 'about.text.2'|trans }} <span class=\"text-dark\">W771011659</span>;<br/><br/>
                    {{ 'about.text.3'|trans }}<br/>
                    <ul>
                        <li>{{ 'about.text.4'|trans }},</li>
                        <li>{{ 'about.text.5'|trans }}.</li>
                    </ul>
                </p>
                {#<h4 class=\"mb-3\">{{ 'home.text.12'|trans }}</h4>#}
                <h4 class=\"mb-3\">{{ 'home.text.13'|trans }}</h4>
                <img src=\"{{ asset('bundles/front/assets/label_interet_general.jpg') }}\" ><br/><br/>
                <a href=\"adherer.html\" class=\"btn btn-outline-primary btn-lg m-2\">{{ 'home.text.3'|trans }}</a>
            </div>
        </div>
    </div>
</div>
<!-- /Parallax section -->

<!-- Speakers -->
<div class=\"pt-5\" id=\"sponsors\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"text-center\">{{ 'goals.text.1'|trans }}</h1>
            </div>
            <div class=\"col-md-12\">
                <h3 class=\"text-center\"><b>{{ 'goals.text.2'|trans }}</b></h3>
            </div><br />
        </div>
        <div class=\"row  justify-content-center mx-5\">
            <div class=\"col-md-6 text-left animate-in-left my-3\">
                <h3 class=\"mb-0 text-secondary\"><b>{{ 'goals.text.3'|trans }}</b></h3>
                {# <h5 class=\"my-2 text-secondary\"><b>{{ 'goals.text.4'|trans }}</b></h5> #}
                <p class=\"text-muted\">
                    • {{ 'goals.text.4'|trans }},
                    <br> • {{ 'goals.text.5'|trans }},
                    <br> • {{ 'goals.text.6'|trans }},
                    <br> • {{ 'goals.text.7'|trans }},
                    <br> • {{ 'goals.text.8'|trans }}.</p>
            </div>
            <div class=\"col-md-6 text-left my-3 animate-in-right\">
                <h3 class=\"mb-0 text-secondary\"><b>{{ 'goals.text.9'|trans }}</b></h3>
                {# <h5 class=\"my-2 text-secondary\"><b>{{ 'goals.text.10'|trans }} ({{ 'goals.text.11'|trans }})</b></h5> #}
                <p class=\"text-muted\">
                    • {{ 'goals.text.10'|trans }} ({{ 'goals.text.11'|trans }}),
                    <br> • {{ 'goals.text.12'|trans }},
                    <br> • {{ 'goals.text.13'|trans }},
                    <br> • {{ 'goals.text.14'|trans }}.</p>
            </div>
        </div>
    </div>

    <!-- Schedule -->
    <div class=\"py-5 section-parallax\" style=\"background-image: url({{ asset('bundles/front/assets/DSC_4708.jpg') }});\">
        <div class=\"container my-5 bg-light p-4\">
            <div class=\"row py-3\">
                <div class=\"col-md-12 text-center\">
                    <h1 class=\"mt-4 text-secondary\">{{ 'values.text.1'|trans }}</h1>
                    <h4 class=\"mb-3 text-uppercase\">{{ 'values.text.2'|trans }}</h4>
                    <h5 class=\"text-uppercase text-secondary\">{{ 'values.text.3'|trans }}</h5>
                    <p class=\"\">{{ 'values.text.4'|trans }}</p>
                    <h5 class=\"text-uppercase text-secondary\">{{ 'values.text.5'|trans }}</h5>
                    <p class=\"\">{{ 'values.text.6'|trans }}</p>
                    <h5 class=\"text-uppercase text-secondary\">{{ 'values.text.7'|trans }}</h5>
                    <p class=\"\">{{ 'values.text.8'|trans }} {{ 'values.text.9'|trans }}.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /Schedule -->

    <!-- Schedule -->
    {#
    <div class=\"py-5 section-parallax\" style=\"background-image: url({{ asset('bundles/front/assets/DSC_4708.jpg') }});\">
        <div class=\"container my-5 bg-light p-4\">
            <div class=\"row py-3\">
                <div class=\"col-md-12 text-center\">
                    <h1 class=\"text-center\">{{ 'president.text.1'|trans }}</h1>
                    <p class=\"text-justify\">
                        « {{ 'president.text.2'|trans }} ». {{ 'president.text.3'|trans }}.
                        <br /><br />
                        {{ 'president.text.4'|trans }}
                        <br /><br />
                        {{ 'president.text.5'|trans }}<br />{{ 'president.text.6'|trans }}
                        <br />
                    <p/>
                    <p class=\"\">
                        {{ 'president.text.7'|trans }}<br />{{ 'president.text.8'|trans }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    #}
    <!-- /Schedule -->

    <!-- Sponsor logos -->
    {% include '::sponsor.html.twig' %}
    <!-- /Sponsor logos -->

    <!-- Call to action -->
    {% include '::call_action.html.twig' %}
    <!-- /Call to action -->

    <!-- Modal -->
    {% include '::modal.html.twig' %}
    <!-- /Modal -->

    <!-- Footer -->
    {% include '::footer.html.twig' %}
    <!-- /Footer -->
</div>
<!-- Speakers -->

<!-- JavaScript dependencies -->
{% include '::js_ident.html.twig' %}
<!-- /JavaScript dependencies -->
</body>
</html>

", "::base_home.html.twig", "/Users/ekdevcenter/Sites/educapeace/app/Resources/views/base_home.html.twig");
    }
}
