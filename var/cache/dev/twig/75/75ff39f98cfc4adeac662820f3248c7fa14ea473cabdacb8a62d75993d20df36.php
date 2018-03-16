<?php

/* ::nav.html.twig */
class __TwigTemplate_b6d2e2be549ffaec76f607da79f8cd9dd57cbe45d52eb9b188d730fdc503ca07 extends Twig_Template
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
        $__internal_35e677057656e58ffbee6858130e3dd6034126ae59a6007a8ae85967b96d657d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35e677057656e58ffbee6858130e3dd6034126ae59a6007a8ae85967b96d657d->enter($__internal_35e677057656e58ffbee6858130e3dd6034126ae59a6007a8ae85967b96d657d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::nav.html.twig"));

        $__internal_f82f04bf818e710b6d5f0fb10fa127d0164df7c9827c081063fb67216ab99a19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f82f04bf818e710b6d5f0fb10fa127d0164df7c9827c081063fb67216ab99a19->enter($__internal_f82f04bf818e710b6d5f0fb10fa127d0164df7c9827c081063fb67216ab99a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-md fixed-top navbar-light bg-light\" style=\"vertical-align: middle\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_page");
        echo "\">
            <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/brandEducapeace.png"), "html", null, true);
        echo "\" class=\"mx-auto\" width=\"160\"> </a>
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar2SupportedContent\" aria-controls=\"navbar2SupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
        <div class=\"collapse navbar-collapse justify-content-center\" id=\"navbar2SupportedContent\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item mx-2\">
                    <a class=\"nav-link\" href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu_asso"), "html", null, true);
        echo "</a>
                </li>
                <li class=\"nav-item mx-2\">
                    <a class=\"nav-link\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("news_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu_news"), "html", null, true);
        echo "</a>
                </li>
                <li><a class=\"nav-link\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_adhesion");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu_adhesion"), "html", null, true);
        echo "</a></li>
            ";
        // line 33
        echo "                <li class=\"nav-item mx-2\">
                    <a class=\"nav-link\" href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shop_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu_shop"), "html", null, true);
        echo "</a>
                </li>
                <li class=\"nav-item mx-2\">
                    <a class=\"nav-link\" href=\"#contact\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu_contact"), "html", null, true);
        echo "</a>
                </li>
            </ul>
            ";
        // line 40
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 40, $this->getSourceContext()); })()), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 41
            echo "                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                            <span class=\"red\"><b>";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.welcome"), "html", null, true);
            echo " Désiré</b>
                        </a>
                        <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                            <li>&nbsp;<a href=\"/admin/adherent\">";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.area.member"), "html", null, true);
            echo "</a></li>
                            <li>&nbsp;<a href=\"";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><i class=\"fa fa-sign-out pull-right\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.logon"), "html", null, true);
            echo "</a>&nbsp;&nbsp;</li>
                        </ul>
                    </li>
                </ul>
            ";
        } else {
            // line 53
            echo "                <a href=\"#\" id=\"authentification\" role=\"button\" data-toggle=\"modal\" data-target=\"#_authentificationModal\" class=\"btn navbar-btn mx-2 btn-outline-light text-secondary\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu_members_area"), "html", null, true);
            echo "</a>
            ";
        }
        // line 55
        echo "
&nbsp;&nbsp;
<!-- Languages -->
";
        // line 58
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 58, $this->getSourceContext()); })()), "request", array()), "getLocale", array(), "method") == "fr")) {
            // line 59
            echo "<a href=\"#\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_fr"), "html", null, true);
            echo "\"><img alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_fr"), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/flags/fr.png"), "html", null, true);
            echo "\" width=\"30\" height=\"20\" /></a>
&nbsp;&nbsp;
<a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 61, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 61, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "_route_params"), "method"), array("lg" => "en"))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_en"), "html", null, true);
            echo "\"><img alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_en"), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/flags/gb.png"), "html", null, true);
            echo "\" width=\"30\" height=\"20\" /></a>

";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 63
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 63, $this->getSourceContext()); })()), "request", array()), "getLocale", array(), "method") == "en")) {
            // line 64
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 64, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 64, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "_route_params"), "method"), array("lg" => "fr"))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_fr"), "html", null, true);
            echo "\"><img alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_fr"), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/flags/fr.png"), "html", null, true);
            echo "\" width=\"30\" height=\"20\" /></a>
&nbsp;&nbsp;
<a href=\"#\" title=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_en"), "html", null, true);
            echo "\"><img alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_en"), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/flags/gb.png"), "html", null, true);
            echo "\" width=\"30\" height=\"20\" /></a>

";
        } else {
            // line 69
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 69, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 69, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "_route_params"), "method"), array("lg" => "fr"))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_fr"), "html", null, true);
            echo "\"><img alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_fr"), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/flags/fr.png"), "html", null, true);
            echo "\" width=\"30\" height=\"20\" /></a>
&nbsp;&nbsp;
<a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 71, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 71, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "_route_params"), "method"), array("lg" => "en"))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_en"), "html", null, true);
            echo "\"><img alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_en"), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/flags/gb.png"), "html", null, true);
            echo "\" width=\"30\" height=\"20\" /></a>
";
        }
        // line 73
        echo "<!-- /Languages -->

</div>
</div>
</nav>";
        
        $__internal_35e677057656e58ffbee6858130e3dd6034126ae59a6007a8ae85967b96d657d->leave($__internal_35e677057656e58ffbee6858130e3dd6034126ae59a6007a8ae85967b96d657d_prof);

        
        $__internal_f82f04bf818e710b6d5f0fb10fa127d0164df7c9827c081063fb67216ab99a19->leave($__internal_f82f04bf818e710b6d5f0fb10fa127d0164df7c9827c081063fb67216ab99a19_prof);

    }

    public function getTemplateName()
    {
        return "::nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 73,  176 => 71,  164 => 69,  154 => 66,  142 => 64,  140 => 63,  129 => 61,  119 => 59,  117 => 58,  112 => 55,  106 => 53,  96 => 48,  92 => 47,  86 => 44,  81 => 41,  79 => 40,  73 => 37,  65 => 34,  62 => 33,  56 => 14,  49 => 12,  41 => 9,  33 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-expand-md fixed-top navbar-light bg-light\" style=\"vertical-align: middle\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"{{ path('home_page') }}\">
            <img src=\"{{ asset('bundles/front/assets/brandEducapeace.png') }}\" class=\"mx-auto\" width=\"160\"> </a>
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar2SupportedContent\" aria-controls=\"navbar2SupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
        <div class=\"collapse navbar-collapse justify-content-center\" id=\"navbar2SupportedContent\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item mx-2\">
                    <a class=\"nav-link\" href=\"{{ path('about_page') }}\">{{ 'menu_asso'|trans }}</a>
                </li>
                <li class=\"nav-item mx-2\">
                    <a class=\"nav-link\" href=\"{{ path('news_page') }}\">{{ 'menu_news'|trans }}</a>
                </li>
                <li><a class=\"nav-link\" href=\"{{ path('page_adhesion') }}\">{{ 'menu_adhesion'|trans }}</a></li>
            {#
            </ul>
            <ul class=\"navbar-nav\">
                <li class=\"dropdown\">
                    <a href=\"{{ path('page_adhesion') }}\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                        {{ 'menu_adhesion'|trans }}
                    </a>
                    <ul class=\"dropdown-menu dropdown-user pull-left\">
                        <li><a href=\"#adhesion\">J'adhère</a></li>
                        <li><a href=\"#touslesmois\">Je donne tous les mois</a></li>
                        <li><a href=\"#unefois\">Je donne une fois</a></li>
                        <li><a href=\"#parcheque\">Je donne par chèque</a></li>
                        <li><a href=\"#don\">Je fais un don</a></li>
                    </ul>
                </li>
            </ul>
            <ul class=\"navbar-nav\">
            #}
                <li class=\"nav-item mx-2\">
                    <a class=\"nav-link\" href=\"{{ path('shop_page') }}\">{{ 'menu_shop'|trans }}</a>
                </li>
                <li class=\"nav-item mx-2\">
                    <a class=\"nav-link\" href=\"#contact\">{{ 'menu_contact'|trans }}</a>
                </li>
            </ul>
            {% if app.user and is_granted('IS_AUTHENTICATED_FULLY')%}
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                            <span class=\"red\"><b>{{ 'label.welcome'|trans }} Désiré</b>
                        </a>
                        <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                            <li>&nbsp;<a href=\"/admin/adherent\">{{ 'label.area.member'|trans }}</a></li>
                            <li>&nbsp;<a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"fa fa-sign-out pull-right\"></i>{{ 'label.logon'|trans }}</a>&nbsp;&nbsp;</li>
                        </ul>
                    </li>
                </ul>
            {% else %}
                <a href=\"#\" id=\"authentification\" role=\"button\" data-toggle=\"modal\" data-target=\"#_authentificationModal\" class=\"btn navbar-btn mx-2 btn-outline-light text-secondary\">{{ 'menu_members_area'|trans }}</a>
            {% endif %}

&nbsp;&nbsp;
<!-- Languages -->
{% if (app.request.getLocale()) == 'fr' %}
<a href=\"#\" title=\"{{ 'label_fr'|trans }}\"><img alt=\"{{ 'label_fr'|trans }}\" src=\"{{ asset('bundles/front/assets/flags/fr.png') }}\" width=\"30\" height=\"20\" /></a>
&nbsp;&nbsp;
<a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'lg': 'en'})) }}\" title=\"{{ 'label_en'|trans }}\"><img alt=\"{{ 'label_en'|trans }}\" src=\"{{ asset('bundles/front/assets/flags/gb.png') }}\" width=\"30\" height=\"20\" /></a>

{% elseif (app.request.getLocale()) == 'en' %}
<a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'lg': 'fr'})) }}\" title=\"{{ 'label_fr'|trans }}\"><img alt=\"{{ 'label_fr'|trans }}\" src=\"{{ asset('bundles/front/assets/flags/fr.png') }}\" width=\"30\" height=\"20\" /></a>
&nbsp;&nbsp;
<a href=\"#\" title=\"{{ 'label_en'|trans }}\"><img alt=\"{{ 'label_en'|trans }}\" src=\"{{ asset('bundles/front/assets/flags/gb.png') }}\" width=\"30\" height=\"20\" /></a>

{% else %}
<a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'lg': 'fr'})) }}\" title=\"{{ 'label_fr'|trans }}\"><img alt=\"{{ 'label_fr'|trans }}\" src=\"{{ asset('bundles/front/assets/flags/fr.png') }}\" width=\"30\" height=\"20\" /></a>
&nbsp;&nbsp;
<a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'lg': 'en'})) }}\" title=\"{{ 'label_en'|trans }}\"><img alt=\"{{ 'label_en'|trans }}\" src=\"{{ asset('bundles/front/assets/flags/gb.png') }}\" width=\"30\" height=\"20\" /></a>
{% endif %}
<!-- /Languages -->

</div>
</div>
</nav>", "::nav.html.twig", "/Users/ekdevcenter/Sites/educapeace/app/Resources/views/nav.html.twig");
    }
}
