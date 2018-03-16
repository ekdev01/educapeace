<?php

/* AssoBundle:Shop:index.html.twig */
class __TwigTemplate_2902ca795e3f2b71e254a5999dbb277c4ce39aa039feffb7191c49c6188e6285 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AssoBundle::layout.html.twig", "AssoBundle:Shop:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AssoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2cb6b93514438bcfa6a8e2958974180d421232bc1d881856aea0add8e83679b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cb6b93514438bcfa6a8e2958974180d421232bc1d881856aea0add8e83679b2->enter($__internal_2cb6b93514438bcfa6a8e2958974180d421232bc1d881856aea0add8e83679b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AssoBundle:Shop:index.html.twig"));

        $__internal_73da085e0f3e1053856acf23166f18188a3118eeb1205a1768fad18bcaafe6aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73da085e0f3e1053856acf23166f18188a3118eeb1205a1768fad18bcaafe6aa->enter($__internal_73da085e0f3e1053856acf23166f18188a3118eeb1205a1768fad18bcaafe6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AssoBundle:Shop:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cb6b93514438bcfa6a8e2958974180d421232bc1d881856aea0add8e83679b2->leave($__internal_2cb6b93514438bcfa6a8e2958974180d421232bc1d881856aea0add8e83679b2_prof);

        
        $__internal_73da085e0f3e1053856acf23166f18188a3118eeb1205a1768fad18bcaafe6aa->leave($__internal_73da085e0f3e1053856acf23166f18188a3118eeb1205a1768fad18bcaafe6aa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e8a40456f8a0b7116f81a5b29677f5115e26bb38b20daf2af7a15094531dbda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e8a40456f8a0b7116f81a5b29677f5115e26bb38b20daf2af7a15094531dbda->enter($__internal_1e8a40456f8a0b7116f81a5b29677f5115e26bb38b20daf2af7a15094531dbda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9ec4a52c2239e12d87723c0f1b2a9d128b28621b081a4a81e3c526c4eadb9aed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ec4a52c2239e12d87723c0f1b2a9d128b28621b081a4a81e3c526c4eadb9aed->enter($__internal_9ec4a52c2239e12d87723c0f1b2a9d128b28621b081a4a81e3c526c4eadb9aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["page_titre"]) || array_key_exists("page_titre", $context) ? $context["page_titre"] : (function () { throw new Twig_Error_Runtime('Variable "page_titre" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        
        $__internal_9ec4a52c2239e12d87723c0f1b2a9d128b28621b081a4a81e3c526c4eadb9aed->leave($__internal_9ec4a52c2239e12d87723c0f1b2a9d128b28621b081a4a81e3c526c4eadb9aed_prof);

        
        $__internal_1e8a40456f8a0b7116f81a5b29677f5115e26bb38b20daf2af7a15094531dbda->leave($__internal_1e8a40456f8a0b7116f81a5b29677f5115e26bb38b20daf2af7a15094531dbda_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_c9dfc0afe5452a1112b00edc536384d9c79f8d9ead0189ee9f1d8117dee3687a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9dfc0afe5452a1112b00edc536384d9c79f8d9ead0189ee9f1d8117dee3687a->enter($__internal_c9dfc0afe5452a1112b00edc536384d9c79f8d9ead0189ee9f1d8117dee3687a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fd68aab9264471c90d77c3f226294fb65f6e684b7d83a00eee4ff56a1634c545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd68aab9264471c90d77c3f226294fb65f6e684b7d83a00eee4ff56a1634c545->enter($__internal_fd68aab9264471c90d77c3f226294fb65f6e684b7d83a00eee4ff56a1634c545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <section id=\"blog\" class=\"container py-2\">

        <div class=\"blog\" style=\"vertical-align: top\"><!--.blog-->
            <div class=\"row\" style=\"vertical-align: top\"><!--.row-->

                <div class=\"col-md-8\"><!--/.col-md-8-->
                    <div class=\"jumbotron\" style=\"margin-top: 21px;\">
                        <h1>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.shop.title"), "html", null, true);
        echo "</h1>
                        <p style=\"text-align: justify\">
                            ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.shop.1"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.shop.2"), "html", null, true);
        echo "<br />
                            ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.shop.3"), "html", null, true);
        echo "
                        </p>
                        ";
        // line 21
        echo "                    </div>
                    <br>
                    <div class=\"input-group\">
                        <div class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Catégorie:
                            </button>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"#\">Colliers</a>
                                <a class=\"dropdown-item\" href=\"#\">Tee-shirts</a>
                                <a class=\"dropdown-item\" href=\"#\">Sacs</a>
                            </div>
                        </div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Veuillez sélectionner une catégorie produit\" aria-label=\"Text input with dropdown button\">
                    </div>

                    <div class=\"blog-item py-3\"><!--.ligne-produit-->
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"card\">
                                    <div class=\"card-block margin-block\">
                                        <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/DSC_5098.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-thumbnail\">
                                        <h3 class=\"card-title\">Titre produit</h3>
                                        <h4 class=\"card-title\">15 &euro;</h4>
                                        <p class=\"card-text\">Mini description du produit</p>
                                        <a href=\"#\" class=\"btn btn-primary btn-product\">AJOUTER</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"card\">
                                    <div class=\"card-block margin-block\">
                                        <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/DSC_7276.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-thumbnail\">
                                        <h3 class=\"card-title\">Titre produit</h3>
                                        <h4 class=\"card-title\">15 &euro;</h4>
                                        <p class=\"card-text\">Mini description du produit</p>
                                        <a href=\"#\" class=\"btn btn-primary btn-product\">AJOUTER</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.ligne-produit-->

                    <div class=\"blog-item py-3\"><!--.ligne-produit-->
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"card\">
                                    <div class=\"card-block margin-block\">
                                        <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/DSC_5098.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-thumbnail\">
                                        <h3 class=\"card-title\">Titre produit</h3>
                                        <h4 class=\"card-title\">15 &euro;</h4>
                                        <p class=\"card-text\">Mini description du produit</p>
                                        <a href=\"#\" class=\"btn btn-primary btn-product\">AJOUTER</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"card\">
                                    <div class=\"card-block margin-block\">
                                        <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/DSC_7276.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-thumbnail\">
                                        <h3 class=\"card-title\">Titre produit</h3>
                                        <h4 class=\"card-title\">15 &euro;</h4>
                                        <p class=\"card-text\">Mini description du produit</p>
                                        <a href=\"#\" class=\"btn btn-primary btn-product\">AJOUTER</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.ligne-produit-->

                    <div class=\"blog-item py-3\"><!--.ligne-produit-->
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"card\">
                                    <div class=\"card-block margin-block\">
                                        <img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/DSC_5098.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-thumbnail\">
                                        <h3 class=\"card-title\">Titre produit</h3>
                                        <h4 class=\"card-title\">15 &euro;</h4>
                                        <p class=\"card-text\">Mini description du produit</p>
                                        <a href=\"#\" class=\"btn btn-primary btn-product\">AJOUTER</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"card\">
                                    <div class=\"card-block margin-block\">
                                        <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/DSC_7276.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-thumbnail\">
                                        <h3 class=\"card-title\">Titre produit</h3>
                                        <h4 class=\"card-title\">15 &euro;</h4>
                                        <p class=\"card-text\">Mini description du produit</p>
                                        <a href=\"#\" class=\"btn btn-primary btn-product\">AJOUTER</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.ligne-produit-->

                    <!--.pagination-->
                    <ul class=\"pagination justify-content-center\">
                        <li class=\"page-item\">
                            <a href=\"#\" aria-label=\"Previous\" class=\"page-link\"> <span aria-hidden=\"true\">«</span> <span class=\"sr-only\">Previous</span> </a>
                        </li>
                        <li class=\"page-item\">
                            <a href=\"#\" class=\"page-link\">1</a>
                        </li>
                        <li class=\"page-item\">
                            <a href=\"#\" class=\"page-link\">2</a>
                        </li>
                        <li class=\"page-item\">
                            <a href=\"#\" class=\"page-link\">3</a>
                        </li>
                        <li class=\"page-item\">
                            <a href=\"#\" class=\"page-link\">4</a>
                        </li>
                        <li class=\"page-item\">
                            <a href=\"#\" class=\"page-link\" aria-label=\"Next\"> <span aria-hidden=\"true\">»</span> <span class=\"sr-only\">Next</span> </a>
                        </li>
                    </ul>
                    <!--/.pagination-->

                </div><!--/.col-md-8-->

                <aside class=\"col-md-4 p-3\" style=\"vertical-align: top\">
                    ";
        // line 144
        $this->loadTemplate("AssoBundle:Shop:_cart.html.twig", "AssoBundle:Shop:index.html.twig", 144)->display($context);
        // line 145
        echo "                </aside>
            </div><!--/.row-->
        </div><!--/.blog-->
    </section>
";
        
        $__internal_fd68aab9264471c90d77c3f226294fb65f6e684b7d83a00eee4ff56a1634c545->leave($__internal_fd68aab9264471c90d77c3f226294fb65f6e684b7d83a00eee4ff56a1634c545_prof);

        
        $__internal_c9dfc0afe5452a1112b00edc536384d9c79f8d9ead0189ee9f1d8117dee3687a->leave($__internal_c9dfc0afe5452a1112b00edc536384d9c79f8d9ead0189ee9f1d8117dee3687a_prof);

    }

    public function getTemplateName()
    {
        return "AssoBundle:Shop:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 145,  236 => 144,  196 => 107,  182 => 96,  163 => 80,  149 => 69,  130 => 53,  116 => 42,  93 => 21,  88 => 18,  82 => 17,  77 => 15,  68 => 8,  59 => 7,  41 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/EK/AssoBundle/Resources/views/Shop/index.html.twig #}
{# Template Bundle #}
{% extends \"AssoBundle::layout.html.twig\" %}

{% block title %}{{ page_titre }}{% endblock %}

{% block content %}
    <section id=\"blog\" class=\"container py-2\">

        <div class=\"blog\" style=\"vertical-align: top\"><!--.blog-->
            <div class=\"row\" style=\"vertical-align: top\"><!--.row-->

                <div class=\"col-md-8\"><!--/.col-md-8-->
                    <div class=\"jumbotron\" style=\"margin-top: 21px;\">
                        <h1>{{ 'label.shop.title'|trans }}</h1>
                        <p style=\"text-align: justify\">
                            {{ 'label.shop.1'|trans }} {{ 'label.shop.2'|trans }}<br />
                            {{ 'label.shop.3'|trans }}
                        </p>
                        {# <p><a href=\"#\" id=\"shopexplanation\" role=\"button\" data-toggle=\"modal\" data-target=\"#_shopexplanationModal\" class=\"btn btn-primary btn-lg\">{{ 'label.shop.4'|trans }}</a></p> #}
                    </div>
                    <br>
                    <div class=\"input-group\">
                        <div class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Catégorie:
                            </button>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"#\">Colliers</a>
                                <a class=\"dropdown-item\" href=\"#\">Tee-shirts</a>
                                <a class=\"dropdown-item\" href=\"#\">Sacs</a>
                            </div>
                        </div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Veuillez sélectionner une catégorie produit\" aria-label=\"Text input with dropdown button\">
                    </div>

                    <div class=\"blog-item py-3\"><!--.ligne-produit-->
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"card\">
                                    <div class=\"card-block margin-block\">
                                        <img src=\"{{ asset('bundles/front/assets/DSC_5098.jpg') }}\" alt=\"\" class=\"img-thumbnail\">
                                        <h3 class=\"card-title\">Titre produit</h3>
                                        <h4 class=\"card-title\">15 &euro;</h4>
                                        <p class=\"card-text\">Mini description du produit</p>
                                        <a href=\"#\" class=\"btn btn-primary btn-product\">AJOUTER</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"card\">
                                    <div class=\"card-block margin-block\">
                                        <img src=\"{{ asset('bundles/front/assets/DSC_7276.jpg') }}\" alt=\"\" class=\"img-thumbnail\">
                                        <h3 class=\"card-title\">Titre produit</h3>
                                        <h4 class=\"card-title\">15 &euro;</h4>
                                        <p class=\"card-text\">Mini description du produit</p>
                                        <a href=\"#\" class=\"btn btn-primary btn-product\">AJOUTER</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.ligne-produit-->

                    <div class=\"blog-item py-3\"><!--.ligne-produit-->
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"card\">
                                    <div class=\"card-block margin-block\">
                                        <img src=\"{{ asset('bundles/front/assets/DSC_5098.jpg') }}\" alt=\"\" class=\"img-thumbnail\">
                                        <h3 class=\"card-title\">Titre produit</h3>
                                        <h4 class=\"card-title\">15 &euro;</h4>
                                        <p class=\"card-text\">Mini description du produit</p>
                                        <a href=\"#\" class=\"btn btn-primary btn-product\">AJOUTER</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"card\">
                                    <div class=\"card-block margin-block\">
                                        <img src=\"{{ asset('bundles/front/assets/DSC_7276.jpg') }}\" alt=\"\" class=\"img-thumbnail\">
                                        <h3 class=\"card-title\">Titre produit</h3>
                                        <h4 class=\"card-title\">15 &euro;</h4>
                                        <p class=\"card-text\">Mini description du produit</p>
                                        <a href=\"#\" class=\"btn btn-primary btn-product\">AJOUTER</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.ligne-produit-->

                    <div class=\"blog-item py-3\"><!--.ligne-produit-->
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"card\">
                                    <div class=\"card-block margin-block\">
                                        <img src=\"{{ asset('bundles/front/assets/DSC_5098.jpg') }}\" alt=\"\" class=\"img-thumbnail\">
                                        <h3 class=\"card-title\">Titre produit</h3>
                                        <h4 class=\"card-title\">15 &euro;</h4>
                                        <p class=\"card-text\">Mini description du produit</p>
                                        <a href=\"#\" class=\"btn btn-primary btn-product\">AJOUTER</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"card\">
                                    <div class=\"card-block margin-block\">
                                        <img src=\"{{ asset('bundles/front/assets/DSC_7276.jpg') }}\" alt=\"\" class=\"img-thumbnail\">
                                        <h3 class=\"card-title\">Titre produit</h3>
                                        <h4 class=\"card-title\">15 &euro;</h4>
                                        <p class=\"card-text\">Mini description du produit</p>
                                        <a href=\"#\" class=\"btn btn-primary btn-product\">AJOUTER</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.ligne-produit-->

                    <!--.pagination-->
                    <ul class=\"pagination justify-content-center\">
                        <li class=\"page-item\">
                            <a href=\"#\" aria-label=\"Previous\" class=\"page-link\"> <span aria-hidden=\"true\">«</span> <span class=\"sr-only\">Previous</span> </a>
                        </li>
                        <li class=\"page-item\">
                            <a href=\"#\" class=\"page-link\">1</a>
                        </li>
                        <li class=\"page-item\">
                            <a href=\"#\" class=\"page-link\">2</a>
                        </li>
                        <li class=\"page-item\">
                            <a href=\"#\" class=\"page-link\">3</a>
                        </li>
                        <li class=\"page-item\">
                            <a href=\"#\" class=\"page-link\">4</a>
                        </li>
                        <li class=\"page-item\">
                            <a href=\"#\" class=\"page-link\" aria-label=\"Next\"> <span aria-hidden=\"true\">»</span> <span class=\"sr-only\">Next</span> </a>
                        </li>
                    </ul>
                    <!--/.pagination-->

                </div><!--/.col-md-8-->

                <aside class=\"col-md-4 p-3\" style=\"vertical-align: top\">
                    {% include 'AssoBundle:Shop:_cart.html.twig' %}
                </aside>
            </div><!--/.row-->
        </div><!--/.blog-->
    </section>
{% endblock %}", "AssoBundle:Shop:index.html.twig", "/Users/ekdevcenter/Sites/educapeace/src/EK/AssoBundle/Resources/views/Shop/index.html.twig");
    }
}
