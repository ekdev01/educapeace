<?php

/* ::base.html.twig */
class __TwigTemplate_d1757c40be2af8a61a7137918d99aab3fc6764412a679719dfb5fda299b0417f extends Twig_Template
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
        $__internal_e85486f9e002158f0ed1b89f8d96e52b416d922bc1e00a6a47c6e74bd87719a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e85486f9e002158f0ed1b89f8d96e52b416d922bc1e00a6a47c6e74bd87719a9->enter($__internal_e85486f9e002158f0ed1b89f8d96e52b416d922bc1e00a6a47c6e74bd87719a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_f771a677c74075ad2c8b04871cf9e85a6d7c5700044f28e9088625513da11828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f771a677c74075ad2c8b04871cf9e85a6d7c5700044f28e9088625513da11828->enter($__internal_f771a677c74075ad2c8b04871cf9e85a6d7c5700044f28e9088625513da11828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/animate-in.js")), "html", null, true);
        echo "\"></script>
</head>

<body class=\"text-center\">

<!-- Navbar -->
";
        // line 33
        $this->loadTemplate("::nav.html.twig", "::base.html.twig", 33)->display($context);
        // line 34
        echo "<!-- /Navbar -->

";
        // line 36
        if ((array_key_exists("theme", $context) && ((isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 36, $this->getSourceContext()); })()) == "news"))) {
            // line 37
            echo "    <div class=\"py-5 text-center opaque-overlay h-50\" style=\"background-image: url(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/DSC_7219.jpg"), "html", null, true);
            echo ");\"> </div>
";
        } elseif ((        // line 38
array_key_exists("theme", $context) && ((isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 38, $this->getSourceContext()); })()) == "shop"))) {
            // line 39
            echo "    <div class=\"py-5 text-center opaque-overlay h-50\" style=\"background-image: url(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/DSC_7276.jpg"), "html", null, true);
            echo ");\"> </div>
";
        } elseif ((        // line 40
array_key_exists("theme", $context) && ((isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 40, $this->getSourceContext()); })()) == "organisation"))) {
            // line 41
            echo "    <div class=\"py-5 text-center opaque-overlay h-50\" style=\"background-image: url(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/DSC_7362.jpg"), "html", null, true);
            echo ");\"> </div>
";
        } else {
            // line 43
            echo "    <div class=\"py-5 text-center opaque-overlay h-50\" style=\"background-image: url(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/DSC_7412.jpg"), "html", null, true);
            echo ");\"> </div>
";
        }
        // line 45
        echo "
";
        // line 46
        if ((array_key_exists("theme", $context) && ((isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 46, $this->getSourceContext()); })()) == "news"))) {
            // line 47
            echo "    <div class=\"container-fluid bg-secondary\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6 text-white col-sm-12\">
                <h3 class=\"pt-2 display-4\">";
            // line 50
            if (array_key_exists("page_titre", $context)) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["page_titre"]) || array_key_exists("page_titre", $context) ? $context["page_titre"] : (function () { throw new Twig_Error_Runtime('Variable "page_titre" does not exist.', 50, $this->getSourceContext()); })()), "html", null, true);
                echo " ";
            }
            echo "</h3>
            </div>
        </div>
    </div>
";
        } elseif ((        // line 54
array_key_exists("theme", $context) && ((isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 54, $this->getSourceContext()); })()) == "shop"))) {
            // line 55
            echo "    <div class=\"container-fluid bg-secondary-shop\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6 text-white col-sm-12\">
                <h3 class=\"pt-2 display-4\">";
            // line 58
            if (array_key_exists("page_titre", $context)) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["page_titre"]) || array_key_exists("page_titre", $context) ? $context["page_titre"] : (function () { throw new Twig_Error_Runtime('Variable "page_titre" does not exist.', 58, $this->getSourceContext()); })()), "html", null, true);
                echo " ";
            }
            echo "</h3>
            </div>
        </div>
    </div>
";
        }
        // line 63
        echo "
<!-- Content -->
";
        // line 65
        $this->displayBlock('content', $context, $blocks);
        // line 67
        echo "<!-- /Content -->

<!-- Sponsor logos -->
";
        // line 70
        $this->loadTemplate("::sponsor.html.twig", "::base.html.twig", 70)->display($context);
        // line 71
        echo "<!-- /Sponsor logos -->

<!-- Call to action -->
";
        // line 74
        $this->loadTemplate("::call_action.html.twig", "::base.html.twig", 74)->display($context);
        // line 75
        echo "<!-- /Call to action -->

<!-- Modal -->
";
        // line 78
        $this->loadTemplate("::modal.html.twig", "::base.html.twig", 78)->display($context);
        // line 79
        echo "<!-- /Modal -->

<!-- Footer -->
";
        // line 82
        $this->loadTemplate("::footer.html.twig", "::base.html.twig", 82)->display($context);
        // line 83
        echo "<!-- /Footer -->

<!-- JavaScript dependencies -->
";
        // line 86
        $this->loadTemplate("::js_ident.html.twig", "::base.html.twig", 86)->display($context);
        // line 87
        echo "<!-- /JavaScript dependencies -->
</body>

</html>";
        
        $__internal_e85486f9e002158f0ed1b89f8d96e52b416d922bc1e00a6a47c6e74bd87719a9->leave($__internal_e85486f9e002158f0ed1b89f8d96e52b416d922bc1e00a6a47c6e74bd87719a9_prof);

        
        $__internal_f771a677c74075ad2c8b04871cf9e85a6d7c5700044f28e9088625513da11828->leave($__internal_f771a677c74075ad2c8b04871cf9e85a6d7c5700044f28e9088625513da11828_prof);

    }

    // line 65
    public function block_content($context, array $blocks = array())
    {
        $__internal_1e8048a70c4c2e1f99c371dcab8b4d17ead4c24476710fafaa1166638d29cbdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e8048a70c4c2e1f99c371dcab8b4d17ead4c24476710fafaa1166638d29cbdc->enter($__internal_1e8048a70c4c2e1f99c371dcab8b4d17ead4c24476710fafaa1166638d29cbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_34b2d8abd946e44360590418d8730f2938480e07c740a079fb90dd22fff2a3c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b2d8abd946e44360590418d8730f2938480e07c740a079fb90dd22fff2a3c4->enter($__internal_34b2d8abd946e44360590418d8730f2938480e07c740a079fb90dd22fff2a3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_34b2d8abd946e44360590418d8730f2938480e07c740a079fb90dd22fff2a3c4->leave($__internal_34b2d8abd946e44360590418d8730f2938480e07c740a079fb90dd22fff2a3c4_prof);

        
        $__internal_1e8048a70c4c2e1f99c371dcab8b4d17ead4c24476710fafaa1166638d29cbdc->leave($__internal_1e8048a70c4c2e1f99c371dcab8b4d17ead4c24476710fafaa1166638d29cbdc_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 65,  187 => 87,  185 => 86,  180 => 83,  178 => 82,  173 => 79,  171 => 78,  166 => 75,  164 => 74,  159 => 71,  157 => 70,  152 => 67,  150 => 65,  146 => 63,  134 => 58,  129 => 55,  127 => 54,  116 => 50,  111 => 47,  109 => 46,  106 => 45,  100 => 43,  94 => 41,  92 => 40,  87 => 39,  85 => 38,  80 => 37,  78 => 36,  74 => 34,  72 => 33,  63 => 27,  56 => 23,  46 => 16,  29 => 2,  26 => 1,);
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
</head>

<body class=\"text-center\">

<!-- Navbar -->
{% include '::nav.html.twig' %}
<!-- /Navbar -->

{% if theme is defined and theme == 'news' %}
    <div class=\"py-5 text-center opaque-overlay h-50\" style=\"background-image: url({{ asset('bundles/front/assets/DSC_7219.jpg') }});\"> </div>
{% elseif theme is defined and theme == 'shop' %}
    <div class=\"py-5 text-center opaque-overlay h-50\" style=\"background-image: url({{ asset('bundles/front/assets/DSC_7276.jpg') }});\"> </div>
{% elseif theme is defined and theme == 'organisation' %}
    <div class=\"py-5 text-center opaque-overlay h-50\" style=\"background-image: url({{ asset('bundles/front/assets/DSC_7362.jpg') }});\"> </div>
{% else %}
    <div class=\"py-5 text-center opaque-overlay h-50\" style=\"background-image: url({{ asset('bundles/front/assets/DSC_7412.jpg') }});\"> </div>
{% endif %}

{% if theme is defined and theme == 'news' %}
    <div class=\"container-fluid bg-secondary\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6 text-white col-sm-12\">
                <h3 class=\"pt-2 display-4\">{% if page_titre is defined %} {{ page_titre }} {% endif %}</h3>
            </div>
        </div>
    </div>
{% elseif theme is defined and theme == 'shop' %}
    <div class=\"container-fluid bg-secondary-shop\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6 text-white col-sm-12\">
                <h3 class=\"pt-2 display-4\">{% if page_titre is defined %} {{ page_titre }} {% endif %}</h3>
            </div>
        </div>
    </div>
{% endif %}

<!-- Content -->
{% block content %}
{% endblock %}
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

</html>", "::base.html.twig", "/Users/ekdevcenter/Sites/educapeace/app/Resources/views/base.html.twig");
    }
}
