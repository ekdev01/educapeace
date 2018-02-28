<?php

/* ::base_large.html.twig */
class __TwigTemplate_6ff751026fda4bcc18a6e5e0e4e629b24ee30c14f3d994733524f47586032914 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ef127eb6302c281703be42e4e32f84d41efe9bc72cfa49fe54b55f37c335a9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ef127eb6302c281703be42e4e32f84d41efe9bc72cfa49fe54b55f37c335a9a->enter($__internal_7ef127eb6302c281703be42e4e32f84d41efe9bc72cfa49fe54b55f37c335a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base_large.html.twig"));

        $__internal_caa882c9f3381a586aeef8f81988cf0454b84f369941d2121b96a35baf69f2d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caa882c9f3381a586aeef8f81988cf0454b84f369941d2121b96a35baf69f2d9->enter($__internal_caa882c9f3381a586aeef8f81988cf0454b84f369941d2121b96a35baf69f2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base_large.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

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
    <script defer src=\"https://use.fontawesome.com/releases/v5.0.7/js/all.js\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/animate-in.js")), "html", null, true);
        echo "\"></script>
</head>

<body class=\"text-center\">

<!-- Navbar -->
";
        // line 34
        $this->loadTemplate("::nav.html.twig", "::base_large.html.twig", 34)->display($context);
        // line 35
        echo "<!-- /Navbar -->

";
        // line 37
        if ((array_key_exists("theme", $context) && ((isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 37, $this->getSourceContext()); })()) == "adhesion"))) {
            // line 38
            echo "    <div class=\"py-5 text-center opaque-overlay h-50\" style=\"background-image: url(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/DSC_7294.jpg"), "html", null, true);
            echo ");\"> </div>
";
        } elseif ((        // line 39
array_key_exists("theme", $context) && ((isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 39, $this->getSourceContext()); })()) == "shop"))) {
            // line 40
            echo "    <div class=\"py-5 text-center opaque-overlay h-50\" style=\"background-image: url(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/DSC_7276.jpg"), "html", null, true);
            echo ");\"> </div>
";
        } elseif ((        // line 41
array_key_exists("theme", $context) && ((isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 41, $this->getSourceContext()); })()) == "about"))) {
            // line 42
            echo "    <div class=\"py-5 text-center opaque-overlay h-50\" style=\"background-image: url(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/DSC_7362.jpg"), "html", null, true);
            echo ");\"> </div>
";
        } else {
            // line 44
            echo "    <div class=\"py-5 text-center opaque-overlay h-50\" style=\"background-image: url(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/DSC_7294.jpg"), "html", null, true);
            echo ");\"> </div>
";
        }
        // line 46
        echo "
";
        // line 47
        if ((array_key_exists("theme", $context) && ((isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 47, $this->getSourceContext()); })()) == "adhesion"))) {
            // line 48
            echo "    <div class=\"container-fluid bg-marron\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6 text-white col-sm-12\">
                <h3 class=\"pt-2 display-4\">";
            // line 51
            echo twig_escape_filter($this->env, (isset($context["page_titre"]) || array_key_exists("page_titre", $context) ? $context["page_titre"] : (function () { throw new Twig_Error_Runtime('Variable "page_titre" does not exist.', 51, $this->getSourceContext()); })()), "html", null, true);
            echo "</h3>
            </div>
        </div>
    </div>
";
        } else {
            // line 56
            echo "    <div class=\"container-fluid bg-info\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6 text-white col-sm-12\">
                <h3 class=\"pt-2 display-4\">";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["page_titre"]) || array_key_exists("page_titre", $context) ? $context["page_titre"] : (function () { throw new Twig_Error_Runtime('Variable "page_titre" does not exist.', 59, $this->getSourceContext()); })()), "html", null, true);
            echo "</h3>
            </div>
        </div>
    </div>
";
        }
        // line 64
        echo "
<!-- Content -->
<section class=\"container py-2\">
    ";
        // line 67
        $this->displayBlock('content', $context, $blocks);
        // line 69
        echo "</section>
<!-- /Content -->

<!-- Sponsor logos -->
";
        // line 73
        $this->loadTemplate("::sponsor.html.twig", "::base_large.html.twig", 73)->display($context);
        // line 74
        echo "<!-- /Sponsor logos -->

<!-- Call to action -->
";
        // line 77
        $this->loadTemplate("::call_action.html.twig", "::base_large.html.twig", 77)->display($context);
        // line 78
        echo "<!-- /Call to action -->

<!-- Modal -->
";
        // line 81
        $this->loadTemplate("::modal.html.twig", "::base_large.html.twig", 81)->display($context);
        // line 82
        echo "<!-- /Modal -->

<!-- Footer -->
";
        // line 85
        $this->loadTemplate("::footer.html.twig", "::base_large.html.twig", 85)->display($context);
        // line 86
        echo "<!-- /Footer -->

<!-- JavaScript dependencies -->
";
        // line 89
        $this->loadTemplate("::js_ident.html.twig", "::base_large.html.twig", 89)->display($context);
        // line 90
        echo "<!-- /JavaScript dependencies -->
</body>

</html>";
        
        $__internal_7ef127eb6302c281703be42e4e32f84d41efe9bc72cfa49fe54b55f37c335a9a->leave($__internal_7ef127eb6302c281703be42e4e32f84d41efe9bc72cfa49fe54b55f37c335a9a_prof);

        
        $__internal_caa882c9f3381a586aeef8f81988cf0454b84f369941d2121b96a35baf69f2d9->leave($__internal_caa882c9f3381a586aeef8f81988cf0454b84f369941d2121b96a35baf69f2d9_prof);

    }

    // line 67
    public function block_content($context, array $blocks = array())
    {
        $__internal_641388787f3cae944c8780f2fe60b9036a2052f890ac158219fac527d3970e78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_641388787f3cae944c8780f2fe60b9036a2052f890ac158219fac527d3970e78->enter($__internal_641388787f3cae944c8780f2fe60b9036a2052f890ac158219fac527d3970e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4b231a857cb3d2a41bb6eed1ce3d75992706e5a9ade2b2056e3ecdf2d56fbb98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b231a857cb3d2a41bb6eed1ce3d75992706e5a9ade2b2056e3ecdf2d56fbb98->enter($__internal_4b231a857cb3d2a41bb6eed1ce3d75992706e5a9ade2b2056e3ecdf2d56fbb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 68
        echo "    ";
        
        $__internal_4b231a857cb3d2a41bb6eed1ce3d75992706e5a9ade2b2056e3ecdf2d56fbb98->leave($__internal_4b231a857cb3d2a41bb6eed1ce3d75992706e5a9ade2b2056e3ecdf2d56fbb98_prof);

        
        $__internal_641388787f3cae944c8780f2fe60b9036a2052f890ac158219fac527d3970e78->leave($__internal_641388787f3cae944c8780f2fe60b9036a2052f890ac158219fac527d3970e78_prof);

    }

    public function getTemplateName()
    {
        return "::base_large.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 68,  191 => 67,  178 => 90,  176 => 89,  171 => 86,  169 => 85,  164 => 82,  162 => 81,  157 => 78,  155 => 77,  150 => 74,  148 => 73,  142 => 69,  140 => 67,  135 => 64,  127 => 59,  122 => 56,  114 => 51,  109 => 48,  107 => 47,  104 => 46,  98 => 44,  92 => 42,  90 => 41,  85 => 40,  83 => 39,  78 => 38,  76 => 37,  72 => 35,  70 => 34,  61 => 28,  53 => 23,  43 => 16,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>

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
    <script defer src=\"https://use.fontawesome.com/releases/v5.0.7/js/all.js\"></script>
    <script src=\"{{ absolute_url(asset('bundles/front/js/animate-in.js')) }}\"></script>
</head>

<body class=\"text-center\">

<!-- Navbar -->
{% include '::nav.html.twig' %}
<!-- /Navbar -->

{% if theme is defined and theme == 'adhesion' %}
    <div class=\"py-5 text-center opaque-overlay h-50\" style=\"background-image: url({{ asset('bundles/front/assets/DSC_7294.jpg') }});\"> </div>
{% elseif theme is defined and theme == 'shop' %}
    <div class=\"py-5 text-center opaque-overlay h-50\" style=\"background-image: url({{ asset('bundles/front/assets/DSC_7276.jpg') }});\"> </div>
{% elseif theme is defined and theme == 'about' %}
    <div class=\"py-5 text-center opaque-overlay h-50\" style=\"background-image: url({{ asset('bundles/front/assets/DSC_7362.jpg') }});\"> </div>
{% else %}
    <div class=\"py-5 text-center opaque-overlay h-50\" style=\"background-image: url({{ asset('bundles/front/assets/DSC_7294.jpg') }});\"> </div>
{% endif %}

{% if theme is defined and theme == 'adhesion' %}
    <div class=\"container-fluid bg-marron\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6 text-white col-sm-12\">
                <h3 class=\"pt-2 display-4\">{{ page_titre }}</h3>
            </div>
        </div>
    </div>
{% else %}
    <div class=\"container-fluid bg-info\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6 text-white col-sm-12\">
                <h3 class=\"pt-2 display-4\">{{ page_titre }}</h3>
            </div>
        </div>
    </div>
{% endif %}

<!-- Content -->
<section class=\"container py-2\">
    {% block content %}
    {% endblock %}
</section>
<!-- /Content -->

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

<!-- JavaScript dependencies -->
{% include '::js_ident.html.twig' %}
<!-- /JavaScript dependencies -->
</body>

</html>", "::base_large.html.twig", "/Users/ekdevcenter/Sites/educapeace/app/Resources/views/base_large.html.twig");
    }
}
