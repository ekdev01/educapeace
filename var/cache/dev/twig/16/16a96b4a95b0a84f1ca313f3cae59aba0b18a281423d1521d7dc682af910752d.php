<?php

/* ::footer.html.twig */
class __TwigTemplate_cf9674ce21ba2349a3b70b3acdb9c6d387fecc82f0ae90539c5d1c9c66cc790d extends Twig_Template
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
        $__internal_bf1e197e98670dfe85222b9b50eed8fd4d7eba8b033dd4b5eac2fe26208239eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf1e197e98670dfe85222b9b50eed8fd4d7eba8b033dd4b5eac2fe26208239eb->enter($__internal_bf1e197e98670dfe85222b9b50eed8fd4d7eba8b033dd4b5eac2fe26208239eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::footer.html.twig"));

        $__internal_d49fc920f43d487d6e3eb336bae73f0922585cc76551f42386cb16ace6ee0063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d49fc920f43d487d6e3eb336bae73f0922585cc76551f42386cb16ace6ee0063->enter($__internal_d49fc920f43d487d6e3eb336bae73f0922585cc76551f42386cb16ace6ee0063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::footer.html.twig"));

        // line 1
        echo "<footer class=\"text-md-left text-center pt-3\" id=\"contact\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6\">
                <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/brandEducapeace.png"), "html", null, true);
        echo "\" class=\"mx-auto pb-2\" width=\"180\">
                <p>+33 (0)6 09 69 79 67</p>
                <p class=\"my-3\">
                    <a target=\"blank\">13 Allée de la Lisière
                        <br>77420 Champ sur Marne</a>
                </p>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                ";
        // line 13
        $this->loadTemplate("::contact_form.html.twig", "::footer.html.twig", 13)->display($context);
        // line 14
        echo "            </div>
            <div class=\"col-lg-1\"></div>
            <div class=\"col-lg-3\">
                <h4>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("others.text.13"), "html", null, true);
        echo "</h4>
                <a href=\"https://www.facebook.com/Educapeace/\" target=\"blank\"><i class=\"fab fa-facebook-square text-muted fa-3x m-1\"></i></a>
                <a href=\"#\" target=\"blank\"><i class=\"fab fa-twitter-square text-muted fa-3x m-1\"></i></a>
                <a href=\"#\" target=\"blank\"><i class=\"fab fa-youtube-square text-muted fa-3x m-1\"></i></a>
            </div>
        </div>
        <div class=\"row text-center\">
            <div class=\"col-md-12\">
                <p class=\"text-muted my-2\">© ";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Educapeace - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("others.text.14"), "html", null, true);
        echo ". </p>
            </div>
        </div>
    </div>
</footer>";
        
        $__internal_bf1e197e98670dfe85222b9b50eed8fd4d7eba8b033dd4b5eac2fe26208239eb->leave($__internal_bf1e197e98670dfe85222b9b50eed8fd4d7eba8b033dd4b5eac2fe26208239eb_prof);

        
        $__internal_d49fc920f43d487d6e3eb336bae73f0922585cc76551f42386cb16ace6ee0063->leave($__internal_d49fc920f43d487d6e3eb336bae73f0922585cc76551f42386cb16ace6ee0063_prof);

    }

    public function getTemplateName()
    {
        return "::footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 25,  49 => 17,  44 => 14,  42 => 13,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer class=\"text-md-left text-center pt-3\" id=\"contact\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6\">
                <img src=\"{{ asset('bundles/front/assets/brandEducapeace.png') }}\" class=\"mx-auto pb-2\" width=\"180\">
                <p>+33 (0)6 09 69 79 67</p>
                <p class=\"my-3\">
                    <a target=\"blank\">13 Allée de la Lisière
                        <br>77420 Champ sur Marne</a>
                </p>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                {% include '::contact_form.html.twig' %}
            </div>
            <div class=\"col-lg-1\"></div>
            <div class=\"col-lg-3\">
                <h4>{{ 'others.text.13'|trans }}</h4>
                <a href=\"https://www.facebook.com/Educapeace/\" target=\"blank\"><i class=\"fab fa-facebook-square text-muted fa-3x m-1\"></i></a>
                <a href=\"#\" target=\"blank\"><i class=\"fab fa-twitter-square text-muted fa-3x m-1\"></i></a>
                <a href=\"#\" target=\"blank\"><i class=\"fab fa-youtube-square text-muted fa-3x m-1\"></i></a>
            </div>
        </div>
        <div class=\"row text-center\">
            <div class=\"col-md-12\">
                <p class=\"text-muted my-2\">© {{ \"now\"|date('Y') }} Educapeace - {{ 'others.text.14'|trans }}. </p>
            </div>
        </div>
    </div>
</footer>", "::footer.html.twig", "/Users/ekdevcenter/Sites/educapeace/app/Resources/views/footer.html.twig");
    }
}
