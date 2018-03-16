<?php

/* AssoBundle:Shop:_cart.html.twig */
class __TwigTemplate_0050d7ab0c90c1fdc63d707ea258b95bfe82778c2ddf35e047c8ec86baee1138 extends Twig_Template
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
        $__internal_dbe992be2c6a97bce28b0ab906390075af50136719671d3ad2c6e6d8367bcabc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbe992be2c6a97bce28b0ab906390075af50136719671d3ad2c6e6d8367bcabc->enter($__internal_dbe992be2c6a97bce28b0ab906390075af50136719671d3ad2c6e6d8367bcabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AssoBundle:Shop:_cart.html.twig"));

        $__internal_c1e271dd371492ba496204027efef85ff42ae75a4cde93e3d447d59ad4d0888b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1e271dd371492ba496204027efef85ff42ae75a4cde93e3d447d59ad4d0888b->enter($__internal_c1e271dd371492ba496204027efef85ff42ae75a4cde93e3d447d59ad4d0888b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AssoBundle:Shop:_cart.html.twig"));

        // line 1
        echo "<div class=\"card\" xmlns=\"http://www.w3.org/1999/html\" style=\"vertical-align: top\">
    <h3 class=\"card-header card-header-product\">PANIER</h3>
    <div class=\"card-block card-align-product\">
        <table width=\"100%\">
            <tr>
                <td><span id=\"prod_qte_1\">1</span> x Titre produit 1</td>
                <td id=\"plus_1\" class=\"price-right\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/img/plus.jpg")), "html", null, true);
        echo "\"></td>
                <td id=\"minus_1\" class=\"price-right\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/img/moins.jpg")), "html", null, true);
        echo "\"></td>
                <td id=\"delete_1\" class=\"price-right\"><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/img/poubelle.jpg")), "html", null, true);
        echo "\"></td>
            </tr>
            <tr>
                <td><span id=\"prod_qte_2\">1</span> x Titre produit 2</td>
                <td id=\"plus_2\" class=\"price-right\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/img/plus.jpg")), "html", null, true);
        echo "\"></td>
                <td id=\"minus_2\" class=\"price-right\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/img/moins.jpg")), "html", null, true);
        echo "\"></td>
                <td id=\"delete_2\" class=\"price-right\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/img/poubelle.jpg")), "html", null, true);
        echo "\"></td>
            </tr>
            <tr>
                <td><span id=\"prod_qte_3\">1</span> x Titre produit 3</td>
                <td id=\"plus_3\" class=\"price-right\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/img/plus.jpg")), "html", null, true);
        echo "\"></td>
                <td id=\"minus_3\" class=\"price-right\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/img/moins.jpg")), "html", null, true);
        echo "\"></td>
                <td id=\"delete_3\" class=\"price-right\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/img/poubelle.jpg")), "html", null, true);
        echo "\"></td>
            </tr>
        </table>
    </div>
    <div class=\"card-block card-align-product\">
        <table width=\"100%\">
            <tr>
                <td><b>Sous Total :</b></td>
                <td class=\"price price-right\">45,67€</td>
            </tr>
            <tr>
                <td><b>Frais :</b></td>
                <td class=\"price price-right\">4,00€</td>
            </tr>
            <tr>
                <td class=\"card-total\">Total :</td>
                <td id=\"cart-total\" class=\"card-total price-right\">50,67€</td>
            </tr>
            <tr><td colspan=\"2\">&nbsp;</td></tr>
            <tr>
                <td><b>Code promo :</b></td>
                <td><input type=\"text\" name=\"\" id=\"cart-code-promo\" placeholder=\"EDUCAPEACE20\"/></td>
            </tr>
        </table>
    </div>
    <div class=\"card-footer card-header-product\">
        COMMANDER
    </div>
</div>";
        
        $__internal_dbe992be2c6a97bce28b0ab906390075af50136719671d3ad2c6e6d8367bcabc->leave($__internal_dbe992be2c6a97bce28b0ab906390075af50136719671d3ad2c6e6d8367bcabc_prof);

        
        $__internal_c1e271dd371492ba496204027efef85ff42ae75a4cde93e3d447d59ad4d0888b->leave($__internal_c1e271dd371492ba496204027efef85ff42ae75a4cde93e3d447d59ad4d0888b_prof);

    }

    public function getTemplateName()
    {
        return "AssoBundle:Shop:_cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 21,  67 => 20,  63 => 19,  56 => 15,  52 => 14,  48 => 13,  41 => 9,  37 => 8,  33 => 7,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"card\" xmlns=\"http://www.w3.org/1999/html\" style=\"vertical-align: top\">
    <h3 class=\"card-header card-header-product\">PANIER</h3>
    <div class=\"card-block card-align-product\">
        <table width=\"100%\">
            <tr>
                <td><span id=\"prod_qte_1\">1</span> x Titre produit 1</td>
                <td id=\"plus_1\" class=\"price-right\"><img src=\"{{ absolute_url(asset('bundles/front/assets/img/plus.jpg')) }}\"></td>
                <td id=\"minus_1\" class=\"price-right\"><img src=\"{{ absolute_url(asset('bundles/front/assets/img/moins.jpg')) }}\"></td>
                <td id=\"delete_1\" class=\"price-right\"><img src=\"{{ absolute_url(asset('bundles/front/assets/img/poubelle.jpg')) }}\"></td>
            </tr>
            <tr>
                <td><span id=\"prod_qte_2\">1</span> x Titre produit 2</td>
                <td id=\"plus_2\" class=\"price-right\"><img src=\"{{ absolute_url(asset('bundles/front/assets/img/plus.jpg')) }}\"></td>
                <td id=\"minus_2\" class=\"price-right\"><img src=\"{{ absolute_url(asset('bundles/front/assets/img/moins.jpg')) }}\"></td>
                <td id=\"delete_2\" class=\"price-right\"><img src=\"{{ absolute_url(asset('bundles/front/assets/img/poubelle.jpg')) }}\"></td>
            </tr>
            <tr>
                <td><span id=\"prod_qte_3\">1</span> x Titre produit 3</td>
                <td id=\"plus_3\" class=\"price-right\"><img src=\"{{ absolute_url(asset('bundles/front/assets/img/plus.jpg')) }}\"></td>
                <td id=\"minus_3\" class=\"price-right\"><img src=\"{{ absolute_url(asset('bundles/front/assets/img/moins.jpg')) }}\"></td>
                <td id=\"delete_3\" class=\"price-right\"><img src=\"{{ absolute_url(asset('bundles/front/assets/img/poubelle.jpg')) }}\"></td>
            </tr>
        </table>
    </div>
    <div class=\"card-block card-align-product\">
        <table width=\"100%\">
            <tr>
                <td><b>Sous Total :</b></td>
                <td class=\"price price-right\">45,67€</td>
            </tr>
            <tr>
                <td><b>Frais :</b></td>
                <td class=\"price price-right\">4,00€</td>
            </tr>
            <tr>
                <td class=\"card-total\">Total :</td>
                <td id=\"cart-total\" class=\"card-total price-right\">50,67€</td>
            </tr>
            <tr><td colspan=\"2\">&nbsp;</td></tr>
            <tr>
                <td><b>Code promo :</b></td>
                <td><input type=\"text\" name=\"\" id=\"cart-code-promo\" placeholder=\"EDUCAPEACE20\"/></td>
            </tr>
        </table>
    </div>
    <div class=\"card-footer card-header-product\">
        COMMANDER
    </div>
</div>", "AssoBundle:Shop:_cart.html.twig", "/Users/ekdevcenter/Sites/educapeace/src/EK/AssoBundle/Resources/views/Shop/_cart.html.twig");
    }
}
