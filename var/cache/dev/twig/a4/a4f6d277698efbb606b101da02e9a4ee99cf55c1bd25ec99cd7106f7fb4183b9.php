<?php

/* ::sponsor.html.twig */
class __TwigTemplate_b9277aea9da1c20d3b21d4c5887ac0db7f52459a7c358f9e83ea61f050dd2887 extends Twig_Template
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
        $__internal_2d7e091ba7155b4a9b2d6dd3f646719e23e0c16765f35daac8c6cd22998064d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d7e091ba7155b4a9b2d6dd3f646719e23e0c16765f35daac8c6cd22998064d1->enter($__internal_2d7e091ba7155b4a9b2d6dd3f646719e23e0c16765f35daac8c6cd22998064d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::sponsor.html.twig"));

        $__internal_1f6cba71e67105fd8cb1ec5de412c5731fb3e76c12cb7123a3b17e659388ceae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f6cba71e67105fd8cb1ec5de412c5731fb3e76c12cb7123a3b17e659388ceae->enter($__internal_1f6cba71e67105fd8cb1ec5de412c5731fb3e76c12cb7123a3b17e659388ceae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::sponsor.html.twig"));

        // line 1
        echo "<div class=\"py-2\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <hr size=\"1\" color=\"#eee\"/>
            <div class=\"col-md-12\">
                <h1 class=\"mb-4 text-center\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("others.text.1"), "html", null, true);
        echo "</h1>
            </div>
        </div>
        <div class=\"row justify-content-center\">
            ";
        // line 15
        echo "            <div class=\"col-md-1 col-2\">
                <img class=\"center-block img-fluid d-block\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/partners/logo-pan-piper.jpg"), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-md-1 col-2\">
                <img class=\"center-block img-fluid d-block\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/partners/pontault-combault.png"), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-md-1 col-2\">
                <img class=\"center-block img-fluid d-block\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/partners/csc pontault combault.jpg"), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-md-1 col-2\">
                <img class=\"center-block img-fluid d-block\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/partners/Conseil-Gnral-77.jpg"), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-md-1 col-2\">
                <img class=\"center-block img-fluid d-block\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/partners/ascovime-opt2.png"), "html", null, true);
        echo "\">
            </div>
        </div>
        ";
        // line 38
        echo "    </div>
</div>";
        
        $__internal_2d7e091ba7155b4a9b2d6dd3f646719e23e0c16765f35daac8c6cd22998064d1->leave($__internal_2d7e091ba7155b4a9b2d6dd3f646719e23e0c16765f35daac8c6cd22998064d1_prof);

        
        $__internal_1f6cba71e67105fd8cb1ec5de412c5731fb3e76c12cb7123a3b17e659388ceae->leave($__internal_1f6cba71e67105fd8cb1ec5de412c5731fb3e76c12cb7123a3b17e659388ceae_prof);

    }

    public function getTemplateName()
    {
        return "::sponsor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 38,  66 => 28,  60 => 25,  54 => 22,  48 => 19,  42 => 16,  39 => 15,  32 => 6,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"py-2\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <hr size=\"1\" color=\"#eee\"/>
            <div class=\"col-md-12\">
                <h1 class=\"mb-4 text-center\">{{ 'others.text.1'|trans }}</h1>
            </div>
        </div>
        <div class=\"row justify-content-center\">
            {#
            <div class=\"col-md-1 col-2\">
                <img class=\"center-block img-fluid d-block\" src=\"{{ asset('bundles/front/assets/partners/AE75.jpg') }}\">
            </div>
            #}
            <div class=\"col-md-1 col-2\">
                <img class=\"center-block img-fluid d-block\" src=\"{{ asset('bundles/front/assets/partners/logo-pan-piper.jpg') }}\">
            </div>
            <div class=\"col-md-1 col-2\">
                <img class=\"center-block img-fluid d-block\" src=\"{{ asset('bundles/front/assets/partners/pontault-combault.png') }}\">
            </div>
            <div class=\"col-md-1 col-2\">
                <img class=\"center-block img-fluid d-block\" src=\"{{ asset('bundles/front/assets/partners/csc pontault combault.jpg') }}\">
            </div>
            <div class=\"col-md-1 col-2\">
                <img class=\"center-block img-fluid d-block\" src=\"{{ asset('bundles/front/assets/partners/Conseil-Gnral-77.jpg') }}\">
            </div>
            <div class=\"col-md-1 col-2\">
                <img class=\"center-block img-fluid d-block\" src=\"{{ asset('bundles/front/assets/partners/ascovime-opt2.png') }}\">
            </div>
        </div>
        {#
        <div class=\"row justify-content-center\">
            <div class=\"col-md-1 col-2\">
                <img class=\"center-block img-fluid d-block\" src=\"{{ asset('bundles/front/assets/partners/ekdev.png') }}\">
            </div>
        </div>
        #}
    </div>
</div>", "::sponsor.html.twig", "/Users/ekdevcenter/Sites/educapeace/app/Resources/views/sponsor.html.twig");
    }
}
