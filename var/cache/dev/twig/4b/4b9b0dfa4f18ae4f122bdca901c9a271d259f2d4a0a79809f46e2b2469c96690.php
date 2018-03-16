<?php

/* AssoBundle:Home:news.html.twig */
class __TwigTemplate_6f72917a247b9fd2ceec819164b1aaa7e5c3757179b17d37b3b87cacd41cf00b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AssoBundle::layout.html.twig", "AssoBundle:Home:news.html.twig", 3);
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
        $__internal_d59d272173f7ae74e58462852599f1d67e708ab261502d5b94e073f5f66fb472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d59d272173f7ae74e58462852599f1d67e708ab261502d5b94e073f5f66fb472->enter($__internal_d59d272173f7ae74e58462852599f1d67e708ab261502d5b94e073f5f66fb472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AssoBundle:Home:news.html.twig"));

        $__internal_ed4ceb154e50cae8bca29a7071fd80708521df96cdb39b8e0ab90d9dae38b9f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed4ceb154e50cae8bca29a7071fd80708521df96cdb39b8e0ab90d9dae38b9f8->enter($__internal_ed4ceb154e50cae8bca29a7071fd80708521df96cdb39b8e0ab90d9dae38b9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AssoBundle:Home:news.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d59d272173f7ae74e58462852599f1d67e708ab261502d5b94e073f5f66fb472->leave($__internal_d59d272173f7ae74e58462852599f1d67e708ab261502d5b94e073f5f66fb472_prof);

        
        $__internal_ed4ceb154e50cae8bca29a7071fd80708521df96cdb39b8e0ab90d9dae38b9f8->leave($__internal_ed4ceb154e50cae8bca29a7071fd80708521df96cdb39b8e0ab90d9dae38b9f8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6cc07756d269c4249fe92b5e7dc0c8c11fb7af4a6048ed0cd5c500c26a78c4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6cc07756d269c4249fe92b5e7dc0c8c11fb7af4a6048ed0cd5c500c26a78c4b->enter($__internal_e6cc07756d269c4249fe92b5e7dc0c8c11fb7af4a6048ed0cd5c500c26a78c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9bf655cc089ccff6e84ae976a7145b06fc184abc9e4b8c429dcd9be7db05d333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf655cc089ccff6e84ae976a7145b06fc184abc9e4b8c429dcd9be7db05d333->enter($__internal_9bf655cc089ccff6e84ae976a7145b06fc184abc9e4b8c429dcd9be7db05d333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["page_titre"]) || array_key_exists("page_titre", $context) ? $context["page_titre"] : (function () { throw new Twig_Error_Runtime('Variable "page_titre" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        
        $__internal_9bf655cc089ccff6e84ae976a7145b06fc184abc9e4b8c429dcd9be7db05d333->leave($__internal_9bf655cc089ccff6e84ae976a7145b06fc184abc9e4b8c429dcd9be7db05d333_prof);

        
        $__internal_e6cc07756d269c4249fe92b5e7dc0c8c11fb7af4a6048ed0cd5c500c26a78c4b->leave($__internal_e6cc07756d269c4249fe92b5e7dc0c8c11fb7af4a6048ed0cd5c500c26a78c4b_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_5aece79c80b6ab8def359f32eb32ec76f0d95d22613de49699058985d837d20c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aece79c80b6ab8def359f32eb32ec76f0d95d22613de49699058985d837d20c->enter($__internal_5aece79c80b6ab8def359f32eb32ec76f0d95d22613de49699058985d837d20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_cf29299244e05a9e24fc02cc0c8cad66c5279924cb34ec40ccc07f1b32443f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf29299244e05a9e24fc02cc0c8cad66c5279924cb34ec40ccc07f1b32443f53->enter($__internal_cf29299244e05a9e24fc02cc0c8cad66c5279924cb34ec40ccc07f1b32443f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "   user =  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->getSourceContext()); })()), "user", array()), "html", null, true);
        echo " <br /><br />

    <section id=\"blog\" class=\"container py-2\">
        <div class=\"blog\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div class=\"blog-item py-3\"><div class=\"row\">
                            <div class=\"col-12 blog-content py-3\">
                                <img class=\"img-fluid\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/DSC_5095.jpg"), "html", null, true);
        echo "\" width=\"100%\" alt=\"\">
                                <div class=\"m-3 entry-meta\"> <span id=\"publish_date\">18 juin</span></div>
                                <h4 class=\"\">CLÔTURE AU TOUR DU PUITS</h4>
                                <p class=\"text-left\">Dernières étapes de la construction de notre 2ème puits conformément à notre engagement contractuel : - Formation du comité d'entretien - Mise en place de la clôture et portillon pour le puits. Parce qu'il est important d'aller au bout
                                    de ce qu'on fait si on veut assurer sa pérennité : N'étant pas sur place, nous avons jugé utile de mettre en place un Comité de gestion du puits constitué des gens du village eux-mêmes. Une petite formation sur l'importance du projet,
                                    et quelques notions du WASH (eau assainissement et hygiène). Nous avons également signé un petit contrat d'entretien avec l'entreprise qui prendra effet dès la fin de la garantie. En cas de panne, il suffira d'entrer en contact avec
                                    l'entrepreneur et voir ce qu'il a lieu de faire. Nous avons également protégé le point d'eau d'une clôture et portillon afin que ce lieu ne soit pas accessible à tous (animaux par exemple). De ce fait une nouvelle plaque de remerciements
                                    du sponsor à été faite pour la clôture également en guise de Reconnaissance.
                                    <br>EDUCAPEACE----&gt; Le geste de l'espoir : Merci pour votre confiance </p>
                                <a href=\"#\" class=\"btn btn-secondary text-white\">En savoir +</a>
                            </div>
                        </div>
                    </div>
                    <!--/.blog-item-->
                    <div class=\"blog-item py-3\">
                        <div class=\"row\">
                            <div class=\"col-12 blog-content py-3\">
                                <img class=\"img-fluid\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/dsc_4604.jpg"), "html", null, true);
        echo "\" width=\"100%\" alt=\"\">
                                <div class=\"m-3 entry-meta\"> <span id=\"publish_date\">18 juin</span></div>
                                <h4 class=\"\">DON DE GOURDES</h4>
                                <p class=\"text-left\">L'humanité à besoin de chacun de nous, et c'est grâce à tout un chacun que nous pouvons améliorer ce monde. Nous n'avons pas la prétention de vouloir changer le monde, mais nous avons la conviction et l'espoir qu'un jour ce monde sera
                                    meilleur. Vous avez été 37 personnes à avoir répondu favorablement à notre appel de coeur pour l'achat des gourdes à eau aux enfants. Ces gourdes ont été distribués dans nos deux écoles partenaire, 150 pièces à l'école publique de Bitsogmam,
                                    et 100 pièces à l'école publique de Nkol-Mbong kama. Nous avons trouvé utile de signe un \"accord pour dons de gourdes\" Cet accord stipule que les gourdes offertes par l'association Educapeace sont et demeure une propriété de ces écoles.
                                    Ces goudes en innoxe,d'une contenance d'un litre ,doté d'un double capuchon pour fermeture , la principale résultante est non seulement une bonne conservation du liquide qui garde sa température ambiante mais une protection ultime contre
                                    les microbes anaérobiques, ces enfants auront à leur disposition tout au long de la journée une eau saine pour assouvir leur soif. Aucun d'entre vous ne connaissent les enfants, mais vous l'avez fait sans hésitation. Vous pouvez être
                                    fière d'avoir contribué à une action qui pour certain semble anodin , mais pour ces enfants est un grand geste qui améliorera leur conditions de vie et restera à jamais gravé dans leur mémoire. Les photos ci - dessous témoignent de la
                                    joie de ces enfants.
                                    <br>Merci pour votre générosité et confiance.</p>
                                <a class=\"btn btn-secondary text-white\" href=\"#\">En savoir +</a>
                            </div>
                        </div>
                    </div>
                    <!--/.blog-item-->
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
                </div>
                <!--/.col-md-8-->
                <aside class=\"col-md-4 p-3\">
                    <div class=\"widget nouvelles\">
                        <h5 class=\"text-md-center\">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            DERNIÈRES NOUVELLES</h5>
                        <ul class=\"\">
                            <li>
                                <a href=\"#\">
                                    <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/DSC_5098.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-thumbnail\">
                                    <h6>Consequat bibendum quam liquam viverra</h6>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/DSC_7276.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-thumbnail\">
                                    <h6>Consequat bibendum quam liquam viverra</h6>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/DSC_7412.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-thumbnail\">
                                    <h6>Consequat bibendum quam liquam viverra</h6>
                                </a>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
            <!--/.row-->
        </div>
    </section>
";
        
        $__internal_cf29299244e05a9e24fc02cc0c8cad66c5279924cb34ec40ccc07f1b32443f53->leave($__internal_cf29299244e05a9e24fc02cc0c8cad66c5279924cb34ec40ccc07f1b32443f53_prof);

        
        $__internal_5aece79c80b6ab8def359f32eb32ec76f0d95d22613de49699058985d837d20c->leave($__internal_5aece79c80b6ab8def359f32eb32ec76f0d95d22613de49699058985d837d20c_prof);

    }

    public function getTemplateName()
    {
        return "AssoBundle:Home:news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 92,  159 => 86,  150 => 80,  100 => 33,  80 => 16,  68 => 8,  59 => 7,  41 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/EK/AssoBundle/Resources/views/Home/news.html.twig #}
{# Template Bundle #}
{% extends \"AssoBundle::layout.html.twig\" %}

{% block title %}{{ page_titre }}{% endblock %}

{% block content %}
   user =  {{ app.user }} <br /><br />

    <section id=\"blog\" class=\"container py-2\">
        <div class=\"blog\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div class=\"blog-item py-3\"><div class=\"row\">
                            <div class=\"col-12 blog-content py-3\">
                                <img class=\"img-fluid\" src=\"{{ asset('bundles/front/assets/DSC_5095.jpg') }}\" width=\"100%\" alt=\"\">
                                <div class=\"m-3 entry-meta\"> <span id=\"publish_date\">18 juin</span></div>
                                <h4 class=\"\">CLÔTURE AU TOUR DU PUITS</h4>
                                <p class=\"text-left\">Dernières étapes de la construction de notre 2ème puits conformément à notre engagement contractuel : - Formation du comité d'entretien - Mise en place de la clôture et portillon pour le puits. Parce qu'il est important d'aller au bout
                                    de ce qu'on fait si on veut assurer sa pérennité : N'étant pas sur place, nous avons jugé utile de mettre en place un Comité de gestion du puits constitué des gens du village eux-mêmes. Une petite formation sur l'importance du projet,
                                    et quelques notions du WASH (eau assainissement et hygiène). Nous avons également signé un petit contrat d'entretien avec l'entreprise qui prendra effet dès la fin de la garantie. En cas de panne, il suffira d'entrer en contact avec
                                    l'entrepreneur et voir ce qu'il a lieu de faire. Nous avons également protégé le point d'eau d'une clôture et portillon afin que ce lieu ne soit pas accessible à tous (animaux par exemple). De ce fait une nouvelle plaque de remerciements
                                    du sponsor à été faite pour la clôture également en guise de Reconnaissance.
                                    <br>EDUCAPEACE----&gt; Le geste de l'espoir : Merci pour votre confiance </p>
                                <a href=\"#\" class=\"btn btn-secondary text-white\">En savoir +</a>
                            </div>
                        </div>
                    </div>
                    <!--/.blog-item-->
                    <div class=\"blog-item py-3\">
                        <div class=\"row\">
                            <div class=\"col-12 blog-content py-3\">
                                <img class=\"img-fluid\" src=\"{{ asset('bundles/front/assets/dsc_4604.jpg') }}\" width=\"100%\" alt=\"\">
                                <div class=\"m-3 entry-meta\"> <span id=\"publish_date\">18 juin</span></div>
                                <h4 class=\"\">DON DE GOURDES</h4>
                                <p class=\"text-left\">L'humanité à besoin de chacun de nous, et c'est grâce à tout un chacun que nous pouvons améliorer ce monde. Nous n'avons pas la prétention de vouloir changer le monde, mais nous avons la conviction et l'espoir qu'un jour ce monde sera
                                    meilleur. Vous avez été 37 personnes à avoir répondu favorablement à notre appel de coeur pour l'achat des gourdes à eau aux enfants. Ces gourdes ont été distribués dans nos deux écoles partenaire, 150 pièces à l'école publique de Bitsogmam,
                                    et 100 pièces à l'école publique de Nkol-Mbong kama. Nous avons trouvé utile de signe un \"accord pour dons de gourdes\" Cet accord stipule que les gourdes offertes par l'association Educapeace sont et demeure une propriété de ces écoles.
                                    Ces goudes en innoxe,d'une contenance d'un litre ,doté d'un double capuchon pour fermeture , la principale résultante est non seulement une bonne conservation du liquide qui garde sa température ambiante mais une protection ultime contre
                                    les microbes anaérobiques, ces enfants auront à leur disposition tout au long de la journée une eau saine pour assouvir leur soif. Aucun d'entre vous ne connaissent les enfants, mais vous l'avez fait sans hésitation. Vous pouvez être
                                    fière d'avoir contribué à une action qui pour certain semble anodin , mais pour ces enfants est un grand geste qui améliorera leur conditions de vie et restera à jamais gravé dans leur mémoire. Les photos ci - dessous témoignent de la
                                    joie de ces enfants.
                                    <br>Merci pour votre générosité et confiance.</p>
                                <a class=\"btn btn-secondary text-white\" href=\"#\">En savoir +</a>
                            </div>
                        </div>
                    </div>
                    <!--/.blog-item-->
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
                </div>
                <!--/.col-md-8-->
                <aside class=\"col-md-4 p-3\">
                    <div class=\"widget nouvelles\">
                        <h5 class=\"text-md-center\">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            DERNIÈRES NOUVELLES</h5>
                        <ul class=\"\">
                            <li>
                                <a href=\"#\">
                                    <img src=\"{{ asset('bundles/front/assets/DSC_5098.jpg') }}\" alt=\"\" class=\"img-thumbnail\">
                                    <h6>Consequat bibendum quam liquam viverra</h6>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img src=\"{{ asset('bundles/front/assets/DSC_7276.jpg') }}\" alt=\"\" class=\"img-thumbnail\">
                                    <h6>Consequat bibendum quam liquam viverra</h6>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img src=\"{{ asset('bundles/front/assets/DSC_7412.jpg') }}\" alt=\"\" class=\"img-thumbnail\">
                                    <h6>Consequat bibendum quam liquam viverra</h6>
                                </a>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
            <!--/.row-->
        </div>
    </section>
{% endblock %}", "AssoBundle:Home:news.html.twig", "/Users/ekdevcenter/Sites/educapeace/src/EK/AssoBundle/Resources/views/Home/news.html.twig");
    }
}
